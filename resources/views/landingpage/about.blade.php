<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lelang Pegadaian</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.0.7/css/boxicons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet">


</head>

<body>

    @include('landingpage.components.topbar')
    @include('landingpage.components.navbar')
    @include('landingpage.components.head')

    <div class="about-section pt-120 pb-120">
        <img src="{{ asset('assets/images/bg/section-bg.png') }}" class="img-fluid section-bg-top" alt="section-bg" />
        <div class="container">
            <div class="row d-flex justify-content-center g-4">
                <div class="col-lg-6 col-md-10">
                    <div class="about-img-area">
                        <div class="total-tag">
                            <img src="{{ asset('assets/images/bg/total-tag.png') }}" alt="" />
                            <h6>Total Raised</h6>
                            <h5>$45,390.00</h5>
                        </div>
                        <img src="{{ asset('assets/images/bg/about-img.png') }}"
                            class="img-fluid about-img wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".2s"
                            alt="about-img" />
                        <img src="{{ asset('assets/images/bg/about-linear.png') }}" class="img-fluid about-linear"
                            alt="" />
                        <img src="{{ asset('assets/images/bg/about-vector.png') }}" class="img-fluid about-vector"
                            alt="" />
                    </div>
                </div>
                <div class="col-lg-6 col-md-10">
                    <div class="about-content wow fadeInDown" data-wow-duration="1.5s" data-wow-delay=".2s">
                        <span>Who we are!</span>
                        <h2>Platform resmi lelang online Pegadaian Cabang Purwokerto</h2>
                        <p class="para">Situs lelang memberikan pengalaman yang mendebarkan dan kompetitif bagi konsumen
                            untuk membeli barang dan jasa yang paling mereka butuhkan..</p>
                        <p class="para">Kami berkomitmen untuk menyediakan solusi yang aman dan terpercaya bagi Anda
                            untuk berpartisipasi dalam lelang aset berkualitas tinggi.</p>
                        <ul class="about-list">
                            <li><a class="text-decoration-none" href="#">Kemudahan Akses</a></li>
                            <li><a class="text-decoration-none" href="#">Transparansi.</a></li>
                            <li><a class="text-decoration-none" href="#">Keamanan</a></li>
                            <li><a class="text-decoration-none" href="#">Dukungan Pelanggan</a></li>
                        </ul>
                        <a href="#choose-us" class="eg-btn btn--primary btn--md">More About</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('landingpage.components.chooseUs')
    @include('landingpage.components.clientReview')
    @include('landingpage.components.CounterUp')
    @include('landingpage.components.footer')


    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <script src="{{ asset('assets/js/bootstrap-bundle.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
        document.querySelector('.menu-close-btn').addEventListener('click', function() {
            document.querySelector('.main-menu').classList.toggle('show-menu');
        });
        document.querySelector('.search-btn').addEventListener('click', function() {
            document.querySelector('.mobile-search').classList.toggle('slide');
        });
    });
    </script>


    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper('.mySwiper', {
            slidesPerView: 3,
            spaceBetween: 30,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            freeMode: true,
        });
    </script>

    <script>
        window.addEventListener('scroll', function() {
            const header = document.querySelector('.header-area');
            if (window.scrollY > 50) {
                header.classList.add('bg-white', 'navbar-light');
                header.classList.remove('bg-transparent', 'navbar-dark');
            } else {
                header.classList.add('bg-transparent', 'navbar-dark');
                header.classList.remove('bg-white', 'navbar-light');
            }
        });
    </script>
</body>

</html>