<div class="mobile-search">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-11">
                <label>What are you looking for?</label>
                <input type="text" placeholder="Search Products, Category, Brand">
            </div>
            <div class="col-1 d-flex justify-content-end align-items-center">
                <div class="search-cross-btn style-1" id="searchCloseBtn">
                    <i class="bi bi-x"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<header class="header-area style-1 navbar navbar-expand-lg fixed-top  ">
    <div class="header-logo">
        <a href="/">
            <img src="{{ asset('assets/images/bg/pegadaian.png') }}" alt="Logo">
        </a>
    </div>
    <div class="main-menu" id="mainMenu">
        <div class="mobile-logo-area d-lg-none d-flex justify-content-between align-items-center">
            <a href="/">
                <img src="{{ asset('assets/images/bg/header-logo.png') }}" alt="Mobile Logo">
            </a>
            <div class="menu-close-btn" id="menuCloseBtn">
                <i class="bi bi-x-lg"></i>
            </div>
        </div>
        <ul class="menu-list">
            <li><a class=" text-decoration-none" href="/">Home</a></li>
            <li><a class=" text-decoration-none" href="/about">About Us</a></li>
            <li><a class=" text-decoration-none" href="/how-works">How It Works</a></li>
            <li><a class=" text-decoration-none" href="/product">Browse Product</a></li>
            <li><a class=" text-decoration-none" href="/blog">News</a></li>
            <li><a class=" text-decoration-none" href="/faq">FAQ</a></li>
            <li><a class=" text-decoration-none" href="/chatify/103">Contact</a></li>
        </ul>
    </div>
    <div class="nav-right d-flex align-items-center">
        <div class="search-btn" id="searchBtn">
            <i class="bi bi-search"></i>
        </div>
        <a href="/dashboard" class="eg-btn btn-primary header-btn">My Account</a>
        <div class="mobile-menu-btn d-lg-none d-block" id="mobileMenuBtn">
            <i class="bx bx-menu"></i>
        </div>
    </div>
</header>