<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Post</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">

    <style>
        .breaking-news {
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translate(-50%, 50%);
            z-index: 10;
            width: 100%;
            max-width: 90%;
            padding: 10px 15px;
        }

        .breaking-news-wrapper {
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translate(-50%, 50%);
            z-index: 10;
            width: 100%;

        }

        .header h1 {
            color: #2A53C1;
        }

        @keyframes scroll-pause-left {
            0% {
                transform: translateX(100%);
            }

            10% {
                transform: translateX(5%);
                /* Near the start (pause area) */
            }

            15% {
                transform: translateX(5%);
            }

            100% {
                transform: translateX(-100%);
            }
        }

        .searchbtn {
            background-color: #029055;
        }

        .posttitle {
            color: #b49164;
        }

        .blog-link {
            color: black;
            text-decoration: none;
        }

        .blog-link:hover {
            color: #029055;
            text-decoration: none;
        }
    </style>
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

    <div class="header text-md-left text-center py-4 bg-white">
        <div class="container-fluid pl-md-5 pl-3">
            <div class="row justify-content-start">
                <div class="d-flex flex-md-row flex-column align-items-md-center align-items-center w-100">

                    <!-- Headline (stacked center on small, row on md+) -->
                    <h1 class="mb-2 mb-md-0 font-weight-bold" style="font-size: 60px; color:#b49164;">
                        BlogPost
                    </h1>

                    <!-- Vertical Line (only on md+) -->
                    <div class="d-none d-md-block"
                        style="width: 4px; height: 65px; background-color:#b49164; margin: 0 15px;">
                    </div>

                    <!-- Subtitle -->
                    <p class="mb-0" style="font-size: 16px; color:#b49164;">
                        News & Opinion Blog
                    </p>
                </div>
            </div>
        </div>
    </div>

    <header class="py-3 bg-light border-bottom mb-4 d-flex align-items-start position-relative"
        style="background: url('{{ asset('img/blog_banner.jpg') }}') center/cover no-repeat;  min-height: 400px;">

        <div class="container">
            <div class="text-center pt-3 my-3">
                <h1 class="fw-bolder">Welcome to Blog Home!</h1>
            </div>

            <form method="GET" action="" class="row g-2 justify-content-center mt-5">
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
                    <button type="submit" class="btn searchbtn w-100 text-white">ရှာရန်</button>
                </div>
            </form>

            <div class="breaking-news-wrapper">
                <div class="breaking-news text-white rounded shadow d-flex align-items-center px-4"
                    style="height: 50px; overflow: hidden; background-color:#b49164;">

                    <strong class="me-3">Breaking News:</strong>

                    <div class="ticker-container"
                        style="flex: 1; overflow: hidden; position: relative; height: 30px; width: 100%;">
                        <div id="ticker-text" class="ticker-text scroll"
                            style="position: absolute; white-space: nowrap;">
                            <span class="ms-2">{{ $blogs[0]->title ?? '' }}</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>

    @foreach ($categories as $index => $category)
        <div class=" mt-5 py-3" style="background-color: {{ $index % 2 == 0 ? 'white' : '#f2f2f2' }};">
            <section class="container">
                <h2 class="my-3 font-weight-bold posttitle">{{ $category->category }}</h2>

                <div class="row">
                    @foreach ($blogs->where('category_id', $category->id) as $blog)
                        <div class="col-12 col-md-6 col-lg-4 d-flex mb-5">
                            <div class="card h-100 w-100 d-flex flex-column p-4">

                                <a href="{{ route('blog_post.detail', $blog->id) }}"
                                    class="blog-link flex-grow-1 px-4">
                                    <h2 class="mb-0">{{ $blog->title }}</h2>
                                    <p class="description mt-3">
                                        <br>
                                        <span style="font-size: 2em; font-weight: bold;" class="ms-3">
                                            {{ ucfirst(explode(' ', $blog->description)[0]) }}
                                        </span>
                                        {{ substr($blog->description, strlen(explode(' ', $blog->description)[0]), 100) }}....
                                    </p>
                                    <hr style="border-top: 1px solid #ccc; margin: 10px 0;">
                                </a>
                                <div class="d-flex justify-content-end">
                                    <span class="text-muted">
                                        💬 {{ $blog->comments_count }} comments
                                    </span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
        </div>
    @endforeach

    <footer class="py-3 mt-auto" style="background-color: #b49164;">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2025</p>
        </div>
    </footer>


    {{-- For Text Scroll --}}
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const titles = @json($blogs->pluck('title'));
            const tickerText = document.getElementById("ticker-text");
            const span = tickerText.querySelector("span");
            let index = 0;

            function startScroll() {
                // Set the new title
                span.innerHTML = `<strong>${titles[index]}</strong>`;

                const container = document.querySelector('.ticker-container');

                // Reset position
                tickerText.style.transition = 'none';
                tickerText.style.transform = `translateX(${container.offsetWidth}px)`; // Start from right

                // Force reflow to apply starting position
                void tickerText.offsetWidth;

                // Calculate distance to move (from right edge to completely left)
                const textWidth = tickerText.offsetWidth;
                const containerWidth = container.offsetWidth;
                const totalDistance = textWidth + containerWidth;

                // Speed in px/ms — adjust as needed
                const speed = 0.1; // lower = slower
                const duration = totalDistance / speed;

                // Start scrolling
                tickerText.style.transition = `transform ${duration}ms linear`;
                tickerText.style.transform = `translateX(-${textWidth}px)`;

                // After scrolling finishes
                setTimeout(() => {
                    // Wait 0.5 seconds
                    setTimeout(() => {
                        index = (index + 1) % titles.length;
                        startScroll();
                    }, 500);
                }, duration);
            }

            startScroll();
        });
    </script>

</body>

</html>
