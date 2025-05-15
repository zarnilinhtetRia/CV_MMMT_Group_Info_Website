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
                            <div class="col-sm-6">
                                <div class="col-md-12">
                                    <button type="button" class="btn btn-primary " data-toggle="modal"
                                        data-target="#modal-lg">
                                        Create Blog
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item">Blog
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
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Create Blog</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('blogs.store') }}" method="POST">
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
                                                    <label for="category_id">Category<span
                                                            class="text-danger">*</span></label>
                                                    <select name="category_id" id="" class="form-control">
                                                        <option value="" selected>Choose Category</option>
                                                        @foreach ($categories as $category)
                                                            <option value="{{ $category->id }}">
                                                                {{ $category->category }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="type_id">Type<span class="text-danger">*</span></label>
                                                    <select name="type_id" id="" class="form-control">
                                                        <option value="" selected>Choose Type</option>
                                                        @foreach ($types as $type)
                                                            <option value="{{ $type->id }}">{{ $type->type }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="description">Description<span
                                                            class="text-danger">*</span></label>
                                                    <textarea class="form-control" id="description" name="description" rows="3" required autofocus></textarea>
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
                                <h3 class="card-title">Blog Table</h3>
                            </div>
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Title</th>
                                            <th>Category</th>
                                            <th>Type</th>
                                            <th>User</th>
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

                                                <td>User Name</td>
                                                <td>{{ $blog->created_at->format('d M Y') }}</td>
                                                <td>
                                                    <a href="{{ route('blogs.show', $blog->id) }}"
                                                        class="btn btn-primary btn-sm"><i class="far fa-eye"></i>
                                                    </a>
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

        @include('layouts.footer')
