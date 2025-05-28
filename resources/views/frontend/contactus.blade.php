@extends('layouts.frontend')
@section('content')
    <div class="container mt-5 pt-5" style="max-width: 600px;">
        <h5 class="text-center">Contact Us</h5>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('contact.submit') }}" method="POST" class="contact-form">
            @csrf
            <div class="card border shadow-lg p-4">

                <div class="form-group mb-3">
                    <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name"
                        required autofocus>
                </div>
                <div class="form-group mb-3">
                    <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email"
                        required autofocus>
                </div>
                <div class="form-group mb-3">
                    <label for="phone" class="form-label">Phone <span class="text-danger">*</span></label>
                    <input type="tel" class="form-control" id="phone" name="phone"
                        placeholder="Enter Phone Number" required autofocus>
                </div>
                <div class="form-group mb-3">
                    <label for="remark" class="form-label">Remark</label>
                    <textarea class="form-control" id="remark" name="remark" rows="4" required autofocus></textarea>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn text-white" style="background-color:#382e26;">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection
