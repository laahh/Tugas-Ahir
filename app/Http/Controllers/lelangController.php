<?php

namespace App\Http\Controllers;

use App\Models\bids;
use App\Models\BarangLelang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class lelangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // title
        $title = 'Lelang';
        return view(
            'landingpage.product',
            [
                'title' => $title,
                'barang' => BarangLelang::paginate(4)
            ]


        );
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
        // Eager load bids bersamaan dengan user, diurutkan dari yang terbaru
        $barang = BarangLelang::with(['bids' => function ($query) {
            $query->latest();
        }, 'bids.user'])->findOrFail($id);
        // title
        $title = "Detail barang";


        return view('landingpage.product-detail', compact('barang', 'title'));
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


    // public function postBid(Request $request, $id)
    // {
    //     $request->validate([
    //         'nominal_bid' => 'required',
    //         'statsus' => 'defaulted|in:Pending'

    //     ]);

    //     $barang = BarangLelang::findOrFail($id);

    //     // Memastikan bid lebih tinggi dari harga awal
    //     if ($request->nominal_bid <= $barang->harga_awal) {
    //         return back()->with('error', 'Bid Anda harus lebih tinggi dari harga awal.');
    //     }

    //     // Simpan bid ke database
    //     $bid = new bids();
    //     $bid->barang_id = $id;
    //     $bid->user_id = auth()->id(); // asumsikan user sudah login
    //     $bid->nominal_bid = $request->nominal_bid;
    //     $bid->status = $request->input('status', 'Pending');
    //     $bid->save();
    //     return redirect()->back()->with('success', 'Bid Anda telah berhasil disimpan.');
    // }


    public function postBid(Request $request, $id)
    {
        $request->validate([
            'nominal_bid' => 'required|numeric',

        ]);

        $barang = BarangLelang::findOrFail($id);

        // Cek apakah lelang masih terbuka
        if ($barang->is_open) {
            // Jika lelang terbuka, cek apakah bid lebih tinggi dari bid tertinggi
            $highestBid = $barang->bids()->max('nominal_bid');

            if ($request->nominal_bid <= $highestBid) {
                return back()->with('error', 'Bid Anda harus lebih tinggi dari bid tertinggi saat ini.');
            }
        } else {
            // Jika lelang tertutup, hanya perlu bid lebih tinggi dari harga awal
            if ($request->nominal_bid <= $barang->harga_awal) {
                return back()->with('errorType', 'Bid Anda harus lebih tinggi dari harga awal.');
            }
        }

        // Simpan bid ke database
        $bid = new bids();
        $bid->barang_id = $id;
        $bid->user_id = auth()->id(); // Asumsikan user sudah login
        $bid->nominal_bid = $request->nominal_bid;
        $bid->status = 'Pending'; // Default status
        $bid->save();

        return redirect()->back()->with('success', 'Bid Anda telah berhasil disimpan.');
    }




    public function showPerhiasan()
    {
        $title = 'Lelang';
        $barang = BarangLelang::where('kategori', 'Perhiasan & Emas')->paginate(4);
        return view('landingpage.product', compact('barang', 'title'));
    }


    public function showElektronik()
    {
        $title = 'Lelang';
        $barang = BarangLelang::where('kategori', 'Barang Elektronik')->paginate(4);
        return view('landingpage.product', compact('barang', 'title'));
    }

    public function showPeralatan()
    {
        $title = 'Lelang';
        $barang = BarangLelang::where('kategori', 'Peralatan & Mesin')->paginate(4);
        return view('landingpage.product', compact('barang', 'title'));
    }

    public function showKendaraan()
    {
        $title = 'Lelang';
        $barang = BarangLelang::where('kategori', 'Kendaraan')->paginate(4);
        return view('landingpage.product', compact('barang', 'title'));
    }



    public function showAksesoris()
    {
        $title = 'Lelang';
        $barang = BarangLelang::where('kategori', 'Aksesoris')->paginate(4);
        return view('landingpage.product', compact('barang', 'title'));
    }

    public function showLainlain()
    {
        $title = 'Lelang';
        $barang = BarangLelang::where('kategori', 'Lain lain')->paginate(4);
        return view('landingpage.product', compact('barang', 'title'));
    }
}
