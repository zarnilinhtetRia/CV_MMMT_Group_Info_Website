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

    <style>
        .award-card {
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border-radius: 16px;
            overflow: hidden;
            background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
            border: 1px solid rgba(0, 0, 0, 0.08);
        }

        .award-card:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.12), 0 8px 16px rgba(0, 0, 0, 0.08);
            border-color: rgba(13, 110, 253, 0.2);
        }

        .award-card .award-image {
            transition: all 0.4s ease;
            position: relative;
        }

        .award-card:hover .award-image {
            transform: scale(1.05);
        }

        .award-image::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, rgba(13, 110, 253, 0.1), rgba(25, 135, 84, 0.1));
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .award-card:hover .award-image::after {
            opacity: 1;
        }

        .award-badge {
            position: absolute;
            top: 16px;
            right: 16px;
            background: #FFC107;
            color: white;
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 0.875rem;
            font-weight: 600;
            box-shadow: 0 4px 12px rgba(13, 110, 253, 0.3);
            z-index: 2;
        }

        .award-title {
            background: #00187C;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-weight: 700;
        }

        .award-description {
            color: #6c757d;
            line-height: 1.6;
            font-size: 1rem;
        }

        .award-meta {
            display: flex;
            align-items: center;
            gap: 16px;
            margin-top: 16px;
            padding-top: 16px;
            border-top: 1px solid rgba(0, 0, 0, 0.08);
        }

        .award-meta-item {
            display: flex;
            align-items: center;
            gap: 6px;
            color: #6c757d;
            font-size: 0.875rem;
        }

        .award-meta-item i {
            color: #0d6efd;
        }

        .section-header {
            background: #00187C;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .award-grid {
            position: relative;
        }

        .award-grid::before {
            content: '';
            position: absolute;
            top: -50px;
            left: -50px;
            right: -50px;
            bottom: -50px;
            background: radial-gradient(circle at 30% 20%, rgba(13, 110, 253, 0.03) 0%, transparent 50%),
                radial-gradient(circle at 70% 80%, rgba(25, 135, 84, 0.03) 0%, transparent 50%);
            pointer-events: none;
            z-index: -1;
        }
    </style>

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

    <main class="main">

        <!-- Page Title -->
        <section class="page-title section light-background py-4 border-bottom"
            style="background: linear-gradient(rgba(0,0,0,0.45), rgba(0,0,0,0.45)), url('{{ asset('assets/img/hero-carousel/clap.jpg') }}') center/cover no-repeat; min-height: 50vh; display: flex; align-items: center;">
            <div class="container d-flex align-items-center justify-content-between text-white">
                <div>
                    <h1 class="h3 mb-1">Our Awards</h1>
                    <p class="text-white-50 mb-0">Recognition of excellence and milestones we are proud of</p>
                </div>
                <i class="fas fa-trophy fa-2x text-warning"></i>
            </div>
        </section>
    </main>

    <!-- Alternate Image-Centric Awards Design -->
    <section class="section py-5 light-background border-top">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="badge bg-primary-subtle text-primary-emphasis rounded-pill px-3 py-2"><i
                        class="fas fa-trophy me-2"></i>Highlights</span>
                <h2 class="mt-3 mb-2 section-header">Awards Highlights</h2>
                <p class="text-secondary">A closer look at some of our most memorable awards with photos</p>
            </div>

            <div class="row g-4 award-grid" data-aos="fade-up">

                @foreach ($highlights as $award)
                    <div class="col-12">
                        <div class="card shadow-sm border-0 award-card" data-aos="fade-up"
                            data-aos-delay="{{ 100 + $loop->index * 100 }}">
                            <div class="row g-0 align-items-center">
                                <div class="col-12 col-md-4" data-aos="fade-right"
                                    data-aos-delay="{{ 100 + $loop->index * 100 }}">
                                    <div class="position-relative">
                                        <img src="{{ asset('img/' . $award->image) }}" alt="{{ $award->name }}"
                                            class="img-fluid w-100 award-image"
                                            style="object-fit: cover; max-height: 220px;">
                                        <div class="award-badge">
                                            <i class="fas fa-star me-1"></i>Award #{{ $loop->index + 1 }}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-8" data-aos="fade-left"
                                    data-aos-delay="{{ 150 + $loop->index * 100 }}">
                                    <div class="card-body p-4">
                                        <h4 class="card-title mb-3 award-title">{{ $award->name }}</h4>
                                        <p class="text-secondary mb-0 award-description">{{ $award->description }}</p>

                                        {{-- <div class="award-meta">
                                            <div class="award-meta-item">
                                                <i class="fas fa-calendar-alt"></i>
                                                <span>Received {{ now()->format('Y') }}</span>
                                            </div>
                                            <div class="award-meta-item">
                                                <i class="fas fa-award"></i>
                                                <span>Excellence</span>
                                            </div>
                                            <div class="award-meta-item">
                                                <i class="fas fa-heart"></i>
                                                <span>Recognition</span>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                @if ($highlights->isEmpty())
                    <div class="col-12">
                        <div class="alert alert-info mb-0 text-center py-5" role="alert">
                            <i class="fas fa-info-circle fa-2x mb-3 text-primary"></i>
                            <h5>No Awards Yet</h5>
                            <p class="mb-0">More awards will appear here soon. We're working hard to earn
                                recognition!</p>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>

    @include('frontend.footer')

</html>
