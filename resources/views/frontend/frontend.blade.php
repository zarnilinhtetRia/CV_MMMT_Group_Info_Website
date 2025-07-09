@include('frontend.frontend_header')
<link rel="stylesheet" href="{{ asset('css/upcoming-courses.css') }}">
<link rel="stylesheet" href="{{ asset('css/footer.css') }}">

@include('frontend.hero')



<!-- Courses Section -->
{{-- <section id="courses" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5">Popular Courses</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card course-card">
                    <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97" class="card-img-top"
                        alt="Web Development">
                    <div class="card-body">
                        <h5 class="card-title">Web Development</h5>
                        <p class="card-text">Master modern web development technologies and frameworks.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="text-primary fw-bold">$99</span>
                            <a href="#" class="btn btn-outline-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card course-card">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71" class="card-img-top"
                        alt="Data Science">
                    <div class="card-body">
                        <h5 class="card-title">Data Science</h5>
                        <p class="card-text">Learn data analysis, machine learning, and visualization.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="text-primary fw-bold">$129</span>
                            <a href="#" class="btn btn-outline-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card course-card">
                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978" class="card-img-top"
                        alt="Digital Marketing">
                    <div class="card-body">
                        <h5 class="card-title">Digital Marketing</h5>
                        <p class="card-text">Master SEO, social media, and content marketing strategies.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="text-primary fw-bold">$89</span>
                            <a href="#" class="btn btn-outline-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

{{-- @include('frontend.upcoming_courses') --}}
<!-- Upcoming Courses Section -->
<section id="upcoming-courses" class="upcoming-courses-section">
    <div class="container">
        <div class="section-header">
            <div class="section-title">
                <h2> Courses</h2>
            </div>
            <a href="{{ url('/all_courses') }}" class="view-all-btn">
                ALL COURSES
                <i class="fas fa-arrow-right"></i>
            </a>
        </div>

        <div class="courses-list">


            @foreach ($blog as $item)
                <a href="{{ url('blog_post', $item->id) }}" class="course-card-new"
                    style="background-image: url('{{ asset('img/' . $item->image) }}');">
                    >

                    <div class="course-content-new">
                        <h3>{{ $item->title }}</h3> {{-- Corrected --}}
                        {{-- <span class="course-date">{{ $item->start_date }} to {{ $item->end_date }}</span> --}}
                    </div>
                </a>
            @endforeach


            {{-- <a href="#" class="course-card-new"
                style="background-image: url('https://images.unsplash.com/photo-1549923746-c50d750c8227?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
                <div class="course-content-new">
                    <h3>Policy Development and Advocacy for Global Health</h3>
                    <span class="course-date">22-Sep-2025 to 30-Nov-2025</span>
                </div>
            </a> --}}
            {{--
            <a href="#" class="course-card-new"
                style="background-image: url('https://images.unsplash.com/photo-1522881452909-ef33a3915159?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
                <div class="course-content-new">
                    <h3>Leadership and Management in Health</h3>
                    <span class="course-date">29-Sep-2025 to 7-Dec-2025</span>
                </div>
            </a>
            <a href="#" class="course-card-new"
                style="background-image: url('https://images.unsplash.com/photo-1518621736915-f3b1c67605d3?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
                <div class="course-content-new">
                    <h3>Introduction to Epidemiology for Global Health</h3>
                    <span class="course-date">29-Sep-2025 to 7-Dec-2025</span>
                </div>
            </a> --}}
        </div>
    </div>
</section>

@include('frontend.footer')
<!-- Bootstrap 5 JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
