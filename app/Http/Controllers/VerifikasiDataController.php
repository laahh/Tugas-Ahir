<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class VerifikasiDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = User::select(['id', 'name', 'email', 'address', 'is_verified'])
                ->orderBy('is_verified', 'asc');
            return DataTables::of($data)
                ->addColumn('action', function ($row) {
                    // show
                    $btn = '<a href="verification/' . $row->id . '" class="edit btn btn-primary btn-sm">Detail</a>';
                    return $btn;
                })
                ->addColumn('status', function ($user) {
                    return $user->is_verified ?
                        '<button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Sudah Diverifikasi</button>' :
                        '<button class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900" onclick="verifyUser(' . $user->id . ')">Belum Diverifikasi</button>';
                })
                ->rawColumns(['action', 'status'])
                ->make(true);
        }

        return view('admin.pages.verifikasi.index');
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

    public function verifyUser($id)
    {
        $user = User::findOrFail($id);
        $user->is_verified = true;
        $user->save();

        return response()->json(['message' => 'User verified successfully!']);
    }

    public function ShowUser($id)
    {
        $user = User::findOrFail($id);
        return view('admin.pages.verifikasi.show', compact('user'));
    }
}
