@include('layouts.header')

<body id="page-top">
    <div id="wrapper">

        @include('layouts.sidebar')

        <div id="content-wrapper">
            <!-- Main Content -->
            <section id="content">

                @include('layouts.navbar')
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="mb-2 row">
                            <div class="col-sm-6"></div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item">Blog Edit
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </section>
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ session('success') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                @if (session('delete'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>{{ session('delete') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                <section class="ml-2 container-fluid">
                    <div class="row">
                        <div class="col-6 offset-3">
                            <div class="card">
                                <div class="cade-header mt-2 mb-2">
                                    <h4 class="cade-title text-center">Blog Edit</h4>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('blogs.update', $blog->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('put')
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="title">Title<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="title"
                                                    placeholder="Enter Title Name" required autofocus name="title"
                                                    value="{{ $blog->title }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="category_id">Category<span
                                                        class="text-danger">*</span></label>
                                                <select name="category_id" id="" class="form-control">
                                                    <option value="" selected>Choose Category</option>
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}"
                                                            {{ $blog->category_id == $category->id ? 'selected' : '' }}>
                                                            {{ $category->category }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="type_id">Type<span class="text-danger">*</span></label>
                                                <select name="type_id" id="" class="form-control">
                                                    <option value="" selected>Choose Type</option>
                                                    @foreach ($types as $type)
                                                        <option value="{{ $type->id }}"
                                                            {{ $blog->type_id == $type->id ? 'selected' : '' }}>
                                                            {{ $type->type }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="image">Image <span class="text-danger">*</span></label>
                                                <input type="file" class="form-control" name="image"
                                                    accept="image/*">

                                                @if ($blog->image)
                                                    <div class="mt-2">
                                                        <p>Current Image:</p>
                                                        <img src="{{ $blog->image }}" alt="Blog Image" width="150">
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="description">Description<span
                                                        class="text-danger">*</span></label>
                                                <textarea class="form-control" id="description" name="description" rows="3" required autofocus>{{ $blog->description }}</textarea>
                                            </div>
                                            <div class="modal-footer justify-content-between">
                                                <a href="{{ route('blogs.index') }}"><button type="button"
                                                        class="btn btn-dark">Back</button></a>
                                                <button type="submit" class="btn btn-primary">Update </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </section>
        </div>
        @include('layouts.footer')
