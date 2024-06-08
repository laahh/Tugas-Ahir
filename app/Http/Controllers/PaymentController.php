<?php

namespace App\Http\Controllers;

use Midtrans\Snap;
use Midtrans\Config;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Transaction;
use App\Models\BarangLelang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;



class PaymentController extends Controller
{


    public function createPayment(Request $request, $barangId)
    {
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $barang = BarangLelang::findOrFail($barangId);
        $user = Auth::user();

        // Cek apakah barang sudah dibayar
        if ($barang->is_paid) {
            return response()->json(['error' => 'Barang ini sudah dibayar.'], 400);
        }

        $winningBid = $barang->bids()
            ->where('user_id', $user->id)
            ->where('status', 'menang')
            ->orderBy('nominal_bid', 'desc')
            ->first();

        if (!$winningBid) {
            return response()->json(['error' => 'Tidak ada bid menang yang ditemukan.'], 404);
        }

        $transaction = Transaction::create([
            'user_id' => $user->id,
            'barang_lelang_id' => $barang->id,
            'amount' => $winningBid->nominal_bid,
            'status' => 'pending'
        ]);

        $payload = [
            'transaction_details' => [
                'order_id' => $transaction->id,
                'gross_amount' => $transaction->amount,
            ],
            'customer_details' => [
                'first_name' => $user->name,
                'email' => $user->email,
                'phone' => $user->contact_number,
            ],
            'item_details' => [
                [
                    'id' => $barang->id,
                    'price' => $winningBid->nominal_bid,
                    'quantity' => 1,
                    'name' => $barang->nama_barang
                ]
            ]
        ];

        $snapToken = Snap::getSnapToken($payload);
        $transaction->update(['payment_token' => $snapToken]);

        return response()->json(['snap_token' => $snapToken]);
    }

    public function handleNotification(Request $request)
    {
        $json = json_decode($request->getContent(), true);

        // Logika untuk menangani webhook
        $transactionStatus = $json['transaction_status'];
        $orderId = $json['order_id'];

        // Cari transaksi berdasarkan ID order
        $transaction = Transaction::find($orderId);

        if (!$transaction) {
            Log::error("Transaksi tidak ditemukan.");
            return response()->json(['message' => 'Transaksi tidak ditemukan'], 404);
        }

        if ($transactionStatus == 'settlement') {
            // Transaksi berhasil
            $transaction->update(['status' => 'terbayar']);

            // Update status barang lelang
            $barangLelang = BarangLelang::find($transaction->barang_lelang_id);
            if ($barangLelang) {
                $barangLelang->update(['is_paid' => 1]);
            }
        } elseif ($transactionStatus == 'pending') {
            // Menunggu pembayaran
            $transaction->update(['status' => 'pending']);
        } elseif (in_array($transactionStatus, ['deny', 'expire', 'cancel'])) {
            // Pembayaran gagal
            $transaction->update(['status' => 'gagal']);
        }

        return response()->json(['message' => 'Webhook processed']);
    }

    public function downloadInvoice($transactionId)
    {
        $transaction = Transaction::findOrFail($transactionId);

        $pdf = PDF::loadView('invoice', compact('transaction'));
        return $pdf->download('invoice.pdf');
    }
}
