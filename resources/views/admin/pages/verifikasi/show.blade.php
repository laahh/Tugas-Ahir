@extends('admin.app')
@section('content')

<a class="mt-10 flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple"
    href="/verification">
    <div class="flex items-center">
        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
            <path
                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
            </path>
        </svg>
        <span>Detail Data Nasabah</span>
    </div>

    <span>Kembali &RightArrow;</span>
</a>


<form action="" method="POST" enctype="multipart/form-data">

    <div class="grid gap-6 mb-6 md:grid-cols-2">
        <div>
            <label for="nama_barang" class="block mb-2 text-sm font-medium text-gray-900">Nama Nasabah</label>
            <input type="text" id="nama_barang" name="nama_barang"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                placeholder="{{ $user->name }}" disabled>
        </div>

        <div>

            <label for="nama_barang" class="block mb-2 text-sm font-medium text-gray-900">Email Nasabah</label>
            <input type="text" id="nama_barang" name="nama_barang"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                placeholder="{{ $user->email }}" disabled>


        </div>

        <div>
            <label for="kondisi" class="block mb-2 text-sm font-medium text-gray-900">Nomer HP</label>
            <input type="text" id="kondisi" name="kondisi"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                placeholder="{{ $user->contact_number }}" disabled>
        </div>

        <div>

            <div>
                <label for="kondisi" class="block mb-2 text-sm font-medium text-gray-900">Alamat</label>
                <input type="text" id="kondisi" name="kondisi"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="{{ $user->address }}" disabled>
            </div>


        </div>




        <div>
            <label for="kondisi" class="block mb-2 text-sm font-medium text-gray-900">Provinsi</label>
            <input type="text" id="kondisi" name="kondisi"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                placeholder="{{ $user->state }}" disabled>
        </div>

        <div>
            <label for="kondisi" class="block mb-2 text-sm font-medium text-gray-900">Kode Pos</label>
            <input type="text" id="kondisi" name="kondisi"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                placeholder="{{ $user->zip_code }}" disabled>
        </div>


        <div>
            <div>
                <label for="kondisi" class="block mb-2 text-sm font-medium text-gray-900">Kota</label>
                <input type="text" id="kondisi" name="kondisi"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="{{ $user->city }}" disabled>
            </div>
        </div>

        <div>
            <label for="kondisi" class="block mb-2 text-sm font-medium text-gray-900">Negara</label>
            <input type="text" id="kondisi" name="kondisi"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                placeholder="{{ $user->country }}" disabled>
        </div>

    </div>




    <div class="mb-3">
        <label for="kondisi" class="block mb-2 text-sm font-medium text-gray-900">KTP Nasabah</label>
        <img src="{{ asset('storage/' . $user->ktp_image) }}" class="w-56" alt="">
    </div>




</form>


@endsection