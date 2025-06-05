@include('frontend.frontend_header')

<!-- Hero Section -->
<section id="home" class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 hero-text-content">
                <div class="academic-badge">
                    <i class="fas fa-university"></i>
                    University of Washington
                </div>
                <h1 class="hero-title">Transform Your Future Through <span>Education</span></h1>
                <p class="hero-subtitle">Discover a world of knowledge with our expert-led courses and interactive
                    learning experiences designed to help you achieve your academic goals.</p>

                <div class="academic-stats">
                    <div class="stat-item">
                        <div class="stat-number">10K+</div>
                        <div class="stat-label">Enrolled Students</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">500+</div>
                        <div class="stat-label">Academic Courses</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">95%</div>
                        <div class="stat-label">Graduation Rate</div>
                    </div>
                </div>

                <div class="hero-buttons">
                    <a href="#courses" class="btn hero-btn hero-btn-primary">View Programs</a>
                    <a href="#contact" class="btn hero-btn hero-btn-secondary">Apply Now</a>
                </div>
            </div>
            <div class="col-lg-6 academic-image">
                <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3"
                    alt="University Campus">
            </div>
        </div>
    </div>
</section>



<!-- Courses Section -->
<section id="courses" class="py-5 bg-light">
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
</section>






<!-- Bootstrap 5 JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
