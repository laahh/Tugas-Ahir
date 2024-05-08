@extends('admin.app')
@section('content')




<a class="mt-10 flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple"
    href="barang-lelang/create">
    <div class="flex items-center">
        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
            <path
                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
            </path>
        </svg>
        <span>Data Barang Lelang</span>
    </div>
    <span>Tambah Data &RightArrow;</span>
</a>




<table id="barangTable" class="display">
    <thead>
        <tr>
            <th>#</th>
            <th>Nama Barang</th>
            <th>Kategori</th>
            <th>Tanggal Lelang</th>
            <th>Harga Awal</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>
    </thead>
</table>






<script>
    $(document).ready(function() {
        $('#barangTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('barang-lelang') }}", // Pastikan route ini sudah terdaftar di web.php
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false }, // Kolom index
                { data: 'nama_barang', name: 'nama_barang' }, // Nama barang
                { data: 'kategori', name: 'kategori' }, // Kategori
                { data: 'tanggal', name: 'tanggal' }, // Deskripsi (sudah dipotong di controller)
                { data: 'harga_awal', name: 'harga_awal' }, // Harga awal
               { data : 'gambar', name : 'gambar', orderable: false, searchable: false }, // Kolom gambar
                { data: 'action', name: 'action', orderable: false, searchable: false } // Kolom aksi
            ]
        });     
    });
</script>

<script>
    function deleteBarang(id){
        console.log(id);
        swal({
            title: "Apakah Anda yakin?",
            text: "Setelah dihapus, Anda tidak akan dapat memulihkan file imajiner ini!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            
            if (willDelete) {
                
                $.ajax({
                    url: '/barang-lelang/' + id,
                    type: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(result) {
                       
                        swal("Sukses! Barang Lelang telah berhasil dihapus!", {
                            icon: "success",
                        });
                        window.location.href = '/barang-lelang';
                    }
                });

                
                
                
            } else {
                swal("Your imaginary file is safe!");
            }
        });
    }
    
                            
</script>





@endsection