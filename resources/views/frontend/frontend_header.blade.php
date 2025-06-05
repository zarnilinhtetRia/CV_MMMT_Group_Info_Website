<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MMOC</title>
    <link rel="shortcut icon" href="{{ asset('img/MMOC2.png') }}" type="image/x-icon">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .hero-section {
            background: #fff;
            min-height: 90vh;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
            padding: 5rem 0;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 45%;
            height: 100%;
            background: #f8f9fa;
            clip-path: polygon(15% 0, 100% 0, 100% 100%, 0% 100%);
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero-text-content {
            padding-right: 3rem;
        }

        .academic-badge {
            display: inline-flex;
            align-items: center;
            background: #074DAC;
            color: white;
            padding: 0.5rem 1.5rem;
            border-radius: 4px;
            font-size: 0.9rem;
            font-weight: 500;
            margin-bottom: 2rem;
            box-shadow: 0 2px 4px rgba(7, 77, 172, 0.1);
        }

        .academic-badge i {
            margin-right: 0.5rem;
            font-size: 1.1rem;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            line-height: 1.2;
            color: #1a1a1a;
            position: relative;
        }

        .hero-title span {
            color: #074DAC;
            position: relative;
        }

        .hero-title span::after {
            content: '';
            position: absolute;
            bottom: 5px;
            left: 0;
            width: 100%;
            height: 8px;
            background: rgba(7, 77, 172, 0.1);
            z-index: -1;
        }

        .hero-subtitle {
            font-size: 1.25rem;
            margin-bottom: 2.5rem;
            color: #4a4a4a;
            max-width: 600px;
            line-height: 1.8;
        }

        .academic-stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
            margin-bottom: 3rem;
            padding: 2rem;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
        }

        .stat-item {
            text-align: center;
            padding: 1rem;
            border-right: 1px solid #eee;
        }

        .stat-item:last-child {
            border-right: none;
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: #074DAC;
            margin-bottom: 0.5rem;
            font-family: 'Georgia', serif;
        }

        .stat-label {
            font-size: 0.9rem;
            color: #666;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .hero-buttons {
            display: flex;
            gap: 1rem;
        }

        .hero-btn {
            padding: 0.8rem 2rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
            border-radius: 4px;
            font-size: 0.9rem;
        }

        .hero-btn-primary {
            background-color: #074DAC;
            color: #fff;
            border: none;
        }

        .hero-btn-primary:hover {
            background-color: #053d8c;
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(7, 77, 172, 0.2);
        }

        .hero-btn-secondary {
            background-color: transparent;
            color: #074DAC;
            border: 2px solid #074DAC;
        }

        .hero-btn-secondary:hover {
            background-color: #074DAC;
            color: #fff;
            transform: translateY(-2px);
        }

        .academic-image {
            position: relative;
            z-index: 2;
            text-align: right;
        }

        .academic-image img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .academic-image::before {
            content: '';
            position: absolute;
            top: -20px;
            right: -20px;
            width: 100%;
            height: 100%;
            border: 2px solid #074DAC;
            border-radius: 8px;
            z-index: -1;
        }

        @media (max-width: 991.98px) {
            .hero-section::before {
                width: 100%;
                clip-path: polygon(0 0, 100% 0, 100% 100%, 0 85%);
            }

            .hero-text-content {
                padding-right: 0;
                text-align: center;
                margin-bottom: 3rem;
            }

            .hero-subtitle {
                margin-left: auto;
                margin-right: auto;
            }

            .academic-stats {
                grid-template-columns: 1fr;
                gap: 1rem;
            }

            .stat-item {
                border-right: none;
                border-bottom: 1px solid #eee;
                padding: 1rem 0;
            }

            .stat-item:last-child {
                border-bottom: none;
            }

            .hero-buttons {
                justify-content: center;
            }

            .academic-image {
                text-align: center;
            }

            .academic-image::before {
                display: none;
            }
        }

        /* Navigation Wrapper for Fixed Positioning */
        .navbar-wrapper {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1030;
            /* Ensure it stays on top */
        }

        /* Navigation Styles based on image - Within Wrapper */
        .navbar-top {
            background-color: #074DAC;
            /* Deep purple from image */
            padding: 0.3rem 0;
            /* Adjusted padding */
            color: white;
            font-size: 0.85rem;
            /* Adjusted font size */
            height: 50px;
            /* Estimate height based on image */
            display: flex;
            /* Use flexbox for alignment */
            align-items: center;
            margin-top: 0;
            /* Ensure no extra margin */
            width: 100%;
            /* Ensure it takes full width within wrapper */
            position: static;
            /* Remove fixed positioning from individual nav */
        }

        .navbar-top .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            /* Ensure container takes full width */
            padding: 0 15px;
            /* Add some horizontal padding */
        }

        .navbar-top .brand-section {
            display: flex;
            align-items: center;
        }

        /* Placeholder for 'W' logo - adjust styling as needed for an actual image */
        .navbar-top .brand-logo {
            font-size: 2rem;
            font-weight: bold;
            margin-right: 10px;
            line-height: 1;
        }

        .navbar-top .brand-text {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .navbar-top .brand-text h1,
        .navbar-top .brand-text p {
            margin: 0;
            line-height: 1.2;
        }

        .navbar-top .brand-text h1 {
            font-size: 1rem;
            /* Adjusted font size */
            font-weight: 600;
        }

        .navbar-top .brand-text p {
            font-size: 0.7rem;
            opacity: 0.9;
        }

        .navbar-top .department-links {
            display: flex;
            align-items: center;
            font-size: 0.8rem;
            /* Adjusted font size */
        }

        .navbar-top .department-links a {
            color: white;
            text-decoration: none;
            margin-left: 15px;
            transition: opacity 0.2s ease;
        }

        .navbar-top .department-links a:hover {
            opacity: 0.8;
            border-bottom: 2px solid white;
            padding-bottom: 2px;
        }

        .navbar-top .department-links span {
            margin: 0 5px;
            color: rgba(255, 255, 255, 0.5);
        }

        /* Search icon styling */
        .navbar-top .search-icon {
            color: white;
            font-size: 1rem;
            /* Adjusted font size */
            margin-left: 20px;
            cursor: pointer;
            border: 1px solid white;
            border-radius: 50%;
            padding: 4px;
            /* Adjusted padding */
            width: 28px;
            /* Adjusted size */
            height: 28px;
            /* Adjusted size */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .navbar-bottom {
            background-color: white;
            color: white;

            /* Lighter purple from image */
            padding: 0rem 0;
            /* Adjusted padding */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            height: 45px;
            /* Estimate height based on image */
            display: flex;
            /* Use flexbox for alignment */
            align-items: center;
            margin-top: 0;
            /* Ensure no extra margin */
            width: 100%;
            /* Ensure it takes full width within wrapper */
            position: static;
            /* Remove fixed positioning from individual nav */
        }

        .navbar-bottom .container {
            padding: 0 15px;
            /* Add some horizontal padding */
        }

        .navbar-bottom .navbar-nav .nav-item {
            display: flex;
            align-items: stretch;
            /* Stretch items to fill nav height */
        }

        .navbar-bottom .navbar-nav .nav-link {
            color: #1e67cc !important;
            font-weight: 500;
            padding: 0 1rem !important;
            /* Adjusted padding */
            transition: background-color 0.3s ease;
            border-radius: 0;
            text-transform: uppercase;
            /* Uppercase text */
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            /* Vertically center text */
        }

        .navbar-bottom .navbar-nav .nav-link:hover,
        .navbar-bottom .navbar-nav .nav-item.active .nav-link {
            background-color: #f9fbfc;
            border-bottom: 2px solid #074DAC;
            padding-bottom: 2px;
        }

        .navbar-bottom .dropdown-menu {
            background-color: #074DAC;
            /* Match bottom bar color */
            border: none;
            padding: 0;
            margin-top: 0;
            /* Remove default margin */
            border-radius: 0;
            /* Remove rounded corners */
        }

        .navbar-bottom .dropdown-item {
            color: white;
            transition: background-color 0.2s ease;
            text-transform: uppercase;
            font-size: 0.9rem;
            padding: 0.7rem 1rem;
        }

        .navbar-bottom .dropdown-item:hover {
            background-color: #397fe1;
            color: white;
            border-bottom: 2px solid white;
            padding-bottom: 2px;
        }

        .navbar-bottom .navbar-toggler {
            border: none;
            padding: 0.5rem;
        }

        .navbar-bottom .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.9%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }

        /* Ensure content is not hidden behind fixed navbars */
        body {
            padding-top: 95px;
            /* Adjusted to the exact combined height of navbars (50px + 45px) */
        }

        .feature-card {
            transition: transform 0.3s;
            border: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .feature-card:hover {
            transform: translateY(-5px);
        }

        .course-card {
            border: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .testimonial-card {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
        }
    </style>
</head>

<body>
    <!-- Navigation -->
    <div class="navbar-wrapper">
        <!-- Top Navigation Bar -->
        <nav class="navbar-top">
            <div class="container">
                <div class="brand-section">
                    <!-- Placeholder for 'W' logo - Replace with actual image if available -->
                    <div class="brand-logo">MMOC</div>
                    <div class="brand-text">
                        <p>UNIVERSITY of WASHINGTON</p>
                        <h1>Global Health E-Learning Program</h1>
                    </div>
                </div>
                <div class="department-links">
                    <a href="#">Dept. of Global Health</a>
                    <span>|</span>
                    <a href="#">School of Public Health</a>
                    <i class="fas fa-search search-icon"></i>
                </div>
            </div>
        </nav>

        <!-- Bottom Navigation Bar -->
        <nav class="navbar navbar-expand-lg navbar-bottom">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavBottom" aria-controls="navbarNavBottom" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavBottom">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ url('/') }}">
                                <i class="fas fa-home me-1"></i> HOME
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownCourses" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                COURSES
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownCourses">
                                <li><a class="dropdown-item" href="#">Course 1 Placeholder</a></li>
                                <li><a class="dropdown-item" href="#">Course 2 Placeholder</a></li>
                                <li><a class="dropdown-item" href="#">Course 3 Placeholder</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownTake" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                TAKE A COURSE
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownTake">
                                <li><a class="dropdown-item" href="#">Option A Placeholder</a></li>
                                <li><a class="dropdown-item" href="#">Option B Placeholder</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownSite" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                SITE COORDINATORS
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownSite">
                                <li><a class="dropdown-item" href="#">Coordinator 1 Placeholder</a></li>
                                <li><a class="dropdown-item" href="#">Coordinator 2 Placeholder</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownProjects"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                PROJECTS
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownProjects">
                                <li><a class="dropdown-item" href="#">Project X Placeholder</a></li>
                                <li><a class="dropdown-item" href="#">Project Y Placeholder</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownAbout"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                ABOUT US
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownAbout">
                                <li><a class="dropdown-item" href="#">Our Team Placeholder</a></li>
                                <li><a class="dropdown-item" href="#">Our Mission Placeholder</a></li>
                            </ul>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ url('/contact') }}">

                                Contact
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
