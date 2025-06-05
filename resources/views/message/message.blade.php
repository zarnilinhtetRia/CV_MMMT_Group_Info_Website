@include('layouts.header')

<body id="page-top">
    <div id="wrapper">

        @include('layouts.sidebar')


        <div id="content-wrapper">
            <!-- Main Content -->
            <section id="content">

                @include('layouts.navbar')


                <div class="ml-2 container-fluid">


                    <div class="mt-3 col-md-12">
                        <div class="card ">
                            <div class="card-header">
                                <h3 class="card-title">Message Table</h3>
                            </div>
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th> Name</th>
                                            <th>Phone Number</th>
                                            <th>Email</th>
                                            <th>Subject</th>
                                            <th>Message</th>



                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($message as $key => $message)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $message->name }}</td>
                                                <td>{{ $message->phone }}</td>
                                                <td>{{ $message->email }}</td>
                                                <td>{{ $message->subject }}</td>
                                                <td>{{ $message->remark }} </td>


                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>


                    </div>
            </section>
        </div>

        @include('layouts.footer')
