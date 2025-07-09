@include('frontend.frontend_header')
<link rel="stylesheet" href="{{ asset('css/upcoming-courses.css') }}">
<link rel="stylesheet" href="{{ asset('css/footer.css') }}">
<style>
    body {
        font-family: 'Inter', Arial, sans-serif;
        line-height: 1.6;
        color: #333;
    }

    .header-bg {
        position: relative;
        padding: 100px 20px;
        background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://images.unsplash.com/photo-1465101046530-73398c7f28ca?auto=format&fit=crop&w=1500&q=80') no-repeat center center;
        background-size: cover;
        color: white;
    }

    .title-bar {
        font-size: 3.5rem;
        font-weight: 800;
        margin-bottom: 1rem;
        position: relative;
        display: inline-block;
    }

    .title-bar::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 0;
        width: 100%;
        height: 4px;
        background: linear-gradient(90deg, #FFD700, #FFA500);
    }

    .main-content {
        padding: 60px 0;
    }

    .content-section {
        margin-bottom: 40px;
    }

    .section-title {
        color: #074DAB;
        font-size: 2rem;
        font-weight: 700;
        margin-bottom: 1.5rem;
        position: relative;
    }

    .section-title::after {
        content: '';
        position: absolute;
        bottom: -8px;
        left: 0;
        width: 60px;
        height: 3px;
        background: #2e0b7d;
    }

    .quote-box {
        background: #f8f9fa;
        border-left: 5px solid #2e0b7d;
        padding: 25px;
        margin: 30px 0;
        border-radius: 0 8px 8px 0;
        box-shadow: 0 2px 15px rgba(0, 0, 0, 0.05);
    }

    .quote-box em {
        color: #666;
        font-size: 0.9rem;
    }

    .sidebar {
        background: #f8f9fa;
        padding: 25px;
        border-radius: 8px;
        box-shadow: 0 2px 15px rgba(0, 0, 0, 0.05);
    }

    .sidebar-title {
        color: #2e0b7d;
        font-size: 1.2rem;
        font-weight: 600;
        margin-bottom: 1rem;
    }

    .newsletter-box {
        background: #2e0b7d;
        color: white;
        padding: 25px;
        border-radius: 8px;
        margin-bottom: 25px;
    }

    .btn-signup {
        background: #FFD700;
        color: #2e0b7d;
        font-weight: 600;
        padding: 10px 25px;
        border: none;
        border-radius: 5px;
        transition: all 0.3s ease;
    }

    .btn-signup:hover {
        background: #FFA500;
        transform: translateY(-2px);
    }

    .contact-info {
        margin-top: 20px;
    }

    .contact-info a {
        color: #2e0b7d;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .contact-info a:hover {
        color: #FFD700;
    }
</style>

<!-- Header -->
<div class="header-bg text-center">
    <div class="container">
        <h1 class="title-bar">Global Health E-Learning Program</h1>
        <p class="lead">Advancing Global Health Education Through Innovation</p>
    </div>
</div>

<!-- Main Content -->
<div class="main-content">
    <div class="container">
        <div class="row">
            <!-- Left Content -->
            <div class="col-lg-8">
                <div class="content-section">
                    <h2 class="section-title">About Us</h2>
                    <p class="lead">The University of Washington's Global Health E-Learning Program (eDGH) has been a
                        premier provider of
                        e-learning courses and services in global public health since its formation in 2014...</p>
                </div>

                <div class="content-section">
                    <h3 class="section-title">High-Quality, Large-Scale Courses with International Reach</h3>
                    <p>Our <a href="#" class="text-primary">e-learning courses</a> and <a href="#"
                            class="text-primary">projects</a> are being conducted in
                        more than 150 countries...</p>
                    <p>Since 2014, our courses have had more than 152,000 enrolled participants...</p>
                </div>

                <div class="quote-box">
                    <p class="mb-3">"I appreciate all the efforts the eDGH team is doing to share knowledge to
                        participants
                        worldwide..."</p>
                    <p class="mb-0"><strong>eDGH Course Participant</strong><br>
                        <em>Fundamentals of Global Health Research</em>
                    </p>
                </div>

                <div class="content-section">
                    <h3 class="section-title">Innovative E-Learning Projects</h3>
                    <p>Our team of talented e-learning experts use evidence-based, effective strategies...</p>
                </div>
            </div>

            <!-- Right Sidebar -->
            <div class="col-lg-4">
                <div class="sidebar">
                    <h4 class="sidebar-title">Quick Links</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-decoration-none">Meet the Team</a></li>

                        <li class="mb-2"><a href="{{ url('/all_courses') }}" class="text-decoration-none">Our
                                Courses</a>
                        </li>
                    </ul>
                </div>

                <div class="newsletter-box">
                    <h4 class="sidebar-title text-white">Stay Updated</h4>
                    <p>This is the contact us page. For any inquiries, feel free to <a href="mailto:info@uw.edu"
                            class="text-primary">contact us</a>.</p>
                    <a href="{{ url('/contact') }}" class="btn btn-signup">Contact Us</a>
                </div>


            </div>
        </div>
    </div>
</div>

@include('frontend.footer')
<!-- Bootstrap 5 JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
