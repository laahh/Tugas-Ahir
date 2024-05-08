<?php

namespace App\Http\Controllers;

use App\Models\bids;
use App\Exports\BidsExport;
use App\Models\BarangLelang;
use Illuminate\Http\Request;
use App\Mail\WinningBidNotification;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;

class ManajemenLelangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = BarangLelang::with(['bids.user'])
            ->whereHas('bids')
            ->get();
        return view('admin.pages.riwayat.index', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function downloadBids($barang_id)
    {
        return Excel::download(new BidsExport($barang_id), 'bids.xlsx');
    }

    // public function sendWinningEmail($barangId)
    // {
    //     $winningBid = bids::where('barang_id', $barangId)
    //         ->orderBy('nominal_bid', 'desc')
    //         ->first();

    //     if ($winningBid) {
    //         Mail::to($winningBid->user->email)->send(new WinningBidNotification($winningBid));
    //     }
    // }

    public function sendWinningEmail($id)
    {
        $barang = BarangLelang::findOrFail($id);
        $winningBid = bids::where('barang_id', $id)->orderBy('nominal_bid', 'desc')->first();

        if ($winningBid) {
            Mail::to($winningBid->user->email)->send(new WinningBidNotification($winningBid));
            return back()->with('success', 'Email sent to the winner successfully.');
        }

        return back()->with('error', 'No winning bid found.');
    }
}
