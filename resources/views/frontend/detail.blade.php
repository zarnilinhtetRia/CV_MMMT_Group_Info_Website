@extends('layouts.frontend')
@section('content')
    {{-- Blog Post Section --}}
    <div class="container mt-5 px-0">
        <div class="row justify-content-center">
            {{-- Sidebar --}}
            <div class="col-12 col-md-3 mb-4">
                <div class="card shadow-sm border overflow-hidden" style="border-radius: 2rem;">
                    <div class="px-3 py-2"
                        style="background-color: #41372f; border-top-left-radius: 2rem; border-top-right-radius: 2rem;">
                        <h4 class="fw-bold mb-0 text-white text-center">Categories</h4>
                    </div>
                    <div class="card-body p-0">
                        @foreach ($categories as $category)
                            <a href="{{ $category->id }}"
                                class="d-block px-3 py-2 text-decoration-none text-dark border-bottom"
                                style="background-color: #e7ddd2;">
                                * {{ $category->category }}
                            </a>
                        @endforeach

                    </div>
                </div>
            </div>

            {{-- <div class="col-md-3 mb-4">
                <div class="card shadow-sm border overflow-hidden" style="border-radius: 2rem;">
                    <div class="px-3 py-2"
                        style="background-color: #41372f; border-top-left-radius: 2rem; border-top-right-radius: 2rem;">
                        <h4 class="fw-bold mb-0 text-white text-center">Categories</h4>
                    </div>
                    <div class="card-body p-0" style="background-color: #e7ddd2;">
                        @foreach ($categories as $category)
                            <div class="px-3 py-2 border-bottom">
                                @if ($category->types->count())
                                    <div class="dropdown w-100">
                                        <button class="btn dropdown-toggle w-100 text-left font-weight-bold" type="button"
                                            id="dropdownMenuButton{{ $category->id }}" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false"
                                            style="background-color: transparent; border: none;">
                                            * {{ $category->category }}
                                        </button>
                                        <div class="dropdown-menu w-100"
                                            aria-labelledby="dropdownMenuButton{{ $category->id }}">
                                            @foreach ($category->types as $type)
                                                <a class="dropdown-item" href="{{ url('your-url/' . $type->id) }}">
                                                    {{ $type->type }}
                                                </a>
                                            @endforeach
                                        </div>
                                    </div>
                                @else
                                    <strong>* {{ $category->category }}</strong>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            </div> --}}

            <div class=" col-12 col-md-9">
                <div class="card shadow p-4 rounded-4 border mx-auto" style="border-color: #dee2e6; max-width: 75%;">
                    <div class="card-body">
                        <p class="text-muted text-end mb-2" style="text-align: right;">
                            {{ $blog->created_at->format('M d, Y') }}
                        </p>

                        @if ($blog->image)
                            <img src="{{ asset('img/' . $blog->image) }}" class="img-fluid rounded-3 mb-3" alt="Blog Image"
                                style="width: 100%;">
                        @else
                            <img src="{{ asset('img/no-image.jpg') }}" class="img-fluid rounded-3 mb-3" alt="Blog Image"
                                style="width: 100%;">
                        @endif

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
                            <span class="btn categorybtn my-2">{{ $blog->category->category }}</span>
                            <span class="btn typebtn my2">{{ $blog->type->type }}</span>
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
    </div>

    {{-- Recent Posts --}}
    <div class="container mt-5 px-0">
        <div class="d-flex justify-content-center">
            <div class="card shadow p-4 w-75 rounded-4 border" style="border-color: #dee2e6;">
                <h3 style="color:#b49164;" class="mb-3">Recent Posts</h3>

                @if ($recentPosts->count() > 0)
                    <div class="row">
                        @foreach ($recentPosts as $post)
                            <div class="col-12 col-md-6">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        @if ($post->image)
                                            <img src="{{ asset('img/' . $post->image) }}" class="card-img-top"
                                                alt="Blog Image" style="height: 200px;  width: 100%; object-fit: cover;">
                                        @else
                                            <img src="{{ asset('img/no-image.jpg') }}" class="card-img-top"
                                                alt="Blog Image" style="height: 200px;  width: 100%; object-fit: cover;">
                                        @endif

                                        <h4 class="card-title">{{ $post->title }}</h4>

                                        <p class="card-text">{{ Str::limit($post->description, 70) }}</p>

                                        <hr>
                                        <div class="d-flex justify-content-between p-2">
                                            <span class="text-muted">
                                                💬 {{ $blog->comments_count }} comments
                                            </span>
                                            <a href="{{ route('blog_post.detail', $post->id) }}" class="btn morebtn">More
                                                Detail</a>
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
                    <h5 class="card-title mb-3" style="color: #b49164;">Comments</h5>
                    <hr>
                    @foreach ($blog->comments as $comment)
                        <div class=" mb-2">
                            <div class="card-body d-flex">
                                <img src="{{ asset('img/9e837528f01cf3f42119c5aeeed1b336.jpg') }}" alt="User"
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
                                        <button class="btn btn-sm text-white" style="background-color:#382e26;"
                                            onclick="updateComment({{ $comment->id }})">Update</button>
                                        <button class="btn btn-sm typebtn"
                                            onclick="cancelEdit({{ $comment->id }})">Cancel</button>
                                    </div>

                                    {{-- Action Buttons --}}
                                    @if (Auth::check() && Auth::id() === $comment->user_id)
                                        <div>
                                            <a href="javascript:void(0);" class="btn btn-link text-primary p-0 me-3 small"
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
                                <button type="button" id="cancelBtn" class="btn typebtn mx-2">Cancel</button>
                                <button type="submit" class="btn text-white"
                                    style="background-color:#382e26;">Publish</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('frontend/js/jquery-3.6.0.min.js') }}"></script>
    {{-- for comment CRUD --}}
    <script>
        function showEditBox(id) {
            document.getElementById("comment-display-" + id).style.display = "none";
            document.getElementById("comment-edit-" + id).style.display = "block";
        }

        function cancelEdit(id) {
            document.getElementById("comment-display-" + id).style.display = "block";
            document.getElementById("comment-edit-" + id).style.display = "none";
        }

        function updateComment(id) {
            const comment = document.getElementById("comment-textarea-" + id).value;
            const token = "{{ csrf_token() }}";

            fetch(`/comments/${id}`, {
                    method: "PUT",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": token,
                    },
                    body: JSON.stringify({
                        comment,
                    }),
                })
                .then((response) => response.json())
                .then((data) => {
                    if (data.success) {
                        document.getElementById("comment-text-" + id).innerText =
                            comment;
                        cancelEdit(id);
                    } else {
                        alert("Failed to update comment.");
                    }
                })
                .catch((error) => {
                    console.error("Error:", error);
                    alert("Something went wrong.");
                });
        }
    </script>

    <script>
        // For Comment Box
        $(document).ready(function() {
            const $textarea = $("#commentBox");
            const $commentActions = $("#commentActions");

            $textarea.on("focus", function() {
                $(this).attr("rows", 3);
                $commentActions.removeClass("d-none").addClass("d-flex");
            });

            $("#cancelBtn").on("click", function() {
                $textarea.attr("rows", 1).val("");
                $commentActions.removeClass("d-flex").addClass("d-none");
            });
        });
    </script>


@endsection
