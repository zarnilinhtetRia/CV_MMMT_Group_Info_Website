@extends('layouts.frontend')
@section('content')
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
                        @foreach ($categoryBlogs as $blog)
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
                                        <a href="{{ route('blog_post.detail', $blog->id) }}" class="btn morebtn">More</a>
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
