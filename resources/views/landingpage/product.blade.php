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
    <link rel="stylesheet" href="{{ asset('assets/css/test.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.0.7/css/boxicons.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.0.7/css/boxicons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet">

</head>

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
                                        <div class="shop-toolbar__left">
                                            <div class="product-ordering">
                                                <select class="product-ordering__select nice-select">
                                                    <option value="0">Default Sorting</option>
                                                    <option value="1">Relevance</option>
                                                    <option value="2">Name, A to Z</option>
                                                    <option value="3">Name, Z to A</option>
                                                    <option value="4">Price, low to high</option>
                                                    <option value="5">Price, high to low</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="shop-toolbar__right">
                                            <p class="text-lg">Showing Result 08 Among 72</p>
                                            <div class="product-view-mode ml--50 ml-xs--0">
                                                <a class="active" href="#" data-target="grid">
                                                    <img src="assets/img/icons/grid.png" alt="Grid">
                                                </a>
                                                <a href="#" data-target="list">
                                                    <img src="assets/img/icons/list.png" alt="Grid">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="shop-products">
                                <div class="row">
                                    <!-- featureCol -->
                                    <div class="col-12 col-sm-6 col-lg-6 featureCol mb-7">

                                        <div class="eg-card auction-card3 wow fadeInDown" data-wow-duration="1.5s"
                                            data-wow-delay="0.2s">
                                            <div class="auction-timer">
                                                <span class="timer-title">Time Remaining</span>
                                                <div class="countdown" id="timer1">
                                                    <h4>
                                                        <Counter formate="counter3" />
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="auction-img">
                                                <img alt="image" src="assets/images/bg/live-auc1.png" />
                                                <div class="author-area">
                                                    <div class="author-emo">
                                                        <img alt="image" src="assets/images/bg/auction-authr1.png" />
                                                    </div>
                                                    <div class="author-name">
                                                        <span>by @Adam jons</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="auction-content">
                                                <h4><a class="text-black text-decoration-none"
                                                        href="/auction-details">Brand New
                                                        royal
                                                        Enfield 250 CC For Sale</a></h4>
                                                <p>Bidding Price : <span>$85.9</span></p>
                                                <div class="auction-card-bttm">
                                                    <a href="/barang-detail" class="eg-btn btn--primary3 btn--sm">Place
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
                                    <!-- featureCol -->
                                    <div class="col-12 col-sm-6 col-lg-6 featureCol mb-7">
                                        <div class="eg-card auction-card3 wow fadeInDown" data-wow-duration="1.5s"
                                            data-wow-delay="0.2s">
                                            <div class="auction-timer">
                                                <span class="timer-title">Time Remaining</span>
                                                <div class="countdown" id="timer1">
                                                    <h4>
                                                        <Counter formate="counter3" />
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="auction-img">
                                                <img alt="image" src="assets/images/bg/live-auc1.png" />
                                                <div class="author-area">
                                                    <div class="author-emo">
                                                        <img alt="image" src="assets/images/bg/auction-authr1.png" />
                                                    </div>
                                                    <div class="author-name">
                                                        <span>by @Adam jons</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="auction-content">
                                                <h4><a class="text-black text-decoration-none"
                                                        href="/auction-details">Brand New
                                                        royal
                                                        Enfield 250 CC For Sale</a></h4>
                                                <p>Bidding Price : <span>$85.9</span></p>
                                                <div class="auction-card-bttm">
                                                    <a href="/auction-details"
                                                        class="eg-btn btn--primary3 btn--sm">Place a
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
                                    <!-- featureCol -->
                                    <div class="col-12 col-sm-6 col-lg-6 featureCol mb-7">
                                        <div class="eg-card auction-card3 wow fadeInDown" data-wow-duration="1.5s"
                                            data-wow-delay="0.2s">
                                            <div class="auction-timer">
                                                <span class="timer-title">Time Remaining</span>
                                                <div class="countdown" id="timer1">
                                                    <h4>
                                                        <Counter formate="counter3" />
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="auction-img">
                                                <img alt="image" src="assets/images/bg/live-auc1.png" />
                                                <div class="author-area">
                                                    <div class="author-emo">
                                                        <img alt="image" src="assets/images/bg/auction-authr1.png" />
                                                    </div>
                                                    <div class="author-name">
                                                        <span>by @Adam jons</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="auction-content">
                                                <h4><a class="text-black text-decoration-none"
                                                        href="/auction-details">Brand New
                                                        royal
                                                        Enfield 250 CC For Sale</a></h4>
                                                <p>Bidding Price : <span>$85.9</span></p>
                                                <div class="auction-card-bttm">
                                                    <a href="/auction-details"
                                                        class="eg-btn btn--primary3 btn--sm">Place a
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
                                    <div class="col-12 col-sm-6 col-lg-6 featureCol mb-7">
                                        <div class="eg-card auction-card3 wow fadeInDown" data-wow-duration="1.5s"
                                            data-wow-delay="0.2s">
                                            <div class="auction-timer">
                                                <span class="timer-title">Time Remaining</span>
                                                <div class="countdown" id="timer1">
                                                    <h4>
                                                        <Counter formate="counter3" />
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="auction-img">
                                                <img alt="image" src="assets/images/bg/live-auc1.png" />
                                                <div class="author-area">
                                                    <div class="author-emo">
                                                        <img alt="image" src="assets/images/bg/auction-authr1.png" />
                                                    </div>
                                                    <div class="author-name">
                                                        <span>by @Adam jons</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="auction-content">
                                                <h4><a class="text-black text-decoration-none"
                                                        href="/auction-details">Brand New
                                                        royal
                                                        Enfield 250 CC For Sale</a></h4>
                                                <p>Bidding Price : <span>$85.9</span></p>
                                                <div class="auction-card-bttm">
                                                    <a href="/auction-details"
                                                        class="eg-btn btn--primary3 btn--sm">Place a
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
                                    <!-- featureCol -->
                                    {{-- <div class="col-12 col-sm-6 col-lg-4 featureCol mb-7">
                                        <div class="eg-card auction-card3 wow fadeInDown" data-wow-duration="1.5s"
                                            data-wow-delay="0.2s">
                                            <div class="auction-timer">
                                                <span class="timer-title">Time Remaining</span>
                                                <div class="countdown" id="timer1">
                                                    <h4>
                                                        <Counter formate="counter3" />
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="auction-img">
                                                <img alt="image" src="assets/images/bg/live-auc1.png" />
                                                <div class="author-area">
                                                    <div class="author-emo">
                                                        <img alt="image" src="assets/images/bg/auction-authr1.png" />
                                                    </div>
                                                    <div class="author-name">
                                                        <span>by @Adam jons</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="auction-content">
                                                <h4><a class="text-black text-decoration-none"
                                                        href="/auction-details">Brand New
                                                        royal
                                                        Enfield 250 CC For Sale</a></h4>
                                                <p>Bidding Price : <span>$85.9</span></p>
                                                <div class="auction-card-bttm">
                                                    <a href="/auction-details"
                                                        class="eg-btn btn--primary3 btn--sm">Place a
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
                                    </div> --}}
                                    <!-- featureCol -->
                                    {{-- <div class="col-12 col-sm-6 col-lg-4 featureCol mb-7">
                                        <div class="eg-card auction-card3 wow fadeInDown" data-wow-duration="1.5s"
                                            data-wow-delay="0.2s">
                                            <div class="auction-timer">
                                                <span class="timer-title">Time Remaining</span>
                                                <div class="countdown" id="timer1">
                                                    <h4>
                                                        <Counter formate="counter3" />
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="auction-img">
                                                <img alt="image" src="assets/images/bg/live-auc1.png" />
                                                <div class="author-area">
                                                    <div class="author-emo">
                                                        <img alt="image" src="assets/images/bg/auction-authr1.png" />
                                                    </div>
                                                    <div class="author-name">
                                                        <span>by @Adam jons</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="auction-content">
                                                <h4><a class="text-black text-decoration-none"
                                                        href="/auction-details">Brand New
                                                        royal
                                                        Enfield 250 CC For Sale</a></h4>
                                                <p>Bidding Price : <span>$85.9</span></p>
                                                <div class="auction-card-bttm">
                                                    <a href="/auction-details"
                                                        class="eg-btn btn--primary3 btn--sm">Place a
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
                                    </div> --}}
                                    <!-- featureCol -->
                                    {{-- <div class="col-12 col-sm-6 col-lg-4 featureCol mb-7">
                                        <div class="eg-card auction-card3 wow fadeInDown" data-wow-duration="1.5s"
                                            data-wow-delay="0.2s">
                                            <div class="auction-timer">
                                                <span class="timer-title">Time Remaining</span>
                                                <div class="countdown" id="timer1">
                                                    <h4>
                                                        <Counter formate="counter3" />
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="auction-img">
                                                <img alt="image" src="assets/images/bg/live-auc1.png" />
                                                <div class="author-area">
                                                    <div class="author-emo">
                                                        <img alt="image" src="assets/images/bg/auction-authr1.png" />
                                                    </div>
                                                    <div class="author-name">
                                                        <span>by @Adam jons</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="auction-content">
                                                <h4><a class="text-black text-decoration-none"
                                                        href="/auction-details">Brand New
                                                        royal
                                                        Enfield 250 CC For Sale</a></h4>
                                                <p>Bidding Price : <span>$85.9</span></p>
                                                <div class="auction-card-bttm">
                                                    <a href="/auction-details"
                                                        class="eg-btn btn--primary3 btn--sm">Place a
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
                                    </div> --}}
                                    <!-- featureCol -->
                                    {{-- <div class="col-12 col-sm-6 col-lg-4 featureCol mb-7">
                                        <div class="eg-card auction-card3 wow fadeInDown shadow-md"
                                            data-wow-duration="1.5s" data-wow-delay="0.2s">
                                            <div class="auction-timer">
                                                <span class="timer-title">Time Remaining</span>
                                                <div class="countdown" id="timer1">
                                                    <h4>
                                                        <Counter formate="counter3" />
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="auction-img">
                                                <img alt="image" src="assets/images/bg/live-auc1.png" />
                                                <div class="author-area">
                                                    <div class="author-emo">
                                                        <img alt="image" src="assets/images/bg/auction-authr1.png" />
                                                    </div>
                                                    <div class="author-name">
                                                        <span>by @Adam jons</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="auction-content">
                                                <h4><a class="text-black text-decoration-none"
                                                        href="/auction-details">Brand New
                                                        royal
                                                        Enfield 250 CC For Sale</a></h4>
                                                <p>Bidding Price : <span>$85.9</span></p>
                                                <div class="auction-card-bttm">
                                                    <a href="/auction-details"
                                                        class="eg-btn btn--primary3 btn--sm">Place a
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
                                    </div> --}}
                                    <!-- featureCol -->
                                    {{-- <div class="col-12 col-sm-6 col-lg-4 featureCol mb-7">
                                        <div class="border">
                                            <div class="imgHolder position-relative w-100 overflow-hidden">
                                                <img src="http://placehold.it/270x300" alt="image description"
                                                    class="img-fluid w-100">
                                                <ul
                                                    class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
                                                    <li class="mr-2 overflow-hidden"><a href="javascript:void(0);"
                                                            class="icon-heart d-block"></a></li>
                                                    <li class="mr-2 overflow-hidden"><a href="javascript:void(0);"
                                                            class="icon-cart d-block"></a></li>
                                                    <li class="mr-2 overflow-hidden"><a href="javascript:void(0);"
                                                            class="icon-eye d-block"></a></li>
                                                    <li class="overflow-hidden"><a href="javascript:void(0);"
                                                            class="icon-arrow d-block"></a></li>
                                                </ul>
                                            </div>
                                            <div class="text-center py-5 px-4">
                                                <span class="title d-block mb-2"><a href="shop-detail.html">Pellentesque
                                                        aliquet</a></span>
                                                <span class="price d-block fwEbold">58.00 $</span>
                                                <span
                                                    class="hotOffer fwEbold text-uppercase text-white position-absolute d-block">Hot</span>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <!-- featureCol -->
                                    {{-- <div class="col-12 col-sm-6 col-lg-4 featureCol mb-7">
                                        <div class="border">
                                            <div class="imgHolder position-relative w-100 overflow-hidden">
                                                <img src="http://placehold.it/270x300" alt="image description"
                                                    class="img-fluid w-100">
                                                <ul
                                                    class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
                                                    <li class="mr-2 overflow-hidden"><a href="javascript:void(0);"
                                                            class="icon-heart d-block"></a></li>
                                                    <li class="mr-2 overflow-hidden"><a href="javascript:void(0);"
                                                            class="icon-cart d-block"></a></li>
                                                    <li class="mr-2 overflow-hidden"><a href="javascript:void(0);"
                                                            class="icon-eye d-block"></a></li>
                                                    <li class="overflow-hidden"><a href="javascript:void(0);"
                                                            class="icon-arrow d-block"></a></li>
                                                </ul>
                                            </div>
                                            <div class="text-center py-5 px-4">
                                                <span class="title d-block mb-2"><a href="shop-detail.html">Pellentesque
                                                        aliquet</a></span>
                                                <span class="price d-block fwEbold"><del>80.50 $</del>68.00 $</span>
                                                <span
                                                    class="hotOffer green fwEbold text-uppercase text-white position-absolute d-block">Sale</span>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <!-- featureCol -->
                                    {{-- <div class="col-12 col-sm-6 col-lg-4 featureCol mb-7">
                                        <div class="border">
                                            <div class="imgHolder position-relative w-100 overflow-hidden">
                                                <img src="http://placehold.it/270x300" alt="image description"
                                                    class="img-fluid w-100">
                                                <ul
                                                    class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
                                                    <li class="mr-2 overflow-hidden"><a href="javascript:void(0);"
                                                            class="icon-heart d-block"></a></li>
                                                    <li class="mr-2 overflow-hidden"><a href="javascript:void(0);"
                                                            class="icon-cart d-block"></a></li>
                                                    <li class="mr-2 overflow-hidden"><a href="javascript:void(0);"
                                                            class="icon-eye d-block"></a></li>
                                                    <li class="overflow-hidden"><a href="javascript:void(0);"
                                                            class="icon-arrow d-block"></a></li>
                                                </ul>
                                            </div>
                                            <div class="text-center py-5 px-4">
                                                <span class="title d-block mb-2"><a href="shop-detail.html">Pellentesque
                                                        aliquet</a></span>
                                                <span class="price d-block fwEbold"><del>80.50 $</del>68.00 $</span>
                                                <span
                                                    class="hotOffer green fwEbold text-uppercase text-white position-absolute d-block">Sale</span>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <!-- featureCol -->
                                    {{-- <div class="col-12 col-sm-6 col-lg-4 featureCol mb-7">
                                        <div class="border">
                                            <div class="imgHolder position-relative w-100 overflow-hidden">
                                                <img src="http://placehold.it/270x300" alt="image description"
                                                    class="img-fluid w-100">
                                                <ul
                                                    class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
                                                    <li class="mr-2 overflow-hidden"><a href="javascript:void(0);"
                                                            class="icon-heart d-block"></a></li>
                                                    <li class="mr-2 overflow-hidden"><a href="javascript:void(0);"
                                                            class="icon-cart d-block"></a></li>
                                                    <li class="mr-2 overflow-hidden"><a href="javascript:void(0);"
                                                            class="icon-eye d-block"></a></li>
                                                    <li class="overflow-hidden"><a href="javascript:void(0);"
                                                            class="icon-arrow d-block"></a></li>
                                                </ul>
                                            </div>
                                            <div class="text-center py-5 px-4">
                                                <span class="title d-block mb-2"><a href="shop-detail.html">Pellentesque
                                                        aliquet</a></span>
                                                <span class="price d-block fwEbold">58.00 $</span>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <!-- featureCol -->
                                    {{-- <div class="col-12 col-sm-6 col-lg-4 featureCol mb-7">
                                        <div class="border">
                                            <div class="imgHolder position-relative w-100 overflow-hidden">
                                                <img src="http://placehold.it/270x300" alt="image description"
                                                    class="img-fluid w-100">
                                                <ul
                                                    class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
                                                    <li class="mr-2 overflow-hidden"><a href="javascript:void(0);"
                                                            class="icon-heart d-block"></a></li>
                                                    <li class="mr-2 overflow-hidden"><a href="javascript:void(0);"
                                                            class="icon-cart d-block"></a></li>
                                                    <li class="mr-2 overflow-hidden"><a href="javascript:void(0);"
                                                            class="icon-eye d-block"></a></li>
                                                    <li class="overflow-hidden"><a href="javascript:void(0);"
                                                            class="icon-arrow d-block"></a></li>
                                                </ul>
                                            </div>
                                            <div class="text-center py-5 px-4">
                                                <span class="title d-block mb-2"><a href="shop-detail.html">Pellentesque
                                                        aliquet</a></span>
                                                <span class="price d-block fwEbold">58.00 $</span>
                                                <span
                                                    class="hotOffer fwEbold text-uppercase text-white position-absolute d-block">Hot</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 pt-3 mb-lg-0 mb-md-6 mb-3">
                                        <!-- pagination -->
                                        <ul
                                            class="list-unstyled pagination d-flex justify-content-center align-items-end">
                                            <li><a href="javascript:void(0);"><i class="fas fa-chevron-left"></i></a>
                                            </li>
                                            <li class="active"><a href="javascript:void(0);">1</a></li>
                                            <li><a href="javascript:void(0);">2</a></li>
                                            <li>...</li>
                                            <li><a href="javascript:void(0);"><i class="fas fa-chevron-right"></i></a>
                                            </li>
                                        </ul>
                                    </div> --}}
                                </div>
                            </div>
                            <nav class="pagination-wrap">
                                <ul class="pagination">
                                    <li><span class="page-number current">1</span></li>
                                    <li><a href="#" class="page-number">2</a></li>
                                    <li><span class="dot"></span></li>
                                    <li><span class="dot"></span></li>
                                    <li><span class="dot"></span></li>
                                    <li><a href="#" class="page-number">16</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-xl-3 col-lg-4 order-lg-1">
                            <aside class="shop-sidebar">
                                <div class="shop-widget mb--40">
                                    <h3 class="widget-title mb--25">Category</h3>
                                    <ul class="widget-list category-list">
                                        <li class="text-decoration-none">
                                            <a href="" class="text-decoration-none">
                                                <span class="category-title">Winter Collection</span>
                                                <i class="fa fa-angle-double-right"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="text-decoration-none">
                                                <span class="category-title">Women’s Clothes</span>
                                                <i class="fa fa-angle-double-right"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="text-decoration-none">
                                                <span class="category-title">Men’s Clothes</span>
                                                <i class="fa fa-angle-double-right"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="text-decoration-none">
                                                <span class="category-title">Kid’s Clothes</span>
                                                <i class="fa fa-angle-double-right"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="text-decoration-none">
                                                <span class="category-title">Uncategorized</span>
                                                <i class="fa fa-angle-double-right"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="text-decoration-none">
                                                <span class="category-title">Accessories</span>
                                                <i class="fa fa-angle-double-right"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="text-decoration-none">
                                                <span class="category-title">New Arrival</span>
                                                <i class="fa fa-angle-double-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="shop-widget mb--40">
                                    <h3 class="widget-title mb--30">Color</h3>
                                    <div class="widget-color">
                                        <a href="" class="red text-decoration-none">Red</a>
                                        <a href="" class="pink text-decoration-none">Pink</a>
                                        <a href="" class="black text-decoration-none">black</a>
                                        <a href="" class="brown text-decoration-none">brown</a>
                                        <a href="" class="blue text-decoration-none">blue</a>
                                        <a href="" class="cholate text-decoration-none">cholate</a>
                                        <a href="" class="copper text-decoration-none">copper</a>
                                        <a href="" class="gray text-decoration-none">grey</a>
                                    </div>
                                </div>
                                <div class="shop-widget mb--40">
                                    <h3 class="widget-title mb--25">Price</h3>
                                    <ul class="widget-list price-list">
                                        <li>
                                            <a href="" class="text-decoration-none">
                                                <span>Low - Medium</span>
                                                <strong class="font-weight-medium">$10.00 - $45.00</strong>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="text-decoration-none">
                                                <span>Medium - High</span>
                                                <strong class="font-weight-medium">$45.00 - $60.00</strong>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="text-decoration-none">
                                                <span>High - Avobe</span>
                                                <strong class="font-weight-medium">$60.00 - $200</strong>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="shop-widget mb--40">
                                    <h3 class="widget-title mb--25">Brand</h3>
                                    <ul class="widget-list brand-list">
                                        <li>
                                            <a href="" class="text-decoration-none">
                                                <span>Walmart</span>
                                                <strong class="color--red font-weight-medium">10</strong>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="text-decoration-none">
                                                <span>Yellow</span>
                                                <strong class="color--red font-weight-medium">50</strong>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="text-decoration-none">
                                                <span>H &amp; M</span>
                                                <strong class="color--red font-weight-medium">46</strong>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="text-decoration-none">
                                                <span>Black &amp; White</span>
                                                <strong class="color--red font-weight-medium">46</strong>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="shop-widget">
                                    <h3 class="widget-title mb--25">Tag</h3>
                                    <div class="tagcloud">
                                        <a href="" class="text-decoration-none">Blazer</a>
                                        <a href="" class="text-decoration-none">Jacket</a>
                                        <a href="" class="text-decoration-none">Polo Shirt</a>
                                        <a href="" class="text-decoration-none">Cloth</a>
                                        <a href="" class="text-decoration-none">T-Shirt</a>
                                        <a href="" class="text-decoration-none">Shoes</a>
                                        <a href="" class="text-decoration-none">Pant</a>
                                        <a href="" class="text-decoration-none">Party Dress</a>
                                        <a href="" class="text-decoration-none">Coktail Dress</a>
                                        <a href="" class="text-decoration-none">Sweater</a>
                                        <a href="" class="text-decoration-none">Jeans</a>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Content Wrapper Start -->

        <!-- Footer Start-->

        <!-- Footer End-->

        <!-- OffCanvas Menu Start -->
        <aside class="offcanvas-navigation" id="offcanvasnav">
            <div class="offcanvas-navigation__inner">
                <a href="" class="btn-close">
                    <i class="flaticon-cross"></i>
                    <span class="sr-only">Close Offcanvas Navigtion</span>
                </a>
                <div class="offcanvas-navigation__top">
                    <ul class="offcanvas-menu">
                        <li class="has-children">
                            <a href="#">
                                <span class="mm-text">Home</span>
                            </a>
                            <ul class="sub-menu">
                                <li class="has-children">
                                    <a href="index.html">
                                        <span class="mm-text">Home One</span>
                                    </a>
                                </li>
                                <li class="has-children">
                                    <a href="index-02.html">
                                        <span class="mm-text">Home Two</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="shop.html">
                                <span class="mm-text">New Arrivals</span>
                            </a>
                        </li>
                        <li class="has-children">
                            <a href="#">
                                <span class="mm-text">Shop</span>
                            </a>
                            <ul class="sub-menu">
                                <li class="has-children">
                                    <a href="#">
                                        <span class="overlay-menu__title">Shop Layout</span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="shop-fullwidth.html">
                                                <span class="mm-text">Full Width</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop.html">
                                                <span class="mm-text">Left Sidebar</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-right-sidebar.html">
                                                <span class="mm-text">Right Sidebar</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-three-columns.html">
                                                <span class="mm-text">Three Columns</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-four-columns.html">
                                                <span class="mm-text">Four Columns</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-list.html">
                                                <span class="mm-text">Full Width</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-list-sidebar.html">
                                                <span class="mm-text">Left Sidebar</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-list-right-sidebar.html">
                                                <span class="mm-text">Right Sidebar</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-children">
                                    <a href="#">
                                        <span class="overlay-menu__title">Single Product</span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="product-details.html">
                                                <span class="mm-text">Tab Style 1</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="product-details-tab-style-2.html">
                                                <span class="mm-text">Tab Style 2</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="product-details-tab-style-3.html">
                                                <span class="mm-text">Tab Style 3</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="product-details-gallery-left.html">
                                                <span class="mm-text">Gallery Left</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="product-details-gallery-right.html">
                                                <span class="mm-text">Gallery Right</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="product-details-sticky-left.html">
                                                <span class="mm-text">Sticky Left</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="product-details-sticky-right.html">
                                                <span class="mm-text">Sticky Right</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="product-details-slider-box.html">
                                                <span class="mm-text">Slider Box</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="product-details-slider-full-width.html">
                                                <span class="mm-text">Slider Box Full Width</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="product-details-affiliate.html">
                                                <span class="mm-text">Affiliate Proudct</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="product-details-variable.html">
                                                <span class="mm-text">Variable Proudct</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="product-details-group.html">
                                                <span class="mm-text">Group Product</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-children">
                                    <a href="#">
                                        <span class="overlay-menu__title">Shop Pages</span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="my-account.html">
                                                <span class="mm-text">My Account</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="cart.html">
                                                <span class="mm-text">Shopping Cart</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="checkout.html">
                                                <span class="mm-text">Check Out</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="wishlist.html">
                                                <span class="mm-text">Wishlist</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="order-tracking.html">
                                                <span class="mm-text">Order tracking</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="compare.html">
                                                <span class="mm-text">compare</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="#">
                                <span class="mm-text">Pages</span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="my-account.html">
                                        <span class="mm-text">My Account</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="checkout.html">
                                        <span class="mm-text">Checkout</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="cart.html">
                                        <span class="mm-text">Cart</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="compare.html">
                                        <span class="mm-text">Compare</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="order-tracking.html">
                                        <span class="mm-text">Track Order</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="wishlist.html">
                                        <span class="mm-text">Wishlist</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="contact-us.html">
                                <span class="mm-text">Contact Us</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </aside>
        <!-- OffCanvas Menu End -->

        <!-- Mini Cart Start -->
        <aside class="mini-cart" id="miniCart">
            <div class="mini-cart-wrapper">
                <div class="mini-cart__close">
                    <a href="#" class="btn-close"><i class="flaticon-cross"></i></a>
                </div>
                <div class="mini-cart-inner">
                    <h3 class="mini-cart__heading mb--45">Shopping Cart</h3>
                    <div class="mini-cart__content">
                        <ul class="mini-cart__list">
                            <li class="mini-cart__product">
                                <a href="#" class="mini-cart__product-remove">
                                    <i class="flaticon-cross"></i>
                                </a>
                                <div class="mini-cart__product-image">
                                    <img src="assets/img/products/product-11-90x90.jpg" alt="products">
                                </div>
                                <div class="mini-cart__product-content">
                                    <a class="mini-cart__product-title" href="product-details.html">Lexbaro
                                        Begadi</a>
                                    <span class="mini-cart__product-quantity">1 x $49.00</span>
                                </div>
                            </li>
                            <li class="mini-cart__product">
                                <a href="#" class="mini-cart__product-remove">
                                    <i class="flaticon-cross"></i>
                                </a>
                                <div class="mini-cart__product-image">
                                    <img src="assets/img/products/product-12-90x90.jpg" alt="products">
                                </div>
                                <div class="mini-cart__product-content">
                                    <a class="mini-cart__product-title" href="product-details.html">Lexbaro
                                        Begadi</a>
                                    <span class="mini-cart__product-quantity">1 x $49.00</span>
                                </div>
                            </li>
                            <li class="mini-cart__product">
                                <a href="#" class="mini-cart__product-remove">
                                    <i class="flaticon-cross"></i>
                                </a>
                                <div class="mini-cart__product-image">
                                    <img src="assets/img/products/product-13-90x90.jpg" alt="products">
                                </div>
                                <div class="mini-cart__product-content">
                                    <a class="mini-cart__product-title" href="product-details.html">Lexbaro
                                        Begadi</a>
                                    <span class="mini-cart__product-quantity">1 x $49.00</span>
                                </div>
                            </li>
                        </ul>
                        <div class="mini-cart__total">
                            <span>Subtotal</span>
                            <span class="ammount">$98.00</span>
                        </div>
                        <div class="mini-cart__buttons">
                            <a href="cart.html" class="btn btn-fullwidth btn-bg-primary mb--20">View Cart</a>
                            <a href="checkout.html" class="btn btn-fullwidth btn-bg-primary">Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <!-- Mini Cart End -->

        <!-- Qicuk View Modal Start -->
        <div class="modal fade product-modal" id="productModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="flaticon-cross"></i></span>
                        </button>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="element-carousel slick-vertical-center" data-slick-options='{
                                        "slidesToShow": 1,
                                        "slidesToScroll": 1,
                                        "arrows": true,
                                        "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "fa fa-angle-double-left" },
                                        "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "fa fa-angle-double-right" }
                                    }'>
                                    <div class="item">
                                        <figure class="product-gallery__image">
                                            <img src="assets/img/products/product-03-270x300.jpg" alt="Product">
                                            <span class="product-badge sale">Sale</span>
                                        </figure>
                                    </div>
                                    <div class="item">
                                        <figure class="product-gallery__image">
                                            <img src="assets/img/products/product-04-270x300.jpg" alt="Product">
                                            <span class="product-badge sale">Sale</span>
                                        </figure>
                                    </div>
                                    <div class="item">
                                        <figure class="product-gallery__image">
                                            <img src="assets/img/products/product-05-270x300.jpg" alt="Product">
                                            <span class="product-badge sale">Sale</span>
                                        </figure>
                                    </div>
                                    <div class="item">
                                        <figure class="product-gallery__image">
                                            <img src="assets/img/products/product-06-270x300.jpg" alt="Product">
                                            <span class="product-badge sale">Sale</span>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="modal-box product-summary">
                                    <div class="product-navigation text-end mb--20">
                                        <a href="#" class="prev"><i class="fa fa-angle-double-left"></i></a>
                                        <a href="#" class="next"><i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                    <div class="product-rating d-flex mb--20">
                                        <div class="star-rating star-four">
                                            <span>Rated <strong class="rating">5.00</strong> out of 5</span>
                                        </div>
                                    </div>
                                    <h3 class="product-title mb--20">Golden Easy Spot Chair.</h3>
                                    <p class="product-short-description mb--20">Donec accumsan auctor iaculis. Sed
                                        suscipit
                                        arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices
                                        justo
                                        eget,
                                        sodales orci. Aliquam egestas libero ac turpis pharetra, in vehicula lacus
                                        scelerisque. Vestibulum ut sem laoreet, feugiat tellus at, hendrerit arcu.
                                    </p>
                                    <div class="product-price-wrapper mb--25">
                                        <span class="money">$200.00</span>
                                        <span class="price-separator">-</span>
                                        <span class="money">$400.00</span>
                                    </div>
                                    <form action="#" class="variation-form mb--20">
                                        <div class="product-size-variations d-flex align-items-center mb--15">
                                            <p class="variation-label">Size:</p>
                                            <div class="product-size-variation variation-wrapper">
                                                <div class="variation">
                                                    <a class="product-size-variation-btn selected"
                                                        data-bs-toggle="tooltip" data-bs-placement="top" title="S">
                                                        <span class="product-size-variation-label">S</span>
                                                    </a>
                                                </div>
                                                <div class="variation">
                                                    <a class="product-size-variation-btn" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="M">
                                                        <span class="product-size-variation-label">M</span>
                                                    </a>
                                                </div>
                                                <div class="variation">
                                                    <a class="product-size-variation-btn" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="L">
                                                        <span class="product-size-variation-label">L</span>
                                                    </a>
                                                </div>
                                                <div class="variation">
                                                    <a class="product-size-variation-btn" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="XL">
                                                        <span class="product-size-variation-label">XL</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="" class="reset_variations">Clear</a>
                                    </form>
                                    <div
                                        class="product-action d-flex flex-sm-row align-items-sm-center flex-column align-items-start mb--30">
                                        <div
                                            class="quantity-wrapper d-flex align-items-center mr--30 mr-xs--0 mb-xs--30">
                                            <label class="quantity-label" for="qty">Quantity:</label>
                                            <div class="quantity">
                                                <input type="number" class="quantity-input" name="qty" id="qty"
                                                    value="1" min="1">
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-shape-square btn-size-sm"
                                            onclick="window.location.href='cart.html'">
                                            Add To Cart
                                        </button>
                                    </div>
                                    <div class="product-footer-meta">
                                        <p><span>Category:</span>
                                            <a href="shop.html">Full Sweater</a>,
                                            <a href="shop.html">SweatShirt</a>,
                                            <a href="shop.html">Jacket</a>,
                                            <a href="shop.html">Blazer</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Qicuk View Modal End -->

        <!-- Global Overlay Start -->
        <div class="global-overlay"></div>
        <!-- Global Overlay End -->

        <!-- Scroll To Top Start -->
        <a class="scroll-to-top" href=""><i class="fa fa-angle-double-up"></i></a>
        <!-- Scroll To Top End -->
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