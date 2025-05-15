<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
</head>

<body class="d-flex flex-column min-vh-100" style="padding-top: 80px;">
    <div class="container-fluid fixed-top" style="background-color: #b49164;">
        <nav class="navbar navbar-expand-lg navbar-dark py-3">
            <a class="navbar-brand" href="{{ url('/') }}">Blog Post</a>
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
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="{{ url('/userlogin') }}">Login</a>
                    </li> --}}
                </ul>
            </div>
        </nav>
    </div>

    <div class="container mt-5" style="max-width: 600px;">
        <h5 class="text-center">Contact Us</h5>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('contact.submit') }}" method="POST" class="contact-form">
            @csrf
            <div class="card border shadow-lg p-4">

                <div class="form-group mb-3">
                    <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name"
                        required autofocus>
                </div>
                <div class="form-group mb-3">
                    <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email"
                        required autofocus>
                </div>
                <div class="form-group mb-3">
                    <label for="phone" class="form-label">Phone <span class="text-danger">*</span></label>
                    <input type="tel" class="form-control" id="phone" name="phone"
                        placeholder="Enter Phone Num" required autofocus>
                </div>
                <div class="form-group mb-3">
                    <label for="remark" class="form-label">Remark</label>
                    <textarea class="form-control" id="remark" name="remark" rows="4" required autofocus></textarea>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn text-white" style="  background-color: #029055;">Submit</button>
                </div>
            </div>
        </form>
    </div>

    <footer class="py-3 mt-auto" style="background-color: #b49164;">
        <div class="container py-3">
            <hr class="bg-light">
            <div class="text-center small">
                © 2025 by BlogPost. Powered and secured by <span class="text-white">SSE Web Solution</span>
            </div>
        </div>
    </footer>

    <script src="{{ asset('frontend/js/jquery.slim.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
