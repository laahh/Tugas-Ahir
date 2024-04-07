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

    <div class="faq-section pt-120 pb-120">
        <div class="container">
            <div class="row d-flex justify-content-center gy-5">
                <div class="col-lg-4 col-md-12 order-lg-1 order-2">
                    <div class="faq-form-area wow fadeInDown" data-wow-duration="1.5s" data-wow-delay=".2s">
                        <h5>Ask Any Question?</h5>
                        <p class="para">Your email address will not be published. Required fields are marked *</p>
                        <form class="faq-form">
                            <div class="form-inner">
                                <label>Your Full Name *</label>
                                <input type="text" placeholder="Enter your name" />
                            </div>
                            <div class="form-inner">
                                <label>Your Email *</label>
                                <input type="text" placeholder="Enter your email" />
                            </div>
                            <div class="form-inner">
                                <label>Subject *</label>
                                <input type="text" placeholder="Subject" />
                            </div>
                            <div class="form-inner">
                                <label>Your Message *</label>
                                <textarea placeholder="Your message" rows="5"></textarea>
                            </div>
                            <a href="#" class="eg-btn btn--primary btn--md mt-1">Send Now</a>
                        </form>
                    </div>
                </div>

                <div class="col-lg-8 col-md-12 text-center order-lg-2 order-1">
                    <h2 class="section-title3">General FAQ’s</h2>
                    <div class="faq-wrap wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".2s">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Where on your site can I access AI for Blog Ideas/Titles?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>
                                            Morbi aliquam quis quam in luctus. Nullam tincidunt pulvinar imperdiet. Sed
                                            varius, diam vitae posuere semper, libero ex hendrerit nunc, ac sagittis
                                            eros metus ut diam. Donec a nibh in libero maximus vehicula. Etiam sit amet
                                            condimentum erat. Pellentesque ultrices sagittis turpis, quis tempus ante
                                            viverra et.Morbi aliquam quis quam in luctus. Nullam tincidunt pulvinar
                                            imperdiet. Sed varius, diam vitae posuere semper, tincidunt pulvinar
                                            imperdiet. Sed varius, diam vitae posuere semper.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        What if I don't have a company name?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>
                                            Morbi aliquam quis quam in luctus. Nullam tincidunt pulvinar imperdiet. Sed
                                            varius, diam vitae posuere semper, libero ex hendrerit nunc, ac sagittis
                                            eros metus ut diam. Donec a nibh in libero maximus vehicula. Etiam sit amet
                                            condimentum erat. Pellentesque ultrices sagittis turpis, quis tempus ante
                                            viverra et.Morbi aliquam quis quam in luctus. Nullam tincidunt pulvinar
                                            imperdiet. Sed varius, diam vitae posuere semper, tincidunt pulvinar
                                            imperdiet. Sed varius, diam vitae posuere semper.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        What is the best way to get my blog title noticed?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>
                                            Morbi aliquam quis quam in luctus. Nullam tincidunt pulvinar imperdiet. Sed
                                            varius, diam vitae posuere semper, libero ex hendrerit nunc, ac sagittis
                                            eros metus ut diam. Donec a nibh in libero maximus vehicula. Etiam sit amet
                                            condimentum erat. Pellentesque ultrices sagittis turpis, quis tempus ante
                                            viverra et.Morbi aliquam quis quam in luctus. Nullam tincidunt pulvinar
                                            imperdiet. Sed varius, diam vitae posuere semper, tincidunt pulvinar
                                            imperdiet. Sed varius, diam vitae posuere semper.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        Okay, I'm afraid to ask but... what is SEO?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Morbi aliquam quis quam in luctus. Nullam tincidunt pulvinar imperdiet. Sed
                                        varius, diam vitae posuere semper, libero ex hendrerit nunc, ac sagittis eros
                                        metus ut diam. Donec a nibh in libero maximus vehicula. Etiam sit amet
                                        condimentum erat. Pellentesque ultrices sagittis turpis, quis tempus ante
                                        viverra et.Morbi aliquam quis quam in luctus. Nullam tincidunt pulvinar
                                        imperdiet. Sed varius, diam vitae posuere semper, tincidunt pulvinar imperdiet.
                                        Sed varius, diam vitae posuere semper.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="false"
                                        aria-controls="collapseFive">
                                        Why are you getting rejected shares?
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>
                                            Morbi aliquam quis quam in luctus. Nullam tincidunt pulvinar imperdiet. Sed
                                            varius, diam vitae posuere semper, libero ex hendrerit nunc, ac sagittis
                                            eros metus ut diam. Donec a nibh in libero maximus vehicula. Etiam sit amet
                                            condimentum erat. Pellentesque ultrices sagittis turpis, quis tempus ante
                                            viverra et.Morbi aliquam quis quam in luctus. Nullam tincidunt pulvinar
                                            imperdiet. Sed varius, diam vitae posuere semper, tincidunt pulvinar
                                            imperdiet. Sed varius, diam vitae posuere semper.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        Which miners are supported?
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>
                                            Morbi aliquam quis quam in luctus. Nullam tincidunt pulvinar imperdiet. Sed
                                            varius, diam vitae posuere semper, libero ex hendrerit nunc, ac sagittis
                                            eros metus ut diam. Donec a nibh in libero maximus vehicula. Etiam sit amet
                                            condimentum erat. Pellentesque ultrices sagittis turpis, quis tempus ante
                                            viverra et.Morbi aliquam quis quam in luctus. Nullam tincidunt pulvinar
                                            imperdiet. Sed varius, diam vitae posuere semper, tincidunt pulvinar
                                            imperdiet. Sed varius, diam vitae posuere semper.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSeven">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSeven" aria-expanded="false"
                                        aria-controls="collapseSeven">
                                        What happens when there are no orders?
                                    </button>
                                </h2>
                                <div id="collapseSeven" class="accordion-collapse collapse"
                                    aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>
                                            Morbi aliquam quis quam in luctus. Nullam tincidunt pulvinar imperdiet. Sed
                                            varius, diam vitae posuere semper, libero ex hendrerit nunc, ac sagittis
                                            eros metus ut diam. Donec a nibh in libero maximus vehicula. Etiam sit amet
                                            condimentum erat. Pellentesque ultrices sagittis turpis, quis tempus ante
                                            viverra et.Morbi aliquam quis quam in luctus. Nullam tincidunt pulvinar
                                            imperdiet. Sed varius, diam vitae posuere semper, tincidunt pulvinar
                                            imperdiet. Sed varius, diam vitae posuere semper.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


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