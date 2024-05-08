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



    <div class="blog-details-section pt-120 pb-120">
        <img alt="image" src="{{ asset('assets/images/bg/section-bg.png') }}" class="img-fluid section-bg-top" />
        <img alt="image" src="{{ asset('assets/images/bg/section-bg.png') }}" class="img-fluid section-bg-bottom" />
        <div class="container">
            <div class="row gy-5">
                <div class="col-lg-8">
                    <div class="blog-details-single">
                        <div class="blog-img"><img alt="images" src="{{ asset('assets/images/blog/blog-details.png ')}}"
                                class="img-fluid wow fadeInDown" data-wow-duration="1.5s" data-wow-delay=".2s"></div>
                        <ul class="blog-meta gap-2">
                            <li><a class="text-decoration-none" href="/blog-Details"><img alt="images"
                                        src="{{ asset('assets/images/icons/calendar.svg') }}">Date:
                                    {{
                                    Carbon\Carbon::parse($blogs->created_at)->format('M d, Y') }}</a></li>
                            <li><a class="text-decoration-none" href="/blog-Details"><img alt="images"
                                        src="{{ asset('assets/images/icons/tags.svg') }}">Auction</a>
                            </li>
                            <li><a class="text-decoration-none" href="/blog-Details"><img alt="images"
                                        src="{{ asset('assets/images/icons/admin.svg') }}">Posted by
                                    Admin</a></li>
                        </ul>
                        <h3 class="blog-title">{{ $blogs->judul }}</h3>

                        <div class="blog-content">
                            <p class="para">
                                {!!html_entity_decode($blogs->isi)!!}
                            </p>
                            <blockquote>
                                <img alt="image" src="{{ asset('assets/images/icons/quote-fill-green.svg') }}"
                                    class="quote-icon" />
                                <p class="para">
                                    “If the delivery provider maintains all the standards then
                                    it is safe to have get products delivered to you. It is
                                    hard to maintain but still safer to get your products
                                    ordered If you’ve been following the crypto space”
                                </p>
                                <h5>-- Leslie Alexander</h5>
                            </blockquote>
                            <h4 class="sub-title">
                                How can have anything you ant in life if you ?
                            </h4>
                            <p class="para">
                                If you’ve been following the crypto space, you’ve likely
                                heard of Non-Fungible Tokens (Biddings), more popularly
                                referred to as ‘Crypto Collectibles.’ The world of Biddings
                                is growing rapidly. It seems there is no slowing down of
                                these assets as they continue to go up in price. This growth
                                comes with the opportunity for people to start new
                                businesses to create and capture value. The market is open
                                for players in every kind of field. Are you a collector.
                            </p>
                            <div class="blog-video-area">
                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <img alt="image" src="{{ asset('assets/images/blog/blogd1.png') }}"
                                            class="img-fluid" />
                                    </div>
                                    <div class="col-md-6">
                                        <div class="video-wrapper position-relative">
                                            <div class="video-play">
                                                <div>
                                                    <i class="bx bx-play"></i>
                                                </div>
                                            </div>
                                            <img alt="image" src="{{ asset('assets/images/blog/blogd2.png') }}"
                                                class="img-fluid" />
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <p class="para">
                                Gochujang ugh viral, butcher pabst put a bird on it
                                meditation austin craft beer banh. Distillery ramps af, goch
                                ujang hell of VHS kitsch austin. Vegan air plant trust fund,
                                poke sartorial ennui next lev el photo booth coloring book
                                etsy green juice meditation austin craft beer.
                            </p>
                        </div>
                        <div class="blog-tag">
                            <div class="row g-3">
                                <div
                                    class="col-md-6 d-flex justify-content-md-start justify-content-center align-items-center">
                                    <h6>Post Tag:</h6>
                                    <ul class="tag-list">
                                        <li><a href="#">Network Setup</a></li>
                                        <li><a href="#">Cars</a></li>
                                        <li><a href="#">Technology</a></li>
                                    </ul>
                                </div>
                                <div
                                    class="col-md-6 d-flex justify-content-md-end justify-content-center align-items-center">
                                    <ul class="share-social gap-3">
                                        <li><a href="https://www.facebook.com/"><i class="bx bxl-facebook"></i></a></li>
                                        <li><a href="https://www.twitter.com/"><i class="bx bxl-twitter"></i></a></li>
                                        <li><a href="https://www.instagram.com/"><i class="bx bxl-instagram"></i></a>
                                        </li>
                                        <li><a href="https://www.pinterest.com/"><i
                                                    class="bx bxl-pinterest-alt"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="blog-author gap-4 flex-md-nowrap flex-wrap">
                            <div class="author-image">
                                <img alt="image" src="{{ asset('assets/images/blog/blog-author.png') }}"
                                    class="img-fluid" />
                            </div>
                            <div class="author-detials text-md-start text-center">
                                <h5>-- Leslie Alexander</h5>
                                <p class="para">
                                    It has survived not only five centuries, but also the leap
                                    into electronic typesetting unchanged. It was popularised
                                    in the sheets containing lorem ipsum is simply free text.
                                </p>
                            </div>
                        </div>
                        <div class="blog-comment">
                            <div class="blog-widget-title">
                                <h4>Comments (03)</h4>
                                <span></span>
                            </div>
                            <ul class="comment-list mb-50">
                                <li>
                                    <div class="comment-box">
                                        <div class="comment-header d-flex justify-content-between align-items-center">
                                            <div class="author d-flex flex-wrap">
                                                <img alt="image" src="{{ asset('assets/images/blog/comment1.png') }}" />
                                                <h5><a class="text-decoration-none" href="#">Leslie Waston</a></h5><span
                                                    class="commnt-date">April 6,
                                                    2022 at 3:54 am</span>
                                            </div>
                                            <a href="#" class="commnt-reply"><i class="bi bi-reply"></i></a>
                                        </div>
                                        <div class="comment-body">
                                            <p class="para">Aenean dolor massa, rhoncus ut tortor in, pretium tempus
                                                neque. Vestibulum venenati leo et dic tum finibus. Nulla vulputate dolor
                                                sit amet tristique dapibus.Gochujang ugh viral, butcher pabst put a bird
                                                on it meditation austin.</p>
                                        </div>
                                    </div>
                                    <ul class="comment-reply">
                                        <li>
                                            <div class="comment-box">
                                                <div
                                                    class="comment-header d-flex justify-content-between align-items-center">
                                                    <div class="author d-flex flex-wrap">
                                                        <img alt="image"
                                                            src="{{ asset('assets/images/blog/comment2.png') }}" />
                                                        <h5><a class="text-decoration-none" href="#">Robert Fox</a></h5>
                                                        <span class="commnt-date">April
                                                            6, 2022 at 3:54 am</span>
                                                    </div>
                                                    <a href="#" class="commnt-reply"><i class="bi bi-reply"></i></a>
                                                </div>
                                                <div class="comment-body">
                                                    <p class="para">Aenean dolor massa, rhoncus ut tortor in, pretium
                                                        tempus neque. Vestibulum venenati leo et dic tum finibus. Nulla
                                                        vulputate dolor sit amet tristique dapibus.Gochujang ugh viral,
                                                        butcher pabst put a bird on it meditation austin.</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="comment-box">
                                        <div class="comment-header d-flex justify-content-between align-items-center">
                                            <div class="author d-flex flex-wrap">
                                                <img alt="image" src="{{ asset('assets/images/blog/comment3.png') }}" />
                                                <h5><a class="text-decoration-none" href="#">William Harvey</a></h5>
                                                <span class="commnt-date">April
                                                    6, 2022 at 3:54 am</span>
                                            </div>
                                            <a href="#" class="commnt-reply"><i class="bi bi-reply"></i></a>
                                        </div>
                                        <div class="comment-body">
                                            <p class="para">Aenean dolor massa, rhoncus ut tortor in, pretium tempus
                                                neque. Vestibulum venenati leo et dic tum finibus. Nulla vulputate dolor
                                                sit amet tristique dapibus.Gochujang ugh viral, butcher pabst put a bird
                                                on it meditation austin.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="comment-form">
                            <div class="blog-widget-title style2">
                                <h4>Leave A Comment</h4>
                                <p class="para">Your email address will not be published.</p>
                                <span></span>
                            </div>
                            <form action="#">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-inner">
                                            <input type="text" placeholder="Your Name :" />
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-inner">
                                            <input type="email" placeholder="Your Email :" />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-inner">
                                            <textarea name="message" placeholder="Write Message :" rows="12"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="eg-btn btn--primary btn--md form--btn">Submit
                                            Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4">
                    <div class="blog-sidebar">
                        <div class="blog-widget-item wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".2s">
                            <div class="search-area">
                                <div class="sidebar-widget-title">
                                    <h4>Search From Blog</h4>
                                    <span></span>
                                </div>
                                <div class="blog-widget-body">
                                    <form>
                                        <div class="form-inner">
                                            <input type="text" placeholder="Search Here" />
                                            <button class="search--btn"><i class="bx bx-search-alt-2"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="blog-widget-item wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".4s">
                            <div class="blog-category">
                                <div class="sidebar-widget-title">
                                    <h4>Recent Post</h4>
                                    <span></span>
                                </div>
                                <div class="blog-widget-body">
                                    <ul class="recent-post">
                                        <li class="single-post">
                                            <div class="post-img">
                                                <a href="/blog-details"><img alt="image"
                                                        src="{{ asset('assets/images/blog/recent-feed1.png') }}" /></a>
                                            </div>
                                            <div class="post-content">
                                                <span>January 31, 2022</span>
                                                <h6><a class="text-decoration-none" href="/blog-details">Grant
                                                        Distributions Conti nu to Incr
                                                        Ease.</a></h6>
                                            </div>
                                        </li>
                                        <li class="single-post">
                                            <div class="post-img">
                                                <a class="text-decoration-none" href="/blog-details"><img alt="image"
                                                        src="{{ asset('assets/images/blog/recent-feed2.png') }}" /></a>
                                            </div>
                                            <div class="post-content">
                                                <span>February 21, 2022</span>
                                                <h6><a class="text-decoration-none" href="/blog-details">Seminar for
                                                        Children to Learn About.</a>
                                                </h6>
                                            </div>
                                        </li>
                                        <li class="single-post">
                                            <div class="post-img">
                                                <a href="/blog-details"><img alt="image"
                                                        src="{{ asset('assets/images/blog/recent-feed3.png') }}" /></a>
                                            </div>
                                            <div class="post-content">
                                                <span>March 22, 2022</span>
                                                <h6><a class="text-decoration-none" href="/blog-details">Education and
                                                        teacher for all African
                                                        Children.</a></h6>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="blog-widget-item wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".4s">
                            <div class="top-blog">
                                <div class="sidebar-widget-title">
                                    <h4>Post Categories</h4>
                                    <span></span>
                                </div>
                                <div class="blog-widget-body">
                                    <ul class="category-list">
                                        <li><a class="text-decoration-none" href="#"><span>New
                                                    Technology</span><span>01</span></a></li>
                                        <li><a class="text-decoration-none" href="#"><span>Network
                                                    Setup</span><span>12</span></a></li>
                                        <li><a class="text-decoration-none" href="#"><span>Audi Car
                                                    Bidding</span><span>33</span></a></li>
                                        <li><a class="text-decoration-none"
                                                href="#"><span>Entertainment</span><span>54</span></a></li>
                                        <li><a class="text-decoration-none" href="#"><span>New
                                                    Technology</span><span>24</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="blog-widget-item wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".8s">
                            <div class="tag-area">
                                <div class="sidebar-widget-title">
                                    <h4>Follow Social</h4>
                                    <span></span>
                                </div>
                                <div class="blog-widget-body">
                                    <ul class="sidebar-social-list gap-4">
                                        <li><a href="https://www.facebook.com/"><i class="bx bxl-facebook"></i></a></li>
                                        <li><a href="https://www.twitter.com/"><i class="bx bxl-twitter"></i></a></li>
                                        <li><a href="https://www.instagram.com/"><i class="bx bxl-instagram"></i></a>
                                        </li>
                                        <li><a href="https://www.pinterest.com/"><i
                                                    class="bx bxl-pinterest-alt"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-banner wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1s">
                            <div class="banner-content">
                                <span>CARS</span>
                                <h3>Toyota AIGID A Clasis Cars Sale</h3>
                                <a href="/auction-details" class="eg-btn btn--primary card--btn">Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    @include('landingpage.components.counterUp')
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