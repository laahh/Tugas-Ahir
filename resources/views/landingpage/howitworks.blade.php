<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.0.7/css/boxicons.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.0.7/css/boxicons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet">



</head>

<body>
    @include('landingpage.components.topbar')
    @include('landingpage.components.navbar')
    @include('landingpage.components.head', ['pageTitle' => 'About'])

    <div class="how-work-section pt-120 pb-120">
        <img alt="image" src="{{ asset('assets/images/bg/section-bg.png') }}" class="section-bg-top" />
        <div class="container">
            <!-- Step 01 -->
            <div class="row g-4 mb-60">
                <div class="col-xl-6 col-lg-6">
                    <div class="how-work-content wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".2s">
                        <span>01.</span>
                        <h3>Daftar Sekarang &amp; Mulai Lelang </h3>
                        <p class="para">Untuk memulai, Anda perlu mendaftar di website kami. Proses pendaftaran
                            dirancang untuk cepat dan mudah.Registrasi akun kemudian lengakapi data diri sesuai dengan
                            KTP, setela di ACC oleh admin anda dapat mengikuti lelang</p>
                        <p class="para"> Langkah ini penting untuk memastikan bahwa semua peserta lelang adalah pihak
                            yang terverifikasi, sehingga menjamin keamanan dan kepercayaan dalam setiap transaksi.</p>
                        <a href="/signup" class="eg-btn btn--primary btn--md">Register Akun</a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 d-flex justify-content-lg-end justify-content-center">
                    <div class="how-work-img wow fadeInDown" data-wow-duration="1.5s" data-wow-delay=".2s">
                        <img alt="image" src="{{ asset('assets/images/bg/how-work1.png') }}" class="work-img" />
                    </div>
                </div>
            </div>

            <!-- Step 02 -->
            <div class="row g-4 mb-60">
                <div
                    class="col-xl-6 col-lg-6 d-flex justify-content-lg-start justify-content-center order-lg-1 order-2">
                    <div class="how-work-img wow fadeInDown" data-wow-duration="1.5s" data-wow-delay=".2s">
                        <img alt="image" src="{{ asset('assets/images/bg/how-work2.png') }}" class="work-img" />
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 order-lg-2 order-1">
                    <div class="how-work-content wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".2s">
                        <span>02.</span>
                        <h3>Pilih Barang Anda</h3>
                        <p class="para">Setelah terdaftar, Anda dapat menjelajahi berbagai aset yang tersedia untuk
                            dilelang. Aset-aset ini dijelaskan secara detail, termasuk spesifikasi, kondisi, foto, dan
                            informasi penting lainnya. Anda bisa menggunakan fitur pencarian dan filter yang tersedia
                            untuk menemukan barang yang sesuai dengan kebutuhan dan preferensi Anda</p>
                        <p class="para">Setiap barang yang ditampilkan di platform kami telah melalui proses penilaian
                            yang ketat, memastikan bahwa hanya aset berkualitas yang ditawarkan.</p>
                        <a href="/live-auction" class="eg-btn btn--primary btn--md">Add Your Item</a>
                    </div>
                </div>
            </div>

            <!-- Step 03 -->
            <div class="row g-4">
                <div class="col-xl-6 col-lg-6">
                    <div class="how-work-content wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".2s">
                        <span>03.</span>
                        <h3>Bayar Barang Anda</h3>
                        <p class="para">Jika Anda berhasil menawar dan memenangkan lelang, langkah berikutnya adalah
                            melakukan pembayaran. Kami menyediakan berbagai opsi pembayaran yang aman dan mudah,
                            termasuk transfer bank, pembayaran digital, dan metode lainnya yang dapat diakses dari
                            seluruh Indonesia. </p>
                        <p class="para">Setelah pembayaran diverifikasi, Anda akan segera mendapatkan konfirmasi, dan
                            aset yang Anda menangkan akan dipersiapkan untuk pengambilan atau pengiriman sesuai dengan
                            ketentuan yang ada.</p>
                        <a href="/live-auction" class="eg-btn btn--primary btn--md">Purchase Item</a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 d-flex justify-content-lg-end justify-content-center">
                    <div class="how-work-img wow fadeInDown" data-wow-duration="1.5s" data-wow-delay=".2s">
                        <img alt="image" src="{{ asset('assets/images/bg/how-work3.png') }}" class="work-img" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('landingpage.components.chooseus')
    @include('landingpage.components.CounterUp')
    @include('landingpage.components.footer')



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>