<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Post Detail</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <style>
        .description::first-line {
            font-weight: bold;
            font-size: 2em;
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100" style="padding-top: 80px;">
    <div class="container-fluid fixed-top" style="background-color: #2A53C1;">
        <nav class="navbar navbar-expand-lg navbar-dark py-3">
            <a class="navbar-brand" href="{{ url('/') }}">Blog Post</a>
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
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="{{ url('/userlogin') }}">Login</a>
                    </li> --}}
                </ul>
            </div>
        </nav>
    </div>

    <div class="header text-md-left text-center py-4 bg-white">
        <div class="container-fluid pl-md-5 pl-3">
            <div class="row justify-content-start">
                <div class="d-flex flex-md-row flex-column align-items-md-center align-items-center w-100">

                    <!-- Headline (stacked center on small, row on md+) -->
                    <h1 class="mb-2 mb-md-0 font-weight-bold" style="font-size: 60px; color:#172a47;">
                        BlogPost
                    </h1>

                    <!-- Vertical Line (only on md+) -->
                    <div class="d-none d-md-block"
                        style="width: 4px; height: 65px; background-color: #172a47; margin: 0 15px;">
                    </div>

                    <!-- Subtitle -->
                    <p class="mb-0" style="font-size: 16px; color:#172a47;">
                        News & Opinion Blog
                    </p>
                </div>
            </div>
        </div>
    </div>

    {{-- Blog Post Section --}}
    <div class="container mt-5 px-0">
        <div class="d-flex justify-content-center">
            <div class="card shadow p-4 w-75 rounded-4 border" style="border-color: #dee2e6;">
                <div class="card-body">
                    <p class="text-muted text-end mb-2" style="text-align: right;">
                        {{ $blog->created_at->format('M d, Y') }}
                    </p>

                    <h3 class="card-title fw-bold" style="font-weight: bolder; font-size: 2rem; text-align: left;">
                        {{ $blog->title }}
                    </h3>
                    <p class="description mt-3">
                        <br>
                        <span style="font-size: 1em; font-weight: bold;" class="ms-3">
                            {{ ucfirst(substr($blog->description, 0, strpos($blog->description, '.'))) . '.' }}
                        </span>
                        <br><br>
                        <span>
                            {{ substr($blog->description, strpos($blog->description, '.') + 1) }}
                        </span>
                    </p>

                    <div class="text-start mb-3">
                        <span class="btn btn-outline-secondary text-dark my-2">{{ $blog->category->category }}</span>
                        <span class="btn btn-outline-secondary text-dark my2">{{ $blog->type->type }}</span>
                    </div>

                    <hr>
                    <div class="d-flex justify-content-end">
                        <span class="text-muted">
                            💬 {{ $blog->comments_count }} comments
                        </span>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>

    {{-- Recent Posts --}}
    <div class="container mt-5 px-0">
        <div class="d-flex justify-content-center">
            <div class="card shadow p-4 w-75 rounded-4 border" style="border-color: #dee2e6;">
                <h3 style="color:#172a47;" class="mb-3">Recent Posts</h3>

                @if ($recentPosts->count() > 0)
                    <div class="row">
                        @foreach ($recentPosts as $post)
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <a href="{{ route('blog_post.detail', $post->id) }}"
                                            style="text-decoration: none; color: #172a47;">
                                            <h4 class="card-title">{{ $post->title }}</h4>
                                        </a>
                                        <p class="card-text">{{ Str::limit($post->description, 70) }}</p>
                                        <hr>


                                        <div class="d-flex justify-content-end">
                                            <span class="text-muted">
                                                💬 {{ $post->comments_count }} comments
                                            </span>
                                        </div>
                                        <hr>
                                    </div>

                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <p>No recent posts available.</p>
                @endif
            </div>
        </div>
    </div>


    {{-- Comment Section --}}
    <div class="container mt-4">
        <div class="d-flex row justify-content-center">
            <div class="card shadow p-4 w-75 rounded-4 border" style="border-color: #dee2e6;">
                <div class="col-md-12">
                    <h5 class="card-title mb-3">Comments</h5>
                    <hr>
                    @foreach ($blog->comments as $comment)
                        <div class=" mb-2">
                            <div class="card-body d-flex">
                                <img src="http://bootdey.com/img/Content/user_1.jpg" alt="User"
                                    class="rounded-circle me-3" width="50" height="50">
                                <div class="flex-grow-1">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <strong>{{ $comment->user->name ?? 'Guest' }}</strong>
                                        <small class="text-muted">{{ $comment->created_at->diffForHumans() }}</small>
                                    </div>

                                    <!-- Display View -->
                                    <div id="comment-display-{{ $comment->id }}">
                                        <p class="mb-1" id="comment-text-{{ $comment->id }}">
                                            {{ $comment->comment }}
                                        </p>
                                    </div>

                                    {{-- Edit View --}}
                                    <div id="comment-edit-{{ $comment->id }}" style="display: none;">
                                        <textarea class="form-control mb-2" id="comment-textarea-{{ $comment->id }}">{{ $comment->comment }}</textarea>
                                        <button class="btn btn-sm btn-success"
                                            onclick="updateComment({{ $comment->id }})">Update</button>
                                        <button class="btn btn-sm btn-secondary"
                                            onclick="cancelEdit({{ $comment->id }})">Cancel</button>
                                    </div>

                                    {{-- Action Buttons --}}
                                    @if (Auth::check() && Auth::id() === $comment->user_id)
                                        <div>
                                            <a href="javascript:void(0);"
                                                class="btn btn-link text-primary p-0 me-3 small"
                                                onclick="showEditBox({{ $comment->id }})">Edit</a>

                                            <form action="{{ route('comments.destroy', $comment) }}" method="POST"
                                                class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" onclick="return confirm('Are you sure?')"
                                                    class="btn btn-link text-danger p-0 small">
                                                    Delete
                                                </button>
                                            </form>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <hr>
                    @endforeach


                    <!-- Comment Form -->
                    <div class="mt-3">
                        <form method="POST" action="{{ route('comments.store') }}">
                            @csrf
                            <input type="hidden" name="blogpost_id" value="{{ $blog->id }}">
                            <div class="mb-2">
                                <textarea id="commentBox" class="form-control p-3" name="comment" rows="1" placeholder="Write a comment..."
                                    required></textarea>
                            </div>
                            <div id="commentActions" class="d-none justify-content-end gap-2 mt-2">
                                <button type="button" id="cancelBtn" class="btn btn-secondary mx-2">Cancel</button>
                                <button type="submit" class="btn text-white"
                                    style="background-color:#172a47;">Publish</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer class="py-3 bg-dark mt-5">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2025</p>
        </div>
    </footer>



    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.slim.min.js') }}"></script>

    <script>
        function showEditBox(id) {
            document.getElementById('comment-display-' + id).style.display = 'none';
            document.getElementById('comment-edit-' + id).style.display = 'block';
        }

        function cancelEdit(id) {
            document.getElementById('comment-display-' + id).style.display = 'block';
            document.getElementById('comment-edit-' + id).style.display = 'none';
        }

        function updateComment(id) {
            const comment = document.getElementById('comment-textarea-' + id).value;
            const token = '{{ csrf_token() }}';

            fetch(`/comments/${id}`, {
                    method: 'PUT',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': token
                    },
                    body: JSON.stringify({
                        comment
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        document.getElementById('comment-text-' + id).innerText = comment;
                        cancelEdit(id);
                    } else {
                        alert('Failed to update comment.');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Something went wrong.');
                });
        }
    </script>


    {{-- For CommentBox --}}
    <script>
        $(document).ready(function() {
            const $textarea = $('#commentBox');
            const $commentActions = $('#commentActions');

            $textarea.on('focus', function() {
                $(this).attr('rows', 3);
                $commentActions.removeClass('d-none').addClass('d-flex');
            });

            $('#cancelBtn').on('click', function() {
                $textarea.attr('rows', 1).val('');
                $commentActions.removeClass('d-flex').addClass('d-none');
            });
        });
    </script>



</body>

</html>
