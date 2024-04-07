<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\BarangLelang;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\DataTables\BarangLelangDataTable;




class BarangLelangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index(Request $request)
    // {
    //     if ($request->ajax()) {
    //         $data = BarangLelang::select(['id', 'nama_barang', 'kategori', 'deskripsi', 'harga_awal', 'gambar']);

    //         return DataTables::of($data)
    //             ->addIndexColumn()
    //             ->editColumn('deskripsi', function ($row) {
    //                 // Memotong deskripsi menjadi 100 karakter dan menambahkan '...' jika lebih panjang
    //                 return Str::limit($row->deskripsi, 30, '...');
    //             })
    //             ->addColumn('gambar', function ($row) {
    //                 if ($row->gambar) {
    //                     return '<img src="' . url('path/to/image/' . $row->gambar) . '" width="50" height="50"/>'; // Sesuaikan path
    //                 } else {
    //                     return 'No Image Available';
    //                 }
    //             })
    //             ->addColumn('action', function ($row) {
    //                 $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>'; // Sesuaikan tindakan
    //                 return $btn;
    //             })
    //             ->rawColumns(['action', 'gambar']) // Pastikan kolom 'action' dan 'gambar' bisa render HTML
    //             ->make(true);
    //     }

    //     return view('admin.pages.barang.index'); // Pastikan path view benar
    // }

    public function index(BarangLelangDataTable $dataTable)
    {
        return $dataTable->render('admin.pages.barang.index', ['dataTableClass' => 'responsive w-100']);
    }

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
}
