<!-- Upcoming Courses Section -->
<section id="upcoming-courses" class="upcoming-courses-section">
    <div class="container">
        <div class="section-header">
            <div class="section-title">
                <h2>Upcoming Courses</h2>
            </div>
            <a href="#all-courses" class="view-all-btn">
                ALL COURSES
                <i class="fas fa-arrow-right"></i>
            </a>
        </div>

        <div class="courses-list">


            @foreach ($upcomingCourses as $item)
                <a href="#" class="course-card-new"
                    style="background-image: url('https://images.unsplash.com/photo-1549923746-c50d750c8227?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
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
