<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Post Detail</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <style>
        .description::first-line {
            font-weight: bold;
            font-size: 2em;
        }

        .categorybtn {
            background-color: #029055;
            color: white;
        }

        .categorybtn:hover {
            background-color: white;
            border-color: #029055;
            color: #029055;
        }

        .typebtn {
            border-color: #029055;
            color: #029055;
        }

        .typebtn:hover {
            background-color: #029055;
            color: white;
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">
    {{-- Blog Post Section --}}
    <div class="container mt-5 px-0">
        <div class="d-flex justify-content-center">
            <div class="card shadow p-4 w-75 rounded-4 border" style="border-color: #dee2e6;">
                <div class="card-body">
                    <p class="text-muted text-end mb-2" style="text-align: right;">
                        {{ $blog->created_at->format('M d, Y') }}
                    </p>

                    <h3 class="card-title fw-bold" style="font-weight: bolder; font-size: 3rem; text-align: left;">
                        {{ $blog->title }}
                    </h3>
                    <h2 class="card-title fw-bold" style="font-weight: bolder; font-size: 2rem; text-align: left;">
                        {{ $blog->sub_title }}
                    </h2>
                    <p class="description mt-3">
                        <br>
                        <span style="font-size: 1em; font-weight: bold;" class="ms-3">
                            {!! ucfirst(substr($blog->description, 0, strpos($blog->description, '.'))) . '.' !!}
                        </span>
                        <br><br>
                        <span>
                            {!! substr($blog->description, strpos($blog->description, '.') + 1) !!}
                        </span>
                    </p>

                    {{-- <div class="text-start mb-3">
                        <span class="btn categorybtn my-2">{{ $blog->category->category }}</span>
                        <span class="btn typebtn my2">{{ $blog->type->type }}</span>
                    </div> --}}

                    <div class="d-flex justify-content-end mb-3">
                        <a href="{{ url('/blogs') }}" class="btn btn-outline-dark">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.slim.min.js') }}"></script>
</body>

</html>
