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
                                    <li class="breadcrumb-item">Breaking News Edit
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
                                    <h4 class="cade-title text-center">Breaking News Edit</h4>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('breakingnews.update', $breakingnews->id) }}" method="POST">
                                        @csrf
                                        @method('put')
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="type">Breaking News<span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="news"
                                                    placeholder="Enter News" required autofocus name="news"
                                                    value="{{ $breakingnews->news }}">
                                            </div>
                                            <div class="modal-footer justify-content-between">
                                                <a href="{{ route('breakingnews.index') }}"><button type="button"
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
