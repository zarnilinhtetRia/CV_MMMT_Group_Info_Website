@include('frontend.frontend_header')
<link rel="stylesheet" href="{{ asset('css/upcoming-courses.css') }}">
<link rel="stylesheet" href="{{ asset('css/footer.css') }}">
<style>
    .card-title {
        font-weight: bold;
        color: #074DAC;
    }

    .learn-btn {
        background-color: #074DAC;
        color: white;
        font-weight: 600;
    }

    .learn-btn:hover {
        background-color: #074DAC;
        color: white;
    }

    .card-body {
        background-color: #f5f1e5;
    }

    .important-dates {
        color: #000;
        font-weight: bold;
        margin-top: 10px;
    }

    .arrow-box {
        display: inline-flex;
        align-items: center;
        gap: 5px;
    }
</style>
<!-- Hero Section -->
<div class="container-fluid bg-purple text-white py-5"
    style="background: #1059c0; background-image: url('https://images.unsplash.com/photo-1465101046530-73398c7f28ca?auto=format&fit=crop&w=1500&q=80'); background-size: cover; background-position: center; position: relative;">
    <div
        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(49,91,149,0.7); z-index: 1;">
    </div>
    <div class="container position-relative" style="z-index: 2;">
        <h1 class="display-4 fw-bold">Courses</h1>
        <hr class="border-3 border-light w-25 mb-3">
        <p class="lead">The UW Department of Global Health E-Learning Program (eDGH) has a growing number of online
            courses for health professionals worldwide.</p>
    </div>
</div>

<!-- Breadcrumb -->
<div class="container mt-5">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Courses</li>
        </ol>
    </nav>
</div>

<!-- Info Text -->
{{-- <div class="container mb-4">
    <p>You can see all the upcoming application dates by visiting our <a href="#">Upcoming courses page</a>. You
        can also <a href="#">sign up for our Newsletter</a> to be emailed when new applications are available.</p>
</div> --}}

<!-- Modified Courses Grid -->
{{-- <div class="container mb-5 mt-5">
    <div class="row g-4">
        <div class="col-md-4">
            @foreach ($all_courses as $all_courses)
                <div class="card bg-dark text-white border-0 shadow-lg position-relative overflow-hidden"
                    style="height: 320px; transition: all 0.3s ease-in-out;">
                    <img src="{{ asset('img/' . $all_courses->image) }}" loading="lazy"
                        class="card-img h-100 w-100 object-fit-cover" alt="Economic Evaluation in Global Health"
                        style="filter: brightness(0.7); transition: all 0.3s ease-in-out;">
                    <div class="card-img-overlay d-flex flex-column justify-content-end p-4"
                        style="background: linear-gradient(180deg, rgba(0,0,0,0) 40%, rgba(0,0,0,0.7) 100%); transition: all 0.3s ease-in-out;">
                        <h4 class="card-title fw-bold mb-2">{{ $all_courses->title }}</h4>
                        <p class="card-text small">Learn how to assess the value for money of health interventions in
                            global
                            settings.</p>
                        <a href="#" class="stretched-link text-white"></a>
                    </div>
                </div>

                <style>
                    .card:hover {
                        transform: scale(1.05);
                    }

                    .card:hover img {
                        filter: brightness(1);
                    }
                </style>
            @endforeach

        </div>

    </div>
</div> --}}
<div class="container py-5">
    <div class="row g-4">
        <!-- Card 1 -->
        <div class="col-md-4">
            @foreach ($all_courses as $all_courses)
                <div class="card h-80 shadow">
                    <img src="{{ asset('img/' . $all_courses->image) }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{ $all_courses->title }}</h5>
                        <p class="card-text">{{ $all_courses->sub_title }}</p>
                        </p>
                        {{-- <div class="important-dates">► Important dates</div> --}}
                        <div class="mt-3">
                            <a href="{{ url('/blog_post/' . $all_courses->id) }}" class="btn learn-btn">
                                LEARN MORE →
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</div>

<!-- Bootstrap 5 JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
