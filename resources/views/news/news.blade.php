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
                                        Create News
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item">News
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
                                        <h5 class="modal-title">News Type</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ url('newsstore') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf


                                            <div class="form-group">
                                                <label for="type"> Name<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="type"
                                                    placeholder="Enter  Name" required autofocus name="name"
                                                    required>
                                            </div>



                                            <div class="form-group">
                                                <label for="type">Image</label>
                                                <input type="file" class="form-control" id="type" required
                                                    autofocus name="image">
                                            </div>



                                            <div class="form-group">
                                                <label for="type">Description</label>
                                                <textarea class="form-control" id="description" name="description" placeholder="Enter Description" required autofocus></textarea>
                                            </div>

                                            <div class="modal-footer">

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
                                <h3 class="card-title">News Table</h3>
                            </div>
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No.</th>

                                            <th> Name</th>
                                            <th>Image</th>
                                            <th>Description</th>


                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($news as $key => $news)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $news->name }}</td>
                                                <td><img src="{{ asset('img/' . $news->image) }}" alt=""
                                                        width="100" height="100"></td>
                                                <td>{{ $news->description }}</td>
                                                <td>
                                                    <a href="{{ url('new_edit', $news->id) }}"
                                                        class="btn btn-success btn-sm"><i class="fas fa-pencil-alt"></i>
                                                    </a>
                                                    <a href="#"
                                                        onclick="if(confirm('Are you sure you want to delete this service?')){ window.location='{{ url('new_delete', $news->id) }}'; } return false;"
                                                        class="btn btn-danger btn-sm">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </a>
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
