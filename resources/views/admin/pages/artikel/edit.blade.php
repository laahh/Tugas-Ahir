@extends('admin.app')
@section('content')


<a class="mt-10 flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple"
    href="/artikel">
    <div class="flex items-center">
        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
            <path
                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
            </path>
        </svg>
        <span>Tambah Artikel Dan Berita </span>
    </div>
    <span>Kembail &RightArrow;</span>
</a>

<form action="/artikel/{{ $artikel->id }}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="grid gap-6 mb-6 md:grid-cols-2">
        <div>
            <label for="judul" class="block mb-2 text-sm font-medium text-gray-900">Judul
                Artikel</label>
            <input type="text" id="judul" name="judul"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                placeholder="Judul Artikel" value="{{$artikel->judul}}" required>
        </div>
        <div>
            <label for="penulis" class="block mb-2 text-sm font-medium text-gray-900">Penulis</label>
            <input type="text" id="penulis" name="penulis"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                placeholder="Doe" value="{{$artikel->penulis}}" required>
        </div>

        <div class="mb-3">
            <label class="block mb-2 text-sm font-medium text-gray-900" for="gambar">Upload
                file</label>
            <input
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                aria-describedby="gambar" id="gambar" name="gambar" type="file" value="{{$artikel->gambar}}">
            <p class="mt-1 text-sm text-gray-500" id="gambar">SVG, PNG, JPG or GIF (MAX.
                800x400px).</p>


        </div>


        <div>

            <label for="kategori" class="block mb-2 text-sm font-medium text-gray-900">Kategori Berita</label>
            <select id="kategori" name="kategori"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                <option selected>pilih kategori</option>
                <option value="Teknologi dan Inovasi">Teknologi dan Inovasi</option>
                <option value="Regulasi dan Hukum">Regulasi dan Hukum</option>
                <option value="Panduan Lelang">Panduan Lelang</option>
                <option value="Tips dan Saran">Tips dan Saran</option>
            </select>


        </div>


    </div>




    <div class="mb-3">
        <div>
            <label for="isi" class="block mb-2 text-sm font-medium text-gray-900">Isi
                Berita</label>
            <input id="isi" type="hidden" name="isi" value="{{$artikel->isi}}" required>
            <trix-editor input="isi"></trix-editor>

        </div>
    </div>



    <button type="submit"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
</form>



@endsection