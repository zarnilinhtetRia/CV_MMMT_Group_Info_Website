<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>MMMT Group Co.,Ltd</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    {{-- <link href="assets/img/favicon.png" rel="icon">   --}}
    <link href="{{ asset('img/MMOC1.png') }}" rel="icon">

    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    {{-- <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> --}}
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    {{-- <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet"> --}}
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">

    {{-- <link href="assets/vendor/aos/aos.css" rel="stylesheet"> --}}
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">

    {{-- <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet"> --}}
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">

    {{-- <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet"> --}}
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">

    {{-- <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet"> --}}
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">


    <!-- Main CSS File -->
    {{-- <link href="assets/css/main.css" rel="stylesheet"> --}}
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">


    <!-- =======================================================
  * Template Name: Medicio
  * Template URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">



    <header id="header" class="header sticky-top">

        <div class="topbar d-flex align-items-center">
            <div class="container d-flex justify-content-center justify-content-md-between">
                <div class="d-none d-md-flex align-items-center">
                    <i class="bi bi-envelope-open me-1"></i>
                    Email - mmpmappspecial@gmail.com
                </div>
                <div class="d-flex align-items-center">
                    <i class="bi bi-phone me-1"></i> Call us now - +95 9769001781
                </div>
            </div>
        </div><!-- End Top Bar -->

        <div class="branding d-flex align-items-center">

            <div class="container position-relative d-flex align-items-center justify-content-end">
                {{-- <a href="{{ url('/') }}" class="logo d-flex align-items-center me-auto"> --}}
                <a href="" class=" d-flex align-items-center me-auto">
                    <img src="{{ asset('img/MMOC2.png') }}" alt="" style="width: 70px">
                    <!-- Uncomment the line below if you also wish to use a text logo -->
                    <!-- <h1 class="sitename">Medicio</h1>  -->
                </a>

                <nav id="navmenu" class="navmenu">
                    <ul>
                        <li><a href="{{ url('/') }}" class="active">Home</a></li>
                        <li><a href="#about">Group</a></li>
                        <li><a href="{{ url('our_awards') }}">Our Awards</a></li>

                        <li class="dropdown"><a href="#"><span>Products</span> <i
                                    class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="#">Dropdown 1</a></li>
                                <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i
                                            class="bi bi-chevron-down toggle-dropdown"></i></a>
                                    <ul>
                                        <li><a href="#">Deep Dropdown 1</a></li>
                                        <li><a href="#">Deep Dropdown 2</a></li>
                                        <li><a href="#">Deep Dropdown 3</a></li>
                                        <li><a href="#">Deep Dropdown 4</a></li>
                                        <li><a href="#">Deep Dropdown 5</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Dropdown 2</a></li>
                                <li><a href="#">Dropdown 3</a></li>
                                <li><a href="#">Dropdown 4</a></li>
                            </ul>
                        </li>
                        <li><a href="#doctors">Services</a></li>
                        <li><a href="#doctors">Markets</a></li>
                        <li><a href="#doctors">History</a></li>

                        <li><a href="{{ url('news') }}">News</a></li>


                        <li><a href="{{ url('contact') }}">Contact</a></li>
                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>

                {{-- <a class="cta-btn" href="index.html#appointment">Make an Appointment</a> --}}

            </div>

        </div>

    </header>
    <section class="page-title section light-background py-4 border-bottom"
        style="background: linear-gradient(rgba(0,0,0,0.45), rgba(0,0,0,0.45)), url('{{ asset('assets/img/hero-carousel/news.jpg') }}') center/cover no-repeat; min-height: 50vh; display: flex; align-items: center;">
        <div class="container d-flex align-items-center justify-content-between text-white">
            <div>
                <h1 class="h3 mb-1">News</h1>
                <p class="text-white-50 mb-0">Stay updated with the latest news and announcements</p>
            </div>
            <i class="fas fa-newspaper fa-2x text-warning"></i>
        </div>
    </section>
    <main class="main">
        <div class="container py-5">
            <!-- Search and Filter Section -->
            <div class="row mb-4">
                <div class="col-lg-8">
                    <form method="GET" action="{{ url('news_search') }}"
                        class="d-flex shadow-sm rounded overflow-hidden">
                        <input type="text" name="search" class="form-control border-0 py-2 px-4"
                            placeholder="Search news..." value="{{ request('search') }}">
                        <button class="btn  px-4" type="submit" style="background: #001776">
                            <i class="bi bi-search text-white"></i>
                        </button>
                    </form>
                </div>

                <div class="col-lg-4 text-end">
                    <div class="dropdown">
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="sortDropdown"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-sort-down"></i> Sort By
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end shadow-sm" aria-labelledby="sortDropdown">
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <i class="bi bi-calendar-event me-2 text-primary"></i>
                                    <span>Latest</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <i class="bi bi-calendar-event me-2 text-secondary"></i>
                                    <span>Oldest</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>

            <!-- News Grid -->
            <div class="row" id="newsGrid">
                @forelse($news as $item)
                    <div class="col-lg-4 col-md-6 mb-4 news-item" data-aos="fade-up"
                        data-aos-delay="{{ $loop->index * 100 }}">
                        <div class="card h-100 shadow-sm border-0 news-card">
                            <div class="position-relative">
                                @if ($item->image)
                                    <img src="{{ asset('img/' . $item->image) }}" class="card-img-top"
                                        alt="{{ $item->name }}" style="height: 200px; object-fit: cover;">
                                @else
                                    <div class="card-img-top bg-light d-flex align-items-center justify-content-center"
                                        style="height: 200px;">
                                        <i class="bi bi-newspaper text-muted" style="font-size: 3rem;"></i>
                                    </div>
                                @endif
                                <div class="position-absolute top-0 end-0 m-2">
                                    <span class="badge bg-warning ">{{ $item->created_at->format('M d') }}</span>
                                </div>
                            </div>
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title fw-bold  mb-2" style="color: #001776">{{ $item->name }}</h5>
                                <p class="card-text text-muted flex-grow-1">
                                    {{ Str::limit($item->description, 120) }}
                                </p>
                                <div class="mt-auto">
                                    <button class="btn btn-outline-primary btn-sm w-100 news-readmore-btn"
                                        type="button" data-bs-toggle="modal"
                                        data-bs-target="#newsModal{{ $item->id }}"
                                        style="--bs-btn-border-color: #00187B; --bs-btn-color: #00187B;">
                                        <i class="bi bi-eye"></i> Read More
                                    </button>
                                    <style>
                                        .news-readmore-btn:hover,
                                        .news-readmore-btn:focus {
                                            background-color: #00187B !important;
                                            color: #fff !important;
                                            border-color: #00187B !important;
                                        }
                                    </style>
                                </div>
                            </div>
                            <div class="card-footer bg-transparent border-0">
                                <small class="text-muted">
                                    <i class="bi bi-clock"></i> {{ $item->created_at->diffForHumans() }}
                                </small>
                            </div>
                        </div>
                    </div>

                    <!-- News Modal -->
                    <div class="modal fade" id="newsModal{{ $item->id }}" tabindex="-1"
                        aria-labelledby="newsModalLabel{{ $item->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header bg-primary text-white">
                                    <h5 class="modal-title" id="newsModalLabel{{ $item->id }}">
                                        {{ $item->name }}</h5>
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    @if ($item->image)
                                        <img src="{{ asset('img/' . $item->image) }}"
                                            class="img-fluid rounded mb-3 d-block mx-auto" alt="{{ $item->name }}"
                                            style="max-width: 550px; max-height: 300px; object-fit: cover;">
                                    @endif
                                    <div class="mb-3">
                                        <span class="badge bg-secondary me-2">
                                            <i class="bi bi-calendar-event"></i>
                                            {{ $item->created_at->format('F d, Y') }}
                                        </span>
                                        <span class="badge bg-info">
                                            <i class="bi bi-clock"></i> {{ $item->created_at->format('g:i A') }}
                                        </span>
                                    </div>
                                    <p class="text-muted">{{ $item->description }}</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">
                                        <i class="bi bi-share"></i> Share
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center py-5">
                        <div class="empty-state">
                            <i class="bi bi-newspaper text-muted" style="font-size: 4rem;"></i>
                            <h4 class="text-muted mt-3">No News Available</h4>
                            <p class="text-muted">Check back later for the latest updates and announcements.</p>
                        </div>
                    </div>
                @endforelse
            </div>

            <!-- Pagination -->
            @if ($news->hasPages())
                <div class="row mt-5">
                    <div class="col-12">
                        <nav aria-label="News pagination">
                            {{ $news->links() }}
                        </nav>
                    </div>
                </div>
            @endif


        </div>
    </main>

    @include('frontend.footer')

</html>
