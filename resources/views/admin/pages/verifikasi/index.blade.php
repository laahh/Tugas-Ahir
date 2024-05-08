@extends('admin.app')
@section('content')



<a class="mt-10 flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple"
    href="https://github.com/estevanmaito/windmill-dashboard">
    <div class="flex items-center">
        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
            <path
                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
            </path>
        </svg>
        <span>Verifikasi Data Nasabah</span>
    </div>
    <span>View more &RightArrow;</span>
</a>

<table id="users-table" class="display">
    <thead>
        <tr>
            <th>#</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Status Berkas</th>
            <th>Action</th>
        </tr>
    </thead>
</table>




@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    $(function() {
    $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('admin.verification.index') !!}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'email', name: 'email' },
            { data: 'is_verified', name: 'is_verified', render: function(data, type, row) {
                return data ? 
                    '<button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Sudah Diverifikasi</button>' :
                    '<button class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900" onclick="verifyUser('+row.id+')">Belum Diverifikasi</button>';
            }},
            { data: 'action', name: 'action', orderable: false, searchable: false }
        ]
    });
});


function verifyUser(userId) {
    Swal.fire({
        title: 'Apakah Anda yakin?',
        text: "Anda akan memverifikasi user ini.",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, verifikasi!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: '/verify-user/' + userId,
                type: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}",
                },
                success: function(response) {
                    $('#users-table').DataTable().ajax.reload();
                    Swal.fire(
                        'Terverifikasi!',
                        'User telah berhasil diverifikasi.',
                        'success'
                    );
                },
                error: function(response) {
                    Swal.fire(
                        'Gagal!',
                        'Terjadi kesalahan, user tidak dapat diverifikasi.',
                        'error'
                    );
                }
            });
        }
    });
}



</script>

@endpush








@endsection