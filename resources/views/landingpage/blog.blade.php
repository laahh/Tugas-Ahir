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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet">



</head>

<body>
    @include('landingpage.components.topbar')
    @include('landingpage.components.navbar')
    @include('landingpage.components.head', ['pageTitle' => 'About'])

    <div class="recent-news-section pt-120 pb-120">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-sm-12 col-md-10 col-lg-8 col-xl-6">

                </div>
            </div>
            <div class="row d-flex justify-content-center g-4">

                @foreach($blogs as $data)


                <div key="1" class="col-xl-4 col-lg-6 col-md-6 col-sm-10">
                    <div class="single-blog-style3 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <div class="blog-img">

                            <a class="blog-date text-decoration-none"><i
                                    class="bi bi-calendar-check text-decoration-none"></i> {{
                                Carbon\Carbon::parse($data->created_at)->format('M d, Y') }}</a>
                            <img src="{{ asset('storage/' . $data->gambar) }}" alt="Image Description">

                        </div>
                        <div class="blog-content">
                            <h5>
                                <a href="blog-detail/{{ $data->id }}" class="text-decoration-none">{{ $data->judul
                                    }}</a>
                            </h5>
                            <div class="blog-meta">
                                <div class="author">
                                    <img alt="image" src="{{ asset('assets/images/bg/upcoming-author1.png') }}" />
                                    <!-- Changed Link to a standard HTML <a> tag -->
                                    <a href="/blog-details" class="author-name text-decoration-none">Admin</a>
                                </div>
                                <div class="comment">
                                    <img alt="image" src="{{ asset('assets/images/icons/comment-icon.svg') }}" />
                                    <!-- Changed Link to a standard HTML <a> tag -->
                                    <a href="#" class="comment text-decoration-none">05 Comments</a>
                                </div>
                            </div>
                            <p class="para">Explore on the world's best & largest Bidding market place with our Bidding
                                products.</p>
                        </div>
                    </div>
                </div>
                @endforeach

                <div class="row mt-5">
                    <nav class="pagination-wrap">
                        <ul class="pagination d-flex justify-content-center gap-md-3 gap-2">
                            {{-- Check if previous page is available --}}
                            @if ($blogs->onFirstPage())
                            <li class="page-item disabled">
                                <span class="page-link" tabIndex="-1">Prev</span>
                            </li>
                            @else
                            <li class="page-item">
                                <a class="page-link" href="{{ $blogs->previousPageUrl() }}" tabIndex="-1">Prev</a>
                            </li>
                            @endif

                            {{-- Pagination Elements Here --}}
                            @foreach ($blogs->links()->elements[0] as $page => $url)
                            @if ($page == $blogs->currentPage())
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
                            @if ($blogs->hasMorePages())
                            <li class="page-item">
                                <a class="page-link" href="{{ $blogs->nextPageUrl() }}">Next</a>
                            </li>
                            @else
                            <li class="page-item disabled">
                                <a class="page-link">Next</a>
                            </li>
                            @endif
                        </ul>
                    </nav>
                </div>






                {{-- <div key="1" class="col-xl-4 col-lg-6 col-md-6 col-sm-10">
                    <div class="single-blog-style3 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <div class="blog-img">
                            <!-- Removed the nested <a> tag and replaced {date} with an example date "Jan 01, 2024" -->
                            <a class="blog-date text-decoration-none"><i
                                    class="bi bi-calendar-check text-decoration-none"></i>Jan 01,
                                2024</a>
                            <img alt="image" src="assets/images/blog/blogstyle11.png" />
                        </div>
                        <div class="blog-content">
                            <h5>
                                <a href="blog-details " class="text-decoration-none">Still Has in Advertising Creative
                                    Digital
                                    Reviews</a>
                            </h5>
                            <div class="blog-meta">
                                <div class="author">
                                    <img alt="image" src="assets/images/bg/upcoming-author1.png" />
                                    <!-- Changed Link to a standard HTML <a> tag -->
                                    <a href="/blog-details" class="author-name text-decoration-none">Johan Martin</a>
                                </div>
                                <div class="comment">
                                    <img alt="image" src="assets/images/icons/comment-icon.svg" />
                                    <!-- Changed Link to a standard HTML <a> tag -->
                                    <a href="#" class="comment text-decoration-none">05 Comments</a>
                                </div>
                            </div>
                            <p class="para">Explore on the world's best & largest Bidding market place with our Bidding
                                products.</p>
                        </div>
                    </div>
                </div>

                <div key="1" class="col-xl-4 col-lg-6 col-md-6 col-sm-10">
                    <div class="single-blog-style3 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <div class="blog-img">
                            <!-- Removed the nested <a> tag and replaced {date} with an example date "Jan 01, 2024" -->
                            <a class="blog-date text-decoration-none"><i class="bi bi-calendar-check "></i>Jan 01,
                                2024</a>
                            <img alt="image" src="assets/images/blog/blogstyle11.png" />
                        </div>
                        <div class="blog-content text-decoration-none">
                            <h5>
                                <a href="blog-details " class="text-decoration-none">Still Has in Advertising Creative
                                    Digital
                                    Reviews</a>
                            </h5>
                            <div class="blog-meta">
                                <div class="author">
                                    <img alt="image" src="assets/images/bg/upcoming-author1.png" />
                                    <!-- Changed Link to a standard HTML <a> tag -->
                                    <a href="/blog-details" class="author-name text-decoration-none">Johan Martin</a>
                                </div>
                                <div class="comment">
                                    <img alt="image" src="assets/images/icons/comment-icon.svg" />
                                    <!-- Changed Link to a standard HTML <a> tag -->
                                    <a href="#" class="comment text-decoration-none">05 Comments</a>
                                </div>
                            </div>
                            <p class="para">Explore on the world's best & largest Bidding market place with our Bidding
                                products.</p>
                        </div>
                    </div>
                </div>

                <div key="1" class="col-xl-4 col-lg-6 col-md-6 col-sm-10">
                    <div class="single-blog-style3 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <div class="blog-img">
                            <!-- Removed the nested <a> tag and replaced {date} with an example date "Jan 01, 2024" -->
                            <a class="blog-date text-decoration-none"><i class="bi bi-calendar-check "></i>Jan 01,
                                2024</a>
                            <img alt="image" src="assets/images/blog/blogstyle11.png" />
                        </div>
                        <div class="blog-content text-decoration-none">
                            <h5>
                                <a href="blog-details " class="text-decoration-none">Still Has in Advertising Creative
                                    Digital
                                    Reviews</a>
                            </h5>
                            <div class="blog-meta">
                                <div class="author">
                                    <img alt="image" src="assets/images/bg/upcoming-author1.png" />
                                    <!-- Changed Link to a standard HTML <a> tag -->
                                    <a href="/blog-details" class="author-name text-decoration-none">Johan Martin</a>
                                </div>
                                <div class="comment">
                                    <img alt="image" src="assets/images/icons/comment-icon.svg" />
                                    <!-- Changed Link to a standard HTML <a> tag -->
                                    <a href="#" class="comment text-decoration-none">05 Comments</a>
                                </div>
                            </div>
                            <p class="para">Explore on the world's best & largest Bidding market place with our Bidding
                                products.</p>
                        </div>
                    </div>
                </div>

                <div key="1" class="col-xl-4 col-lg-6 col-md-6 col-sm-10">
                    <div class="single-blog-style3 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <div class="blog-img">
                            <!-- Removed the nested <a> tag and replaced {date} with an example date "Jan 01, 2024" -->
                            <a class="blog-date text-decoration-none"><i class="bi bi-calendar-check "></i>Jan 01,
                                2024</a>
                            <img alt="image" src="assets/images/blog/blogstyle11.png" />
                        </div>
                        <div class="blog-content text-decoration-none">
                            <h5>
                                <a href="blog-details " class="text-decoration-none">Still Has in Advertising Creative
                                    Digital
                                    Reviews</a>
                            </h5>
                            <div class="blog-meta">
                                <div class="author">
                                    <img alt="image" src="assets/images/bg/upcoming-author1.png" />
                                    <!-- Changed Link to a standard HTML <a> tag -->
                                    <a href="/blog-details" class="author-name text-decoration-none">Johan Martin</a>
                                </div>
                                <div class="comment">
                                    <img alt="image" src="assets/images/icons/comment-icon.svg" />
                                    <!-- Changed Link to a standard HTML <a> tag -->
                                    <a href="#" class="comment text-decoration-none">05 Comments</a>
                                </div>
                            </div>
                            <p class="para">Explore on the world's best & largest Bidding market place with our Bidding
                                products.</p>
                        </div>
                    </div>
                </div>


                <div key="1" class="col-xl-4 col-lg-6 col-md-6 col-sm-10">
                    <div class="single-blog-style3 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <div class="blog-img">
                            <!-- Removed the nested <a> tag and replaced {date} with an example date "Jan 01, 2024" -->
                            <a class="blog-date text-decoration-none"><i class="bi bi-calendar-check "></i>Jan 01,
                                2024</a>
                            <img alt="image" src="assets/images/blog/blogstyle11.png" />
                        </div>
                        <div class="blog-content text-decoration-none">
                            <h5>
                                <a href="blog-details " class="text-decoration-none">Still Has in Advertising Creative
                                    Digital
                                    Reviews</a>
                            </h5>
                            <div class="blog-meta">
                                <div class="author">
                                    <img alt="image" src="assets/images/bg/upcoming-author1.png" />
                                    <!-- Changed Link to a standard HTML <a> tag -->
                                    <a href="/blog-details" class="author-name text-decoration-none">Johan Martin</a>
                                </div>
                                <div class="comment">
                                    <img alt="image" src="assets/images/icons/comment-icon.svg" />
                                    <!-- Changed Link to a standard HTML <a> tag -->
                                    <a href="#" class="comment text-decoration-none">05 Comments</a>
                                </div>
                            </div>
                            <p class="para">Explore on the world's best & largest Bidding market place with our Bidding
                                products.</p>
                        </div>
                    </div>
                </div> --}}


            </div>
        </div>
    </div>


    @include('landingpage.components.CounterUp')
    @include('landingpage.components.footer')



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>