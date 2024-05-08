@extends('admin.app')
@section('content')


<a class="mt-10 flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple"
    href="/barang-lelang">
    <div class="flex items-center">
        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
            <path
                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
            </path>
        </svg>
        <span>Edit Barang Lelang</span>
    </div>
    <span>Kembail &RightArrow;</span>
</a>

<form action="/barang-lelang/{{ $barang->id }}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf

    <div class="grid gap-6 mb-6 md:grid-cols-2">
        <div>
            <label for="nama_barang" class="block mb-2 text-sm font-medium text-gray-900">Nama Barang</label>
            <input type="text" id="nama_barang" name="nama_barang"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                value="{{ $barang->nama_barang }}">
        </div>

        <div>

            <label for="kategori" class="block mb-2 text-sm font-medium text-gray-900">Kategori Barang</label>
            <select id="kategori" name="kategori"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                <option>{{ $barang->kategori }}</option>
                <option value="Perhiasan & Emas">Perhiasan & Emas</option>
                <option value="Barang Elektronik">Barang Elektronik</option>
                <option value="Peralatan & Mesin">Peralatan & Mesin</option>
                <option value="Kendaraan">Kendaraan</option>
                <option value="Aksesoris">Aksesoris</option>
                <option value="Lain Lain">Lain Lain</option>
            </select>
        </div>


        <div>
            <label for="kondisi" class="block mb-2 text-sm font-medium text-gray-900">Kondisi Barang</label>
            <input type="text" id="kondisi" name="kondisi"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                placeholder="Kondisi Barang" value="{{ $barang->kondisi }}">
        </div>

        <div>

            <label for="is_open" class="block mb-2 text-sm font-medium text-gray-900">Jenis Lelang</label>
            <select id="is_open" name="is_open"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                <option>{{ $barang->is_open }}</option>
                <option value="1">Lelang Terbuka</option>
                <option value="0">Lelang Tertutup</option>

            </select>


        </div>




        <div>
            <label for="start_date" class="block mb-2 text-sm font-medium text-gray-900">Tanggal Mulai Lelang</label>
            <input type="date" id="start_date" name="start_date"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                placeholder="Tanggal Mulai Lelang" value="{{ $barang->start_date }}">
        </div>

        <div class="mb-3">
            <label class="block mb-2 text-sm font-medium text-gray-900" for="end_date">Tanggal Berahir Lelang </label>
            <input type="date" id="end_date" name="end_date"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                placeholder="Tanggal Berahir Lelang" value="{{ $barang->end_date }}">



        </div>


        <div class="mb-3">
            <label for="harga_awal" class="block mb-2 text-sm font-medium text-gray-900">Harga Awal</label>
            <input type="text" id="harga_awal" name="harga_awal"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                value="{{ $barang->harga_awal }}">
        </div>
        <div class="mb-3">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="image">Upload
                Image</label>
            <input type="hidden" name="oldImage" value="{{ $barang->gambar }}">
            @if($barang->gambar)
            <img src="{{asset('storage/'.$barang->gambar)}}" class="w-20 rounded-md img-preview" alt="image">
            @else
            <img class="w-80 rounded-md img-preview">

            @endif
            <input
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                id="gambar" type="file" name="gambar" onchange="previewImage()">

        </div>
    </div>
    <div class="mb-3">
        <div>
            <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-900">Deskripsi</label>
            <input id="deskripsi" type="hidden" name="deskripsi" value="{{ $barang->deskripsi }}">
            <trix-editor input="deskripsi"></trix-editor>

        </div>
    </div>
    <button type="submit"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
</form>

<script>
    function previewImage() {
    const image = document.querySelector('#gambar');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent) {
        imgPreview.src = oFREvent.target.result;
    };
}
</script>


@endsection