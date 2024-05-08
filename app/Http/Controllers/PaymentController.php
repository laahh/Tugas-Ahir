<?php

namespace App\Http\Controllers;

use Midtrans\Snap;
use Midtrans\Config;
use App\Models\Transaction;
use App\Models\BarangLelang;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function __construct()
    {
        // Konfigurasi Midtrans
        Config::$serverKey = config('midtrans.server_key');
        Config::$clientKey = config('midtrans.client_key');
        Config::$isProduction = config('midtrans.is_production');
        Config::$isSanitized = config('midtrans.is_sanitized');
        Config::$is3ds = config('midtrans.is_3ds');
    }

    public function createTransaction(Request $request, $barangId)
    {
        $barang = BarangLelang::findOrFail($barangId);
        $user = auth()->user();

        // Buat transaksi
        $transaction = new Transaction([
            'user_id' => $user->id,
            'barang_lelang_id' => $barang->id,
            'amount' => $barang->current_price,  // Misal current_price adalah harga terakhir
        ]);

        $payload = [
            'transaction_details' => [
                'order_id'      => $transaction->id,
                'gross_amount'  => $transaction->amount,
            ],
            'customer_details' => [
                'first_name'    => $user->name,
                'email'         => $user->email,
                'phone'         => $user->contact_number,
            ],
            'item_details' => [
                [
                    'id'       => $barang->id,
                    'price'    => $barang->current_price,
                    'quantity' => 1,
                    'name'     => $barang->nama_barang
                ]
            ]
        ];

        $snapToken = Snap::getSnapToken($payload);
        $transaction->payment_url = Snap::createTransaction($payload)->redirect_url;
        $transaction->save();

        return redirect()->to($transaction->payment_url);
    }
}
