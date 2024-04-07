<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.0.7/css/boxicons.min.css" rel="stylesheet">


    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet">


    {{--
    <link rel="stylesheet" href="{{ asset('assets/css/all.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" /> --}}

    {{--
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-icon.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-min.css') }}" /> --}}
    {{--
    <link rel="stylesheet" href="{{ asset('assets/css/boxicons.min.css') }}" /> --}}
    {{--
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.countdown.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/odometer.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/slick-theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.scss') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.scss') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.scss') }}" /> --}}



</head>


<body>

    <style>
        #mainNavbar {
            transition: background-color 0.3s;
        }

        #mainNavbar.transparent {
            background-color: transparent;
        }

        #mainNavbar.scrolled {
            background-color: white;
            box-shadow: 0 2px 5px rgba(0, 0, 0, .1);
        }
    </style>

    @include('landingpage.components.topbar')
    @include('landingpage.components.navbar')
    @include('landingpage.components.head', ['pageTitle' => 'About'])

    <div class="signup-section pt-120 pb-120">
        <img alt="image" src="{{ asset('assets/images/bg/section-bg.png') }}" class="section-bg-top" />
        <img alt="image" src="{{ asset('assets/images/bg/section-bg.png') }}" class="section-bg-bottom" />
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="form-wrapper wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".2s">
                        <div class="form-title">
                            <h3>Sign Up</h3>
                            <p>
                                Do you already have an account?
                                <a href="/login">Log in here</a>
                            </p>
                        </div>
                        <form class="w-100" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-inner">
                                        <label for="name">Name *</label>
                                        <input type="text" name="name" id="name" placeholder="Name" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-inner">
                                        <label for="email">Enter Your Email *</label>
                                        <input type="email" name="email" id="email" placeholder="Enter Your Email" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-inner">
                                        <label for="password">Password *</label>
                                        <input type="password" name="password" id="password"
                                            placeholder="Create A Password" />
                                        <i id="togglePassword" onclick="handleEyeIcon()"></i>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-inner">
                                        <label for="password_confirmation">Password Confirmation *</label>
                                        <input type="password" name="password_confirmation" id="password_confirmation"
                                            placeholder="Create A Password" />
                                        <i id="togglePassword" onclick="handleEyeIcon()"></i>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-agreement form-inner d-flex justify-content-between flex-wrap">
                                        <div class="form-group">
                                            <input type="checkbox" id="agree" />
                                            <label for="agree">
                                                I agree to the Terms &amp; Policy
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="account-btn">Create Account</button>
                        </form>
                        <div class="alternate-signup-box">
                            <h6>or sign up WITH</h6>
                            <div class="btn-group gap-4">
                                <a href="#" class="eg-btn google-btn d-flex align-items-center">
                                    <i class="bx bxl-google"></i>
                                    <span>Sign up with Google</span>
                                </a>
                                <a href="#" class="eg-btn facebook-btn d-flex align-items-center">
                                    <i class="bx bxl-facebook"></i>
                                    Sign up with Facebook
                                </a>
                            </div>
                        </div>
                        <div class="form-policy-area">
                            <p>
                                By clicking the "sign up" button, you create an account, and you agree to the
                                <a href="#">Terms &amp; Conditions</a> &amp;
                                <a href="#">Privacy Policy.</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




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