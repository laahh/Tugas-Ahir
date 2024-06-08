@extends('admin.app')
@section('content')

<h2 class="mt-5 mb-5 text-2xl font-semibold text-gray-700 dark:text-gray-200">
    Manajemen Lelang
</h2>

<a class=" flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple"
    href="https://github.com/estevanmaito/windmill-dashboard">
    <div class="flex items-center">
        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
            <path
                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
            </path>
        </svg>
        <span>Manajemen Lelang</span>
    </div>
    <span>View more &RightArrow;</span>
</a>



<div class="w-full overflow-hidden rounded-lg shadow-xs mt-1">
    <div class="">
        <div class="mx-auto w-full">
            <div class="overflow-x-auto">
                <div class="flex text-gray-700 justify-between rounded-lg p-4 bg-white w-full items-center ">
                    <div class="flex items-center">
                        <div class="flex font-medium text-sm rounded-full">
                            <p>Results 1 - 3 of 3</p>
                        </div>
                    </div>
                    <div>
                        <form action="">
                            <div class="relative">
                                <select
                                    class="block appearance-none w-full text-sm bg-gray-100 text-gray-700 py-3 px-4 pr-8 rounded-lg leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                    <option selected>5</option>
                                    <option>10</option>
                                    <option>20</option>
                                    <option>50</option>
                                </select>
                                <div
                                    class="pointer-events-none absolute inset-y-0 text-sm right-0 flex items-center px-2 text-gray-700">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24">
                                        <path d="M12 16L6 10H18L12 16Z"></path>
                                    </svg>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <table class="w-full table-auto">
                    <thead>
                        <tr class="text-sm font-normal text-gray-600 border-t border-b text-left bg-gray-50">
                            <th class="px-4 py-3">Nama Barang</th>
                            <th class="px-4 py-3">Harga Awal</th>
                            <th class="px-4 py-3">Tanggal Lelang</th>
                            <th class="px-4 py-3">Status</th>
                            <th class="px-4 py-3"></th>
                            <th class="px-4 py-3"></th>
                        </tr>
                    </thead>
                    <tbody class="text-sm font-normal text-gray-700">

                        @foreach($barang as $data)


                        <tr class="py-10 cursor-pointer border-b border-gray-200 hover:bg-gray-100"
                            onclick="toggleDescription('{{ $data->id }}')">
                            <td class="flex flex-row items-center p-4">
                                <div class="flex w-10 h-10 mr-4">
                                    <a href="#" class="relative block">
                                        <img alt="profil" src="{{ asset('storage/' . $data->gambar) }}"
                                            class="object-cover w-10 h-10 mx-auto rounded-md" />
                                    </a>
                                </div>
                                <div class="flex-1 pl-1">
                                    <div class="font-medium dark:text-white">{{ $data->nama_barang }}</div>
                                    <div class="text-sm text-blue-600 dark:text-gray-200">
                                        PGD00{{ $data->id }}
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-4">
                                {{ number_format($data->harga_awal) }}
                            </td>
                            <td class="px-4 py-4">
                                @if($data->start_date)
                                {{ \Carbon\Carbon::parse($data->start_date)->format('d M Y') }}
                                @else
                                Tanggal mulai tidak tersedia
                                @endif -
                                @if($data->end_date)
                                {{ \Carbon\Carbon::parse($data->end_date)->format('d M Y') }}
                                @else
                                Tanggal selesai tidak tersedia
                                @endif
                            </td>
                            <td class="px-4 py-4">
                                @if(now()->lt($data->end_date))
                                <span class="text-green-500">Proses Lelang</span>
                                @else
                                <span class="text-red-500">Lelang Telah Berakhir</span>
                                @endif
                            </td>
                            <td>
                                @if($data->end_date < now() && $data->is_open === 0)
                                    <a href="{{ route('exports.bids', $data->id) }}">
                                        <button type="button" data-tooltip-target="tooltip-download"
                                            data-tooltip-placement="left"
                                            class="flex justify-center items-center w-[42px] h-[42px] text-gray-500 ">
                                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M14.707 7.793a1 1 0 0 0-1.414 0L11 10.086V1.5a1 1 0 0 0-2 0v8.586L6.707 7.793a1 1 0 1 0-1.414 1.414l4 4a1 1 0 0 0 1.416 0l4-4a1 1 0 0 0-.002-1.414Z" />
                                                <path
                                                    d="M18 12h-2.55l-2.975 2.975a3.5 3.5 0 0 1-4.95 0L4.55 12H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2Zm-3 5a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z" />
                                            </svg>

                                        </button>
                                    </a>
                                    @endif
                            </td>
                            <td>
                                {{-- <form action="{{ route('lelang.sendEmail', $data->id) }}" method="POST">
                                    @csrf
                                    <button type="submit"
                                        class="text-white bg-gray-100 border rounded-lg px-4 py-4 text-center inline-flex items-center">
                                        Kirim Email ke Pemenang
                                    </button>
                                </form> --}}
                            </td>
                            <td class="p-4">
                                <div id="{{ $data->id }}Toggle"
                                    class="text-white bg-gray-100 border rounded-lg px-4 py-4 text-center inline-flex items-center">
                                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M11.9997 13.1714L16.9495 8.22168L18.3637 9.63589L11.9997 15.9999L5.63574 9.63589L7.04996 8.22168L11.9997 13.1714Z">
                                        </path>
                                    </svg>
                                </div>
                            </td>
                        </tr>
                        <tr id="{{ $data->id }}Description" class="hidden py-4 px-4 border-t border-gray-200">
                            <td colspan="4" class="">

                                @if($data->is_open)
                                <div class="relative overflow-x-auto shadow-md sm:rounded-lg px-10 mt-7">
                                    <table
                                        class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        <thead
                                            class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                            <tr>
                                                <th scope="col" class="px-6 py-3">
                                                    Nama Pengguna
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    History Bid
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Status
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Tanggal
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Action
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($data->bids as $bid)
                                            <tr
                                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                                <th scope="row"
                                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    {{ $bid->user->name }}
                                                </th>
                                                <td class="px-6 py-4">
                                                    {{ number_format($bid->nominal_bid) }}
                                                </td>
                                                <td class="px-6 py-4">
                                                    {{ $bid->status }}
                                                </td>
                                                <td class="px-6 py-4">
                                                    {{ $bid->created_at }}
                                                </td>
                                                <td class="px-6 py-4">
                                                    <a href="#"
                                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                            {{-- <tr
                                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                                <th scope="row"
                                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    Microsoft Surface Pro
                                                </th>
                                                <td class="px-6 py-4">
                                                    White
                                                </td>
                                                <td class="px-6 py-4">
                                                    Laptop PC
                                                </td>
                                                <td class="px-6 py-4">
                                                    $1999
                                                </td>
                                                <td class="px-6 py-4">
                                                    <a href="#"
                                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                                </td>
                                            </tr>
                                            <tr
                                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                                <th scope="row"
                                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    Magic Mouse 2
                                                </th>
                                                <td class="px-6 py-4">
                                                    Black
                                                </td>
                                                <td class="px-6 py-4">
                                                    Accessories
                                                </td>
                                                <td class="px-6 py-4">
                                                    $99
                                                </td>
                                                <td class="px-6 py-4">
                                                    <a href="#"
                                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                                </td>
                                            </tr>
                                            <tr
                                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                                <th scope="row"
                                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    Google Pixel Phone
                                                </th>
                                                <td class="px-6 py-4">
                                                    Gray
                                                </td>
                                                <td class="px-6 py-4">
                                                    Phone
                                                </td>
                                                <td class="px-6 py-4">
                                                    $799
                                                </td>
                                                <td class="px-6 py-4">
                                                    <a href="#"
                                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"
                                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    Apple Watch 5
                                                </th>
                                                <td class="px-6 py-4">
                                                    Red
                                                </td>
                                                <td class="px-6 py-4">
                                                    Wearables
                                                </td>
                                                <td class="px-6 py-4">
                                                    $999
                                                </td>
                                                <td class="px-6 py-4">
                                                    <a href="#"
                                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                                </td>
                                            </tr> --}}
                                        </tbody>
                                    </table>
                                </div>
                                @else
                                <p class="text-center text-md mt-5 mb-10">History lelang tidak tersedia untuk lelang ini
                                    karena
                                    ini adalah lelang tertutup.
                                </p>
                                @endif

                            </td>
                        </tr>
                        </tr>
                        @endforeach



                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
    $('.toggle-ban').change(function() {
        var userId = $(this).data('user-id');
        var isBanned = $(this).is(':checked') ? 1 : 0;

        $.post('{{ route("admin.toggleBan") }}', {
            user_id: userId,
            is_banned: isBanned,
            _token: '{{ csrf_token() }}'
        }, function(data) {
            if (data.success) {
                Swal.fire({
            title: 'Success!',
            text: 'User status updated.',
            icon: 'success',
            confirmButtonText: 'Ok'
        });
            }
        });
    });
});
</script>

<script>
    let activeDescriptionId = null;

  function toggleDescription(userId) {
    const descriptionRow = document.getElementById(`${userId}Description`);
    const toggleIcon = document.getElementById(`${userId}Toggle`).querySelector('svg');

    if (activeDescriptionId !== null && activeDescriptionId !== userId) {
      const activeDescriptionRow = document.getElementById(`${activeDescriptionId}Description`);
      const activeToggleIcon = document.getElementById(`${activeDescriptionId}Toggle`).querySelector('svg');
      activeDescriptionRow.classList.add('hidden');
      activeToggleIcon.classList.remove('flipped-icon');
    }

    descriptionRow.classList.toggle('hidden');
    toggleIcon.classList.toggle('flipped-icon');

    if (!descriptionRow.classList.contains('hidden')) {
      activeDescriptionId = userId;
    } else {
      activeDescriptionId = null;
    }
  }
</script>




@endsection