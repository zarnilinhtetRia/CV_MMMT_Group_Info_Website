@extends('layouts.frontend')
@section('content')
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
                                <option value="{{ $type->id }}" {{ request('type') == $type->id ? 'selected' : '' }}>
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
            <div class="ticker-container" style="flex: 1; overflow: hidden; position: relative; height: 20px; width: 100%;">
                <div id="ticker-text" class="ticker-text scroll" style="position: absolute; white-space: nowrap;">
                    @foreach ($breakingNews as $news)
                        <span class="ms-2"> {{ $news->title }} </span>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    {{-- Post Section --}}
    @php $sectionIndex = 0; @endphp
    @foreach ($categories as $category)
        @php
            $categoryBlogs = $blogs->where('category_id', $category->id);
        @endphp


        @if ($categoryBlogs->count() > 0)
            <div class=" mt-5 py-3" style="background-color: {{ $sectionIndex % 2 == 0 ? 'white' : '#f2f2f2' }};">
                <section class="container">
                    <h2 class="my-3 font-weight-bold posttitle">{{ $category->category }}</h2>

                    <div class="row">
                        @foreach ($blogs->where('category_id', $category->id) as $blog)
                            <div class="col-12 col-md-6 col-lg-4 d-flex mb-2">
                                <div class="card h-100 w-100 d-flex flex-column">
                                    @if ($blog->image)
                                        <img src="{{ asset('img/' . $blog->image) }}" class="card-img-top" alt="Blog Image"
                                            style="height: 200px;  width: 100%; object-fit: cover;">
                                    @else
                                        <img src="{{ asset('img/no-image.jpg') }}" class="card-img-top" alt="Blog Image"
                                            style="height: 200px;  width: 100%; object-fit: cover;">
                                    @endif

                                    <h2 class="mb-0 w-100 overflow-hidden title-height-limit blog-title px-4 mt-2">
                                        {{ $blog->title }}
                                    </h2>
                                    <p class="description px-4">
                                        <br>
                                        <span style="font-size: 1.5em; font-weight: bold;" class="ms-3">
                                            {{ ucfirst(explode(' ', $blog->description)[0]) }}
                                        </span>
                                        {{ substr($blog->description, strlen(explode(' ', $blog->description)[0]), 100) }}....
                                    </p>
                                    <hr style="border-top: 1px solid #ccc; margin: 10px 0;">

                                    <div class="d-flex justify-content-between p-2">
                                        <span class="text-muted">
                                            💬 {{ $blog->comments_count }} comments
                                        </span>
                                        <a href="{{ route('blog_post.detail', $blog->id) }}" class="btn morebtn">More
                                            Detail</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </section>
            </div>
            @php $sectionIndex++; @endphp
        @endif
    @endforeach
    {{-- Post Section End --}}
@endsection
