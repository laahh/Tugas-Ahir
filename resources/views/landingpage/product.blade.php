<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Lelang</title>
    {{--
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />


    <link rel="stylesheet" href="{{ asset('assets/css/main2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/vendor2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/product2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/product.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/color.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />
    {{--
    <link rel="stylesheet" href="{{ asset('assets/css/test.css') }}" /> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.0.7/css/boxicons.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.0.7/css/boxicons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet">

</head>

<style>


</style>



<body class="text-decoration-none">
    @include('landingpage.components.topbar')
    @include('landingpage.components.navbar')
    @include('landingpage.components.head', ['pageTitle' => 'About'])


    <div class="wrapper">
        <div class="main-content-wrapper">
            <div class="shop-page-wrapper ptb--80">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 col-lg-8 order-lg-2 mb-md--50">
                            <div class="shop-toolbar mb--50">
                                <div class="row align-items-center">
                                    <div class="col-md-5 mb-sm--30 mb-xs--10">
                                        <div class="">
                                            <div class="">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="shop-products d-flex justify-content-center">
                                <div class="row justify-content-center">
                                    <!-- featureCol -->
                                    @if($barang->isNotEmpty())
                                    @foreach ($barang as $item)

                                    <div class="col-12 col-sm-6 col-lg-6 featureCol mb-7 ">
                                        <div class="eg-card auction-card3 wow fadeInDown " data-wow-duration="1.5s"
                                            data-wow-delay="0.2s">
                                            <div class="auction-timer">
                                                <span class="timer-title">Lelang Berahir pada {{
                                                    \Carbon\Carbon::parse($item->end_date)->format('d M Y') }}</span>
                                                <div id="countdown{{ $item->id }}"></div>
                                                <div class="countdown" id="timer1">
                                                    <h4>
                                                        <Counter formate="counter3" />
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="auction-img">
                                                <img alt="image" src="{{ asset('storage/' . $item->gambar) }}" />
                                                <div class="author-area">
                                                    <div class="author-emo">
                                                        <img alt="image"
                                                            src="{{ asset('assets/images/bg/auction-authr1.png') }}" />
                                                    </div>
                                                    <div class="author-name">
                                                        <span>by admin</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="auction-content">
                                                <h4><a class="text-black text-decoration-none"
                                                        href="/auction-details">{{ $item->nama_barang }}</a></h4>
                                                <p>Bidding Price : <span>Rp.{{ number_format($item->harga_awal)
                                                        }}</span></p>
                                                <div class="auction-card-bttm">
                                                    <a href="lelang/{{ $item->id }}"
                                                        class="eg-btn btn--primary3 btn--sm">Place
                                                        a
                                                        Bid</a>
                                                    <div class="share-area">
                                                        <ul class="social-icons d-flex">
                                                            <li><a href="https://www.facebook.com/"><i
                                                                        class="bx bxl-facebook"></i></a></li>
                                                            <li><a href="https://www.twitter.com/"><i
                                                                        class="bx bxl-twitter"></i></a></li>
                                                            <li><a href="https://www.pinterest.com/"><i
                                                                        class="bx bxl-pinterest"></i></a>
                                                            </li>
                                                            <li><a href="https://www.instagram.com/"><i
                                                                        class="bx bxl-instagram"></i></a>
                                                            </li>
                                                        </ul>
                                                        <a href="#" class="share-btn"><i
                                                                class="bx bxs-share-alt"></i></a>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>

                                    </div>




                                    @endforeach
                                    @else
                                    <p class="mb-5 text-center display-4">Tidak ada barang dalam kategori ini.</p>

                                    @endif




                                </div>
                            </div>

                            <div class="row mt-5">
                                <nav class="pagination-wrap">
                                    <ul class="pagination d-flex justify-content-center gap-md-3 gap-2">
                                        {{-- Check if previous page is available --}}
                                        @if ($barang->onFirstPage())
                                        <li class="page-item disabled">
                                            <span class="page-link" tabIndex="-1">Prev</span>
                                        </li>
                                        @else
                                        <li class="page-item">
                                            <a class="page-link" href="{{ $barang->previousPageUrl() }}"
                                                tabIndex="-1">Prev</a>
                                        </li>
                                        @endif

                                        {{-- Pagination Elements Here --}}
                                        @foreach ($barang->links()->elements[0] as $page => $url)
                                        @if ($page == $barang->currentPage())
                                        <li class="page-item active" aria-current="page">
                                            <a class="page-link" href="#">{{ $page }}</a>
                                        </li>
                                        @else
                                        <li class="page-item">
                                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                        </li>
                                        @endif
                                        @endforeach

                                        {{-- Check if next page is available --}}
                                        @if ($barang->hasMorePages())
                                        <li class="page-item">
                                            <a class="page-link" href="{{ $barang->nextPageUrl() }}">Next</a>
                                        </li>
                                        @else
                                        <li class="page-item disabled">
                                            <a class="page-link">Next</a>
                                        </li>
                                        @endif
                                    </ul>
                                </nav>
                            </div>

                        </div>
                        <div class="col-xl-3 col-lg-4 order-lg-1">
                            <aside class="shop-sidebar mt-5">
                                <div class="shop-widget mb--40 mb-5">
                                    <h3 class="widget-title mb--25 category">Category</h3>
                                    <ul class="widget-list category-list">
                                        <li class="text-decoration-none">
                                            <a href="{{ route('lelang.perhiasan') }}" class="text-decoration-none">
                                                <span class="category-title">Perhiasan & Emas</span>
                                                <i class="fa fa-angle-double-right"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('lelang.elektronik') }}" class="text-decoration-none">
                                                <span class="category-title">Barang Elektronik</span>
                                                <i class="fa fa-angle-double-right"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('lelang.peralatan') }}" class="text-decoration-none">
                                                <span class="category-title">Peralatan & Mesin</span>
                                                <i class="fa fa-angle-double-right"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('lelang.kendaraan') }}" class="text-decoration-none">
                                                <span class="category-title">Kendaraan</span>
                                                <i class="fa fa-angle-double-right"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('lelang.perhiasan') }}" class="text-decoration-none">
                                                <span class="category-title">Barang Antik</span>
                                                <i class="fa fa-angle-double-right"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('lelang.aksesoris') }}" class="text-decoration-none">
                                                <span class="category-title">Accessories</span>
                                                <i class="fa fa-angle-double-right"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('lelang.lainlain') }}" class="text-decoration-none">
                                                <span class="category-title">Lain Lain</span>
                                                <i class="fa fa-angle-double-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="global-overlay"></div>

        <a class="scroll-to-top" href=""><i class="fa fa-angle-double-up"></i></a>

    </div>



    @include('landingpage.components.footer')
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/vendor.js') }}"></script>





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

    <script>
        document.addEventListener('DOMContentLoaded', function () {
    const counterElement = document.getElementById('counter');
    let interval;
    const formate = "counter1"; // Change to "counter2" or "counter3" as needed

    const startTimer = () => {
        const countdownDate = new Date("Jul 30, 2024 00:00:00").getTime();

        interval = setInterval(() => {
            const now = new Date().getTime();
            const distance = countdownDate - now;
            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            if (distance < 0) {
                clearInterval(interval);
                counterElement.innerHTML = "Countdown has ended";
            } else {
                updateCounter(days, hours, minutes, seconds);
            }
        }, 1000);
    };

    const updateCounter = (days, hours, minutes, seconds) => {
        switch (formate) {
            case "counter1":
                counterElement.innerHTML = `<span id="hours1">${hours}</span>H :&nbsp;
                                            <span id="minutes1">${minutes}</span>M :&nbsp;
                                            <span id="seconds1">${seconds}</span>S`;
                break;
            case "counter2":
                counterElement.innerHTML = `<div class="countdown-single">
                                                <h5 id="days9">${days}</h5>
                                                <span>Days</span>
                                            </div>
                                            <div class="countdown-single">
                                                <h5 id="hours9">${hours}</h5>
                                                <span>Hours</span>
                                            </div>
                                            <div class="countdown-single">
                                                <h5 id="minutes9">${minutes}</h5>
                                                <span>Mins</span>
                                            </div>
                                            <div class="countdown-single">
                                                <h5 id="seconds9">${seconds}</h5>
                                                <span>Secs</span>
                                            </div>`;
                break;
            case "counter3":
                counterElement.innerHTML = `<span id="days1">${days}</span>D :&nbsp;
                                            <span id="hours1">${hours}</span>H :&nbsp;
                                            <span id="minutes1">${minutes}</span>M :&nbsp;
                                            <span id="seconds1">${seconds}</span>S`;
                break;
            default:
                counterElement.innerHTML = "Invalid format";
        }
    };

    startTimer();
});

    </script>










</body>

</html>