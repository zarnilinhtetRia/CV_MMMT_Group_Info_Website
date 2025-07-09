@include('frontend.frontend_header')
<style>
    body {
        background-color: white;
    }

    .title {
        font-size: 2.5rem;
        font-weight: 700;
        text-shadow: 2px 2px #ccc;
    }

    .course-video {
        width: 100%;
        max-height: 350px;
        object-fit: cover;
        border-radius: 5px;
    }

    .info-box {
        background-color: white;
        border-left: 6px solid #074DAB;
        padding: 1rem;
    }

    .info-box h5 {
        color: #074DAB;
        font-weight: bold;
    }

    .btn-purple {
        background-color: #074DAB;
        color: white;
        border: none;
    }

    .btn-purple:hover {
        background-color: #074DAB;
    }
</style>

<body>

    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4">
                <h1 class="title mb-3">{{ $blog_detail->title }}</h1>
                <img class="course-video mt-3 rounded shadow-sm" src="{{ asset('img/' . $blog_detail->image) }}"
                    alt="Blog Image">
            </div>
            <div class="col-lg-6">
                <div class="info-box mb-4">
                    <h5 class="mb-3">Sub Title</h5>
                    <p class="fs-5">{{ $blog_detail->sub_title }}</p>
                </div>
                {{-- <a href="#" class="btn btn-purple">Read More</a> --}}
            </div>
        </div>
    </div>
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-bootstrap">
                    {!! $blog_detail->description !!}
                </div>
            </div>
        </div>
    </div>

    @include('frontend.frontend_footer')
</body>

</html>
