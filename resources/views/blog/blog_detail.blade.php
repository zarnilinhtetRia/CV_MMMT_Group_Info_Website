<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Post Detail</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
</head>

<body class="d-flex flex-column min-vh-100">
    <div class="container-fluid mt-5 px-0">
        <div class="card shadow-lg p-4 w-100 rounded-4">
            <div class="card-body">
                <h2 class="card-title text-center fw-bold">{{ $blog->title }}</h2>
                <p class="text-muted text-right">
                    <strong>Published on:</strong> {{ $blog->created_at->format('d M Y') }}
                </p>
                <div class="text-left mb-3">
                    <span class="badge bg-secondary text-white p-2">{{ $blog->category->category }}</span>
                    <span class="badge bg-secondary text-white p-2">{{ $blog->type->type }}</span>
                </div>
                <p class="description mt-3">
                    <br>
                    <span style="font-size: 2em; font-weight: bold;" class="ms-3">
                        {{ ucfirst(explode(' ', $blog->description)[0]) }}
                    </span>
                    {{ substr($blog->description, strlen(explode(' ', $blog->description)[0])) }}
                </p>

                <div class="d-flex justify-content-end mb-3">
                    <a href="{{ url('/blogs') }}" class="btn btn-outline-dark">Back</a>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.slim.min.js') }}"></script>
</body>

</html>
