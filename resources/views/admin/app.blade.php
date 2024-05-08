<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Windmill Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />


    <link rel="stylesheet" href="{{ asset('assets/css/tailwind.output.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">

    {{--
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css"> --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>


    <link href="{{ asset('assets/simple-datatables/style.css') }} " rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{--

    <link href="{{ asset('assets/css/style2.css') }}" rel="stylesheet"> --}}
    @vite('resources/css/app.css')

</head>

<body>
    <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
        @include('admin.components.aside')
        <div class="flex flex-col flex-1 w-full">
            @include('admin.components.header')
            <main class="h-full overflow-y-auto">
                <div class="container px-6 mx-auto grid">
                    @yield('content')
                </div>
            </main>
        </div>
    </div>

    @stack('scripts')

    <script src="{{ asset('assets/simple-datatables/simple-datatables.js') }}"></script>
    <!-- Pastikan hanya satu instance jQuery yang dimuat dan itu adalah versi terbaru -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.js"></script>
    <script src="{{ asset('assets/js/init-alpine.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
    <script src="{{ asset('assets/js/charts-lines.js') }}"></script>
    <script src="{{ asset('assets/js/charts-pie.js') }}"></script>
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
    <!-- Gunakan DataTables versi terbaru -->
    {{-- <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

</body>

</html>