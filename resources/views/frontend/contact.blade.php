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

    <style>
        /* New Contact Page Styles */
        .contact-hero {
            background: #ffffff;
            padding: 120px 0 80px;
            position: relative;
            overflow: hidden;
        }

        .contact-hero::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -20%;
            width: 80%;
            height: 200%;
            background: linear-gradient(45deg, rgba(7, 77, 172, 0.05) 0%, rgba(57, 127, 225, 0.1) 100%);
            transform: rotate(-15deg);
            z-index: 0;
        }

        .contact-hero::after {
            content: '';
            position: absolute;
            bottom: -50%;
            left: -20%;
            width: 80%;
            height: 200%;
            background: linear-gradient(45deg, rgba(7, 77, 172, 0.05) 0%, rgba(57, 127, 225, 0.1) 100%);
            transform: rotate(15deg);
            z-index: 0;
        }

        .contact-hero-content {
            position: relative;
            z-index: 1;
        }

        .contact-hero-text {
            max-width: 600px;
            position: relative;
        }

        .contact-hero h1 {
            font-size: 4rem;
            font-weight: 800;
            margin-bottom: 1.5rem;
            color: #1a1a1a;
            position: relative;
            line-height: 1.2;
        }

        .contact-hero h1 span {
            color: #074DAC;
            position: relative;
            display: inline-block;
        }

        .contact-hero h1 span::after {
            content: '';
            position: absolute;
            bottom: 5px;
            left: 0;
            width: 100%;
            height: 8px;
            background: rgba(7, 77, 172, 0.1);
            z-index: -1;
            transform: skewX(-15deg);
        }

        .contact-hero p {
            font-size: 1.25rem;
            color: #4a4a4a;
            margin-bottom: 2.5rem;
            line-height: 1.8;
            font-weight: 300;
        }

        .contact-hero-stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
            margin-top: 3rem;
        }

        .stat-item {
            text-align: center;
            padding: 2rem;
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .stat-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(7, 77, 172, 0.05) 0%, rgba(57, 127, 225, 0.1) 100%);
            opacity: 0;
            transition: all 0.3s ease;
        }

        .stat-item:hover {
            transform: translateY(-10px);
        }

        .stat-item:hover::before {
            opacity: 1;
        }

        .stat-number {
            font-size: 3rem;
            font-weight: 700;
            color: #074DAC;
            margin-bottom: 0.5rem;
            font-family: 'Georgia', serif;
            position: relative;
        }

        .stat-label {
            font-size: 1rem;
            color: #666;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-weight: 500;
        }

        .contact-hero-image {
            position: relative;
            z-index: 2;
            padding: 2rem;
        }

        .contact-hero-image img {
            max-width: 100%;
            height: auto;
            border-radius: 30px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .contact-hero-image:hover img {
            transform: scale(1.02);
        }

        .contact-hero-image::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 100%;
            height: 100%;
            border: 2px solid #074DAC;
            border-radius: 30px;
            transform: translate(20px, 20px);
            z-index: -1;
            transition: all 0.3s ease;
        }

        .contact-hero-image:hover::before {
            transform: translate(15px, 15px);
        }

        .contact-section {
            padding: 80px 0;
            background: #f8f9fa;
            position: relative;
            overflow: hidden;
        }

        .contact-card {
            background: white;
            border-radius: 30px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .contact-card:hover {
            /* transform: translateY(-10px); */
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.15);
        }

        .contact-form {
            padding: 50px;
        }

        .contact-form h2 {
            color: #074DAC;
            margin-bottom: 40px;
            font-weight: 700;
            font-size: 2.5rem;
            position: relative;
        }

        .contact-form h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 60px;
            height: 4px;
            background: #074DAC;
            border-radius: 2px;
        }

        .form-floating {
            margin-bottom: 1.5rem;
        }

        .form-floating>.form-control {
            padding: 1.5rem 1rem;
            height: calc(3.5rem + 2px);
            line-height: 1.25;
            border: 2px solid #eee;
            border-radius: 15px;
            transition: all 0.3s ease;
        }

        .form-floating>.form-control:focus {
            border-color: #074DAC;
            box-shadow: 0 0 0 0.25rem rgba(7, 77, 172, 0.1);
        }

        .form-floating>textarea.form-control {
            height: 150px;
        }

        .form-floating>label {
            padding: 1rem;
            color: #666;
        }

        .btn-submit {
            background: linear-gradient(135deg, #074DAC 0%, #397fe1 100%);
            color: white;
            padding: 1.2rem 2.5rem;
            border: none;
            border-radius: 15px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            width: 100%;
            position: relative;
            overflow: hidden;
        }

        .btn-submit::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: all 0.5s ease;
        }

        .btn-submit:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(7, 77, 172, 0.2);
        }

        .btn-submit:hover::before {
            left: 100%;
        }

        .contact-info {
            background: linear-gradient(135deg, #074DAC 0%, #397fe1 100%);
            color: white;
            padding: 50px;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .contact-info::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%23ffffff' fill-opacity='0.1' fill-rule='evenodd'/%3E%3C/svg%3E");
            opacity: 0.1;
        }

        .contact-info h3 {
            font-size: 2rem;
            margin-bottom: 40px;
            font-weight: 700;
            position: relative;
        }

        .contact-info h3::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 60px;
            height: 4px;
            background: white;
            border-radius: 2px;
        }

        .contact-info-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 30px;
            transition: all 0.3s ease;
            position: relative;
            z-index: 1;
        }

        .contact-info-item:hover {
            transform: translateX(10px);
        }

        .contact-info-item i {
            font-size: 24px;
            margin-right: 20px;
            color: rgba(255, 255, 255, 0.9);
            transition: all 0.3s ease;
        }

        .contact-info-item:hover i {
            transform: scale(1.2);
        }

        .contact-info-item p {
            margin: 0;
            opacity: 0.9;
            line-height: 1.6;
        }

        .contact-info-item strong {
            display: block;
            margin-bottom: 5px;
            font-weight: 600;
            font-size: 1.1rem;
        }

        .social-links {
            margin-top: 40px;
            display: flex;
            gap: 15px;
        }

        .social-links a {
            color: white;
            font-size: 20px;
            width: 45px;
            height: 45px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            background: white;
            color: #00187C;
            transform: translateY(-5px);
        }

        body {
            /* padding-top: 95px; */
        }

        @media (max-width: 991.98px) {
            .contact-hero {
                padding: 100px 0 60px;
            }

            .contact-hero h1 {
                font-size: 3rem;
            }

            .contact-hero-text {
                text-align: center;
                margin-bottom: 3rem;
            }

            .contact-hero-stats {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }

            .stat-item {
                padding: 1.5rem;
            }

            .contact-hero-image {
                text-align: center;
                padding: 1rem;
            }

            .contact-hero-image::before {
                display: none;
            }

            .contact-form {
                padding: 30px;
            }

            .contact-info {
                margin-top: 30px;
                padding: 30px;
            }
        }

        /* Success Message Styles */
        .alert-success {
            background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
            color: white;
            border: none;
            border-radius: 15px;
            padding: 1.5rem;
            margin: 2rem auto;
            max-width: 800px;
            box-shadow: 0 10px 30px rgba(40, 167, 69, 0.2);
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: center;
            animation: slideIn 0.5s ease-out;
        }

        .alert-success::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%23ffffff' fill-opacity='0.1' fill-rule='evenodd'/%3E%3C/svg%3E");
            opacity: 0.1;
        }

        .alert-success i {
            font-size: 2rem;
            margin-right: 1rem;
            color: rgba(255, 255, 255, 0.9);
        }

        .alert-success .message {
            font-size: 1.1rem;
            font-weight: 500;
            margin: 0;
            position: relative;
            z-index: 1;
        }

        @keyframes slideIn {
            from {
                transform: translateY(-20px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @media (max-width: 768px) {
            .alert-success {
                margin: 1rem;
                padding: 1rem;
            }

            .alert-success i {
                font-size: 1.5rem;
            }

            .alert-success .message {
                font-size: 1rem;
            }
        }
    </style>
</head>

<body>


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
                        <li><a href="#services">Our Award</a></li>

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

                        <li><a href="#doctors">News</a></li>

                        <li><a href="{{ url('contact') }}">Contact</a></li>
                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>

                {{-- <a class="cta-btn" href="index.html#appointment">Make an Appointment</a> --}}

            </div>

        </div>

    </header>
    <!-- Contact Section -->

    <section class="contact-section">
        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                <i class="fas fa-check-circle"></i>
                <p class="message">{{ session('success') }}</p>
            </div>
        @endif
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="contact-card">
                        <div class="contact-form">
                            <h2>Send us a Message</h2>
                            <form action="{{ route('contact.submit') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="firstName" name="name"
                                                placeholder="Name" required>
                                            <label for="firstName">Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="lastName" name="email"
                                                placeholder="Email Address" required>
                                            <label for="lastName">Email Address</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="phone" name="phone"
                                                placeholder="Phone Number" required>
                                            <label for="phone">Phone Number</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="subject" name="subject"
                                                placeholder="Subject" required>
                                            <label for="subject">Subject</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-floating">
                                    <textarea class="form-control" id="remark" name="remark" placeholder="Your Message" required></textarea>
                                    <label for="remark">Your Message</label>
                                </div>

                                <button type="submit" class="btn btn-submit">
                                    <i class="fas fa-paper-plane me-2"></i>Send Message
                                </button>
                            </form>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-info">
                        <h3 class="text-white">Contact Information</h3>
                        <div class="contact-info-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <div>
                                <strong>Our Location</strong>
                                <p>1959 NE Pacific Street<br>Seattle, WA 98195</p>
                            </div>
                        </div>
                        <div class="contact-info-item">
                            <i class="fas fa-phone"></i>
                            <div>
                                <strong>Phone Number</strong>
                                <p>+1 (206) 543-2100</p>
                            </div>
                        </div>
                        <div class="contact-info-item">
                            <i class="fas fa-envelope"></i>
                            <div>
                                <strong>Email Address</strong>
                                <p>contact@mmoc.edu</p>
                            </div>
                        </div>
                        <div class="contact-info-item">
                            <i class="fas fa-clock"></i>
                            <div>
                                <strong>Working Hours</strong>
                                <p>Monday - Friday<br>9:00 AM - 5:00 PM PST</p>
                            </div>
                        </div>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('frontend.footer')

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
