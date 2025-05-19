<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Post</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap4.5.2.min.css') }}">

    <style>
        .breaking-news {
            width: 100%;
            padding: 10px 15px;
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

        .title-height-limit {
            max-height: 80px;
            overflow: hidden;
            white-space: normal;
        }

        .searchbtn {
            background-color: #e7ddd2;
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

        .carousel-img {
            width: 100%;
            height: auto;
            max-height: 500px;
            object-fit: cover;
        }
    </style>
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

    {{-- Sub Nav --}}
    <div class="container-fluid py-2 my-3" style="color :#3a3028;">
        <div class="row align-items-center">

            <div class="col-12 col-md-3 text-md-left text-center order-md-1">
                <h1 class="mb-2 mb-md-0 font-weight-bold" style="font-size: 60px;">
                    BlogPost
                </h1>
            </div>

            <div
                class="col-12 col-xl-6  d-flex align-items-center justify-content-center d-none d-xl-flex order-md-2 mt-3 mt-md-0">
                <form method="GET" action="" class="row g-2 w-100 justify-content-center">
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
                                <option value="{{ $type->id }}"
                                    {{ request('type') == $type->id ? 'selected' : '' }}>
                                    {{ $type->type }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-2 col-sm-6 my-3">
                        <button type="submit" class="btn searchbtn w-100 text-dark">ရှာရန်</button>
                    </div>
                </form>
            </div>

            {{-- Optional Column --}}
            <div class="col-md-3 d-none d-xl-block order-md-3 text-right">
                <!-- Optional: Add something here like category filter, profile link, etc. -->
            </div>
        </div>
    </div>

    {{-- Carousel Section --}}
    <div class="container-fluid my-3">
        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">

            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

            <!-- Carousel Inner -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('img/isiam1.jpeg') }}" class="d-block w-100 carousel-img" alt="Slide 4">
                </div>
                <div class="carousel-item ">
                    <img src="{{ asset('img/isiam4.jpg') }}" class="d-block w-100 carousel-img" alt="Slide 1">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/isiam2.jpg') }}" class="d-block w-100 carousel-img" alt="Slide 2">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/isiam3.jpg') }}" class="d-block w-100 carousel-img" alt="Slide 3">
                </div>
            </div>

            <!-- Controls -->
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <!-- Breaking News Bar (Below Carousel) -->
    <div class="breaking-news-wrapper mt-3">
        <div class="breaking-news text-dark rounded shadow d-flex align-items-center px-4"
            style="height: 50px; overflow: hidden; background-color:#e7ddd2;">
            <strong class="me-3">Breaking News:</strong>
            <div class="ticker-container"
                style="flex: 1; overflow: hidden; position: relative; height: 20px; width: 100%;">
                <div id="ticker-text" class="ticker-text scroll" style="position: absolute; white-space: nowrap;">
                    @foreach ($breakingNews as $news)
                        <span class="ms-2"> {{ $news->title }} </span>
                    @endforeach
                </div>
            </div>
        </div>
    </div>



    @foreach ($categories as $index => $category)
        @php
            $categoryBlogs = $blogs->where('category_id', $category->id);
        @endphp


        @if ($categoryBlogs->count() > 0)
            <div class=" mt-5 py-3" style="background-color: {{ $index % 2 == 0 ? 'white' : '#f2f2f2' }};">
                <section class="container">
                    <h2 class="my-3 font-weight-bold posttitle">{{ $category->category }}</h2>

                    <div class="row">
                        @foreach ($blogs->where('category_id', $category->id) as $blog)
                            <div class="col-12 col-md-6 col-lg-4 d-flex mb-5">
                                <div class="card h-100 w-100 d-flex flex-column p-4">

                                    <a href="{{ route('blog_post.detail', $blog->id) }}"
                                        class="blog-link flex-grow-1 px-4">
                                        <h2 class="mb-0 w-100 overflow-hidden title-height-limit">{{ $blog->title }}
                                        </h2>
                                        <p class="description mt-3">
                                            <br>
                                            <span style="font-size: 1.5em; font-weight: bold;" class="ms-3">
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
        @endif
    @endforeach

    <footer class="py-3 mt-auto" style="background-color: #b49164;">
        <div class="container py-3">
            <hr class="bg-light">
            <div class="text-center small">
                © 2025 by BlogPost. Powered and secured by <span class="text-white">SSE Web Solution</span>
            </div>
        </div>
    </footer>

    <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap-4.5.2.bootstrap.min.js') }}"></script>


    {{-- For Text Scroll --}}
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const tickerText = document.getElementById("ticker-text");
            const spans = tickerText.querySelectorAll("span");
            const container = document.querySelector('.ticker-container');
            let index = 0;

            function startScroll() {
                // Hide all spans
                spans.forEach(span => span.classList.add('d-none'));

                // Show current span
                const currentSpan = spans[index];
                currentSpan.classList.remove('d-none');

                // Reset ticker position
                tickerText.style.transition = 'none';
                tickerText.style.transform = `translateX(${container.offsetWidth}px)`;

                void tickerText.offsetWidth; // Force reflow

                const textWidth = currentSpan.offsetWidth;
                const containerWidth = container.offsetWidth;
                const totalDistance = textWidth + containerWidth;
                const speed = 0.1; // px/ms
                const duration = totalDistance / speed;

                // Scroll
                tickerText.style.transition = `transform ${duration}ms linear`;
                tickerText.style.transform = `translateX(-${textWidth}px)`;

                // On scroll end, move to next
                setTimeout(() => {
                    setTimeout(() => {
                        index = (index + 1) % spans.length;
                        startScroll();
                    }, 500);
                }, duration);
            }

            startScroll();
        });
    </script>

    {{-- For Date --}}
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const options = {
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            };
            const englishDate = new Date().toLocaleDateString('en-US', options);
            const arabicDate = new Date().toLocaleDateString('ar-EG-u-ca-islamic', options);

            document.getElementById("date-display").innerText = `(${englishDate} / ${arabicDate})`;
        });
    </script>

    {{-- For Carousel --}}
    <script>
        $(document).ready(function() {
            $('#myCarousel').carousel({
                interval: 3000,
                ride: 'carousel'
            });
        });
    </script>


</body>

</html>
