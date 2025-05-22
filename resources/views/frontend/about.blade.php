@extends('layouts.frontend')
@section('content')
    <!-- Main Content -->
    <div class="container flex-grow-1 py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h1 class="text-center fw-bold">About Us</h1>
                <p class="lead text-center">Welcome to My Blog, your number one source for daily news, articles, and
                    insights.</p>
                <hr>

                <h3>Our Mission</h3>
                <p>At My Blog, we aim to provide valuable content covering various topics including technology,
                    lifestyle, travel, and more. Our team is dedicated to curating high-quality posts that inspire and
                    inform our readers.</p>


                <h3>Who We Are</h3>
                <p>Founded in 2025, My Blog started as a small passion project. Over time, it has grown into a platform
                    where writers, thinkers, and creators can share their thoughts with a global audience.</p>

                <h3>Why Choose Us?</h3>
                <ul>
                    <li>🌟 High-quality, well-researched articles</li>
                    <li>📰 Daily updates on trending topics</li>
                    <li>🌍 A global community of readers and writers</li>
                </ul>
                <hr>
                <!-- Team Section -->
                <h3 class="my-3">Meet Our Team</h3>
                <div class="row">
                    <div class="col-md-4 text-center">
                        <img src="{{ asset('img/blog.png') }}" alt="Team Member" class="img-fluid rounded-circle mb-3">
                        <h5>John Doe</h5>
                        <p>Founder & CEO</p>
                    </div>
                    <div class="col-md-4 text-center">
                        <img src="{{ asset('img/blog.png') }}" alt="Team Member" class="img-fluid rounded-circle mb-3">
                        <h5>Jane Smith</h5>
                        <p>Chief Editor</p>
                    </div>
                    <div class="col-md-4 text-center">
                        <img src="{{ asset('img/blog.png') }}" alt="Team Member" class="img-fluid rounded-circle mb-3">
                        <h5>Michael Brown</h5>
                        <p>Content Strategist</p>
                    </div>
                </div>

                <!-- Testimonials Section -->
                <h3 class="my-3">What Our Readers Say</h3>
                <div class="card mb-3">
                    <div class="card-body">
                        <h4>"An Amazing Platform!"</h4>
                        <p>“I love the articles here. They’re not only insightful but also incredibly engaging. It’s the
                            perfect site for anyone who wants to stay informed and entertained!”</p>
                        <footer class="blockquote-footer">Sarah Lee, Regular Reader</footer>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-body">
                        <h4>"My Daily Dose of Information"</h4>
                        <p>“I check this blog every day for fresh articles. Whether it’s tech updates, lifestyle tips,
                            or global news, they always have something interesting to offer!”</p>
                        <footer class="blockquote-footer">James Kelly, Tech Enthusiast</footer>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
