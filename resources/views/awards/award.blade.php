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
                                        Create Awards
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item">Awards
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
                                        <h5 class="modal-title">Awards </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ url('awardstore') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf


                                            <div class="form-group">
                                                <label for="type">Title <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="type"
                                                    placeholder="Enter Type Name" required autofocus name="name"
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
                                <h3 class="card-title">Awards Table</h3>
                            </div>
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No.</th>

                                            <th>Service Name</th>
                                            <th>Image</th>
                                            <th>Description</th>


                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($awards as $key => $awards)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $awards->name }}</td>
                                                <td><img src="{{ asset('img/' . $awards->image) }}" alt=""
                                                        width="100" height="100"></td>
                                                <td>{{ $awards->description }}</td>
                                                <td>
                                                    <a href="{{ url('award_edit', $awards->id) }}"
                                                        class="btn btn-success btn-sm"><i class="fas fa-pencil-alt"></i>
                                                    </a>
                                                    <a href="#"
                                                        onclick="if(confirm('Are you sure you want to delete this award?')){ window.location='{{ url('award_delete', $awards->id) }}'; } return false;"
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
