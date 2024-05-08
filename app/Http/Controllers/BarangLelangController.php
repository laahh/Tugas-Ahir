<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Models\BarangLelang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use App\DataTables\BarangLelangDataTable;




class BarangLelangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = BarangLelang::select(['id', 'nama_barang', 'kategori', 'deskripsi', 'harga_awal', 'gambar', 'start_date', 'end_date']);

            return DataTables::of($data)
                ->addIndexColumn()
                ->editColumn('deskripsi', function ($row) {
                    $plain_text = strip_tags($row->deskripsi);
                    return Str::limit($plain_text, 30, '...');
                })
                ->addIndexColumn()
                ->editColumn('tanggal', function ($row) {
                    // Format tanggal start_date dan end_date. Pastikan 'start_date' dan 'end_date' adalah nama kolom yang sesuai di database Anda.
                    $startDate = Carbon::parse($row->start_date)->format('d M Y');
                    $endDate = Carbon::parse($row->end_date)->format('d M Y');

                    // Menggabungkan start_date dan end_date
                    return $startDate . ' - ' . $endDate;
                })
                ->addColumn('gambar', function ($row) {
                    if ($row->gambar) {
                        return '<img src="' . url('storage/' . $row->gambar) . '" width="50" height="50"/>'; // Pastikan path ke storage sesuai
                    } else {
                        return 'No Image Available';
                    }
                })
                ->addColumn('action', function ($row) {
                    $btn = '<a href="' . route('barang-lelang.edit', $row->id) . '" class="edit btn btn-success btn-sm">Edit</a> '; // Tombol edit
                    $btn .= '<button type="submit" class="btn btn-danger btn-sm" onclick="deleteBarang(' . $row->id . ')">Delete</button>'; // Tombol delete
                    return $btn;
                })

                ->rawColumns(['action', 'gambar']) // Pastikan kolom 'action' dan 'gambar' bisa render HTML
                ->make(true);
        }

        return view('admin.pages.barang.index'); // Pastikan path view benar
    }

    // public function index(BarangLelangDataTable $dataTable)
    // {
    //     return $dataTable->render('admin.pages.barang.index');
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.barang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama_barang' => 'required',
            'kategori' => 'required',
            'deskripsi' => 'required',
            'harga_awal' => 'required',
            'gambar' => 'image|file',
            'start_date' => 'required',
            'end_date' => 'required',
            'is_open' => 'required',
            'kondisi' => 'required'


        ]);



        if ($request->file('gambar')) {
            $validateData['gambar'] = $request->file('gambar')->store('post-images', 'public');
        }


        BarangLelang::create($validateData);
        return redirect('/barang-lelang')->with('success', 'Barang Berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.pages.barang.edit', [
            'barang' => BarangLelang::find($id)
        ]);
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
        $validateData = $request->validate([
            'nama_barang' => 'required',
            'kategori' => 'required',
            'deskripsi' => 'required',
            'harga_awal' => 'required',
            'gambar' => 'image|file',
            'start_date' => 'required',
            'end_date' => 'required',
            'is_open' => 'required',
            'kondisi' => 'required'
        ]);
        if ($request->file('gambar')) {
            if ($request->oldImage) {
                Storage::delete([$request->oldImage]);
            }


            $validateData['gambar'] = $request->file('gambar')->store('post-images');
        }

        baranglelang::where('id', $id)->update($validateData);
        return redirect('/barang-lelang')->with('success', 'Barang Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Baranglelang::where('id', $id)->delete();
        return response()->json(['success' => 'barang berhasil dihapus!']);
    }

    public function showByCategory($kategori)
    {
        $barang = BarangLelang::where('kategori', $kategori)->get();
        return view('landingpage.product', compact('barang'));
    }
}
