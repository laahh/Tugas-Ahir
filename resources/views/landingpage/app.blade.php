<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Windmill Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />

    {{--
    <link rel="stylesheet" href="{{ asset('assets/css/tailwind.output.css') }}" /> --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}">
    </script>

    @vite('resources/css/app.css')

</head>

<body>
    <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
        {{ $dataTable->table() }}
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
    <script>
        console.log($('#baranglelang-table'));
    $('#baranglelang-table').DataTable({
        responsive: true
    });
    </script>

    <script type="text/javascript">
        document.getElementById('pay-button').onclick = function(){
        // Lakukan request ke server untuk mendapatkan snap token
        fetch('/pay/{{ $barang->id }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}' // Pastikan CSRF token diikutsertakan untuk keamanan
            },
        })
        .then(response => response.json())
        .then(data => {
            snap.pay(data.snap_token, {
                // Opsi callback sesuai dengan kebutuhan
                onSuccess: function(result){
                    /* Handle ketika pembayaran berhasil */
                    alert('Pembayaran berhasil!');
                },
                onPending: function(result){
                    /* Handle ketika pembayaran tertunda */
                    alert('Pembayaran tertunda, silakan cek status pembayaran Anda.');
                },
                onError: function(result){
                    /* Handle ketika pembayaran gagal */
                    alert('Pembayaran gagal, silakan coba lagi.');
                },
                onClose: function(){
                    /* Handle ketika pengguna menutup snap modal */
                    alert('Anda menutup jendela pembayaran!');
                }
            });
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Terjadi kesalahan, tidak dapat memproses pembayaran.');
        });
    };
    </script>

</body>

</html>