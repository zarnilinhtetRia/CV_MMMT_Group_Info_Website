<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Post</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
</head>

<body class="d-flex flex-column min-vh-100">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3 sticky-top">
        <div class="container-fluid">
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
                        <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="{{ url('/userlogin') }}">Login</a>
                    </li> --}}
                </ul>
            </div>
        </div>
    </nav>

    <header class="py-3 bg-light border-bottom mb-4"
        style="background: url('{{ asset('img/images.jpg') }}') center/cover no-repeat;">
        <div class="container">
            <div class="text-center my-5">
                <h1 class="fw-bolder">Welcome to Blog Home!</h1>
                {{-- <p class="lead mb-0">A Bootstrap 5 starter layout for your next blog homepage</p> --}}
            </div>

            <form method="GET" action="" class="row g-2 justify-content-center">
                <div class="col-md-3 col-sm-6 position-relative my-3">
                    <input type="text" name="title" class="form-control" placeholder="Title ရှာရန်"
                        id="searchInput" value="{{ request('title') }}">
                    <div id="resultContainer" class="bg-white border rounded shadow-sm"
                        style="position: absolute; width: 90%; max-height: 150px; overflow-y: auto; display: none; z-index: 1000;">
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <select name="category" class="form-control">
                        <option value="">Category ရှာရန်</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ request('category') == $category->id ? 'selected' : '' }}>
                                {{ $category->category }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-3 col-sm-6 my-3">
                    <select name="type" class="form-control">
                        <option value="">Type ရှာရန်</option>
                        @foreach ($types as $type)
                            <option value="{{ $type->id }}" {{ request('type') == $type->id ? 'selected' : '' }}>
                                {{ $type->type }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-2 col-sm-6 my-3">
                    <button type="submit" class="btn btn-primary w-100">ရှာရန်</button>
                </div>
            </form>
        </div>
    </header>

    <div class="container flex-grow-1">
        <div class="row">
            @foreach ($blogs as $blog)
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <h2 class="card-title mb-0">{{ $blog->title }}</h2>
                                <span class="small text-muted">{{ $blog->created_at->format('d M Y') }}</span>
                            </div>
                            <div class="text-left my-3">
                                <span class="badge bg-secondary text-white p-2">{{ $blog->category->category }}</span>
                                <span class="badge bg-secondary text-white p-2">{{ $blog->type->type }}</span>
                            </div>

                            <p class="description mt-3">
                                <br>
                                <span style="font-size: 2em; font-weight: bold;" class="ms-3">
                                    {{ ucfirst(explode(' ', $blog->description)[0]) }}
                                </span>
                                {{ substr($blog->description, strlen(explode(' ', $blog->description)[0]), 200) }}...
                            </p>

                        </div>
                        <div class="card-footer d-flex justify-content-end">
                            <a class="btn btn-secondary" href="{{ route('blog_post.detail', $blog->id) }}">Read more
                                →</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <footer class="py-3 bg-dark mt-auto">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2025</p>
        </div>
    </footer>





    <script src="{{ asset('frontend/js/jquery.slim.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#searchInput').on('keyup', function() {
                let query = $(this).val();
                if (query.length > 0) {
                    $.ajax({
                        url: "{{ route('blog.search') }}",
                        type: "GET",
                        data: {
                            query: query
                        },
                        success: function(data) {
                            $('#resultContainer').html(data).show();
                        }
                    });
                } else {
                    $('#resultContainer').hide();
                }
            });

            $(document).on('click', '.list-group-item', function() {
                $('#searchInput').val($(this).text());
                $('#resultContainer').hide();
            });

            $(document).click(function(event) {
                if (!$(event.target).closest('#searchInput, #resultContainer').length) {
                    $('#resultContainer').hide();
                }
            });
        });
    </script>


</body>

</html>
