<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Product - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="{{ asset('backend/vendor/fontawesome-free/css/all.min.css') }}" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="{{ asset('backend/css/sb-admin-2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-bs4.min.js"></script>

</head>

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
                            <div class="col-sm-6">
                                <div class="col-md-12">
                                    <button type="button" class="btn btn-primary " data-toggle="modal"
                                        data-target="#modal-lg">
                                        Create Product
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item">Product
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

                <div class="ml-2 container-fluid">
                    <div class="row justify-content-center d-flex">

                        <!-- Modal -->
                        <div class="modal fade" id="modal-lg" data-backdrop="static" data-keyboard="false"
                            tabindex="-1" aria-labelledby="modal-lgLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Create Product</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('blogs.store') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label for="title">Title<span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="title"
                                                        placeholder="Enter Title Name" required autofocus
                                                        name="title">
                                                </div>
                                                <div class="form-group">
                                                    <label for="sub_title">Sub Title</label>
                                                    <input type="text" class="form-control" id="sub_title"
                                                        placeholder="Enter Sub Title" required autofocus
                                                        name="sub_title">

                                                </div>
                                                <div class="form-group">
                                                    <label for="category_id">Category<span
                                                            class="text-danger">*</span></label>
                                                    <select name="category_id" id="category_id" class="form-control"
                                                        required>
                                                        <option value="" selected>Choose Category</option>
                                                        @foreach ($categories as $category)
                                                            <option value="{{ $category->id }}">
                                                                {{ $category->category }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                {{-- <div class="form-group">
                                                    <label for="type_id">Type<span class="text-danger">*</span></label>
                                                    <select name="type_id" id="" class="form-control">
                                                        <option value="" selected>Choose Type</option>
                                                        @foreach ($types as $type)
                                                            <option value="{{ $type->id }}">{{ $type->type }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div> --}}

                                                <!-- Type -->
                                                <div class="form-group">
                                                    <label for="type_id">Type<span
                                                            class="text-danger">*</span></label>
                                                    <select name="type_id" id="type_id" class="form-control"
                                                        required>
                                                        <option value="" selected>Choose Type</option>
                                                        @foreach ($types as $type)
                                                            <option value="{{ $type->id }}"
                                                                data-category="{{ $type->category_id }}">
                                                                {{ $type->type }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>


                                                <div class="form-group">
                                                    <label for="image">Image<span
                                                            class="text-danger">*</span></label>
                                                    <input type="file" class="form-control-file" id="image"
                                                        name="image" required>
                                                </div>

                                                <div class="form-group">
                                                    <label for="description">Description<span
                                                            class="text-danger">*</span></label>
                                                    {{-- <textarea class="form-control" id="description" name="description" rows="3" required autofocus></textarea> --}}

                                                    <textarea class="form-control" id="summernote" name="description" required></textarea>


                                                    <script>
                                                        $('#summernote').summernote({
                                                            placeholder: '',
                                                            tabsize: 2,
                                                            height: 300
                                                        });
                                                    </script>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default"
                                                    data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save</button>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-3 col-md-12">
                        <div class="card ">
                            <div class="card-header">
                                <h3 class="card-title">Product Table</h3>
                            </div>
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Title</th>
                                            <th>Category</th>
                                            <th>Type</th>
                                            <th>Image</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($blogs as $key => $blog)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $blog->title }}</td>

                                                @foreach ($categories as $category)
                                                    @if ($category->id == $blog->category_id)
                                                        <td>{{ $category->category }}</td>
                                                    @endif
                                                @endforeach

                                                @foreach ($types as $type)
                                                    @if ($type->id == $blog->type_id)
                                                        <td>{{ $type->type }}</td>
                                                    @endif
                                                @endforeach

                                                <td><img src="{{ asset('img/' . $blog->image) }}" alt=""
                                                        width="100" height="100"></td>

                                                <td>{{ $blog->created_at->format('d M Y') }}</td>
                                                <td>
                                                    <a href="{{ route('blogs.show', $blog->id) }}"
                                                        class="btn btn-primary btn-sm"><i class="far fa-eye"></i>
                                                    </a>
                                                    @if (auth()->id() === $blog->user_id || auth()->user()->role === 'admin')
                                                        <a href="{{ route('blogs.edit', $blog->id) }}"
                                                            class="btn btn-success btn-sm"><i
                                                                class="fas fa-pencil-alt"></i>
                                                        </a>
                                                        <form action="{{ route('blogs.destroy', $blog->id) }}"
                                                            method="POST" style="display:inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm"
                                                                onclick="return confirm('Are you sure you want to delete this Blog ?')">
                                                                <i class="fas fa-trash-alt"></i>
                                                            </button>
                                                        </form>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
            </section>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const categorySelect = document.getElementById('category_id');
                const typeSelect = document.getElementById('type_id');

                function filterTypesByCategory(categoryId) {
                    const options = typeSelect.querySelectorAll('option');
                    typeSelect.value = ""; // reset selected value

                    options.forEach(option => {
                        const optionCategory = option.getAttribute('data-category');
                        if (!optionCategory || optionCategory === categoryId) {
                            option.style.display = 'block';
                        } else {
                            option.style.display = 'none';
                        }
                    });
                }

                // Initial filter on load (if editing)
                filterTypesByCategory(categorySelect.value);

                // On category change
                categorySelect.addEventListener('change', function() {
                    filterTypesByCategory(this.value);
                });
            });
        </script>


        @include('layouts.footer')
