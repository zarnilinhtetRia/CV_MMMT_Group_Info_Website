<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Post</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap4.5.2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}">

</head>

<body class="d-flex flex-column min-vh-100" style="padding-top: 80px;">
    {{-- Nav Bar --}}
    <div class="container-fluid fixed-top bg-dark">
        <nav class="navbar navbar-expand-lg navbar-dark py-3">
            <a class="navbar-brand" href="{{ url('/') }}">
                <span>Logo</span>
                <small class="text-white ml-2" id="date-display"></small>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">All News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/userlogin') }}">Login</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>


    @yield('content')

    <footer class="py-3 mt-auto" style="background-color:#423a31;">
        <div class="container py-3">
            <hr class="bg-light">
            <div class="text-center small" style="color :#e1dad1;">
                © 2025 by BlogPost. Powered and secured by <span class="text-white">SSE Web Solution</span>
            </div>
        </div>
    </footer>

    <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap-4.5.2.bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/custom.js') }}"></script>
</body>

</html>
