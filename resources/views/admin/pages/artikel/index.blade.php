@extends('admin.app')
@section('content')



<a class="mt-10 flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple"
    href="/artikel/create">
    <div class="flex items-center">
        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
            <path
                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
            </path>
        </svg>
        <span>Artikel Dan Berita </span>
    </div>
    <span>Tambah &RightArrow;</span>
</a>

<div class="w-full overflow-hidden rounded-lg shadow-xs mt-2">
    <div class="w-full overflow-x-auto">
        <table class="w-full whitespace-no-wrap">
            <thead>
                <tr
                    class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                    <th class="px-4 py-3">Judul</th>
                    <th class="px-4 py-3">Tanggal</th>
                    <th class="px-4 py-3">Kategori</th>
                    <th class="px-4 py-3">Action</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">

                @foreach($artikels as $artikel)
                <tr class="text-gray-700 dark:text-gray-400">
                    <td class="px-4 py-3">
                        <div class="flex items-center text-sm">
                            <!-- Avatar with inset shadow -->
                            <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                <img class="object-cover w-full h-full rounded-full"
                                    src="{{ asset('storage/' . $artikel->gambar) }}" alt="" loading="lazy" />
                                <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                            </div>
                            <div>
                                <p class="font-semibold">{{ $artikel->judul }}</p>
                                <p class="text-xs text-gray-600 dark:text-gray-400">
                                    {{ $artikel->kategori }}
                                </p>
                            </div>
                        </div>
                    </td>
                    <td class="px-4 py-3 text-sm">{{
                        Carbon\Carbon::parse($artikel->created_at)->format('M d, Y') }}</td>
                    <td class="px-4 py-3 text-xs">
                        <span
                            class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                            Approved
                        </span>
                    </td>
                    <td class="flex items-center px-6 py-5 ">
                        <a href="/artikel/{{ $artikel->id }}/edit"
                            class="font-medium text-blue-600 hover:text-blue-500 dark:hover:text-gray-300 dark:text-blue-300">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="w-4 h-4 mr-3 bi bi-pencil-square" viewBox="0 0 16 16">
                                <path
                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                <path fill-rule="evenodd"
                                    d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                            </svg>
                        </a>
                        <form action="/artikel/{{ $artikel->id }}" method="POST">
                            @method('delete')
                            @csrf
                            <button type="submit" onclick="return confirm('apakah anda ingin menghapus?')"><span
                                    class="bg-blue-100 text-blue-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                        <path
                                            d="M20 2H4c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h3v3.767L13.277 18H20c1.103 0 2-.897 2-2V4c0-1.103-.897-2-2-2zm0 14h-7.277L9 18.233V16H4V4h16v12z">
                                        </path>
                                        <path
                                            d="M9.707 13.707 12 11.414l2.293 2.293 1.414-1.414L13.414 10l2.293-2.293-1.414-1.414L12 8.586 9.707 6.293 8.293 7.707 10.586 10l-2.293 2.293z">
                                        </path>
                                    </svg>

                                </span></button>
                        </form>
                        <a href="#"
                            class="font-medium text-red-600 hover:text-red-500 dark:hover:text-red-300 dark:text-red-400">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="w-4 h-4 bi bi-trash-fill" viewBox="0 0 16 16">
                                <path
                                    d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                            </svg>
                        </a>
                    </td>
                </tr>
                @endforeach






            </tbody>
        </table>
    </div>


    <div>
        {{ $artikels->links() }}
    </div>

</div>

<script>
    function deleteArtikel(id){
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
                    url: '/artikel/' + id,
                    type: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(result) {
                       
                        swal("Bsehasil! Artikel telah berhasil dihapus!", {
                            icon: "success",
                        });
                        window.location.href = '/artikel';
                    }
                });

                
                
                
            } else {
                swal("Your imaginary file is safe!");
            }
        });
    }
    
    // $('.delete').click(function (){
        
        //     swal({
            //         title: "Are you sure?",
            //         text: "Once deleted, you will not be able to recover this imaginary file!",
            //         icon: "warning",
            //         buttons: true,
            //         dangerMode: true,
            //     })
            //     .then((willDelete) => {
                //         console.log(willDelete);
                //         if (willDelete) {
                    
                    
                    //             document.getElementById('delete').click();
                    
                    //             swal("Poof! Your imaginary file has been deleted!", {
                        //                 icon: "success",
                        //             });
                        //         } else {
                            //             swal("Your imaginary file is safe!");
                            //         }
                            //     });
                            
                            // })
                            
</script>


@endsection