@extends('layouts.template')

@section('main_content')
  <div class="container">
    <div class="row">
        <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4">
            <h1 class="display-6 py-4 font-weight-bold media-login-title">Laravel 8 Send Mail</h1>
            @if($errors->any())
              <div class="alert alert-danger m-3 admin-msg-alert">
                <strong>Email Not Sent.</strong>
              </div>
            @endif
            <div class="px-2">
                <form action="{{ route('send-email') }}" method="POST" class="justify-content-center">
                  {{csrf_field()}}
                    <div class="form-group row">
                        <label for="emailTo" class="col-4">Email To : </label>
                        <input type="text" class="form-control col-8" placeholder="Enter Email To" name="emailTo" id="emailTo" required>
                    </div>
                    <div class="form-group row">
                        <label for="subject" class="col-4">Subject : </label>
                        <input type="text" class="form-control col-8" placeholder="Enter Subject" name="subject" id="subject" required>
                    </div>
                    <div class="form-group row">
                        <label for="title" class="col-4">Title : </label>
                        <input type="text" class="form-control col-8" placeholder="Enter title" name="title" id="title" required>
                    </div>
                    <div class="form-group row">
                            <label for="message" class="col-4">Message : </label>
                            <textarea class="form-control col-8" name="message" id="message" placeholder="Enter message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-outline-dark btn-lg m-5 admin-btn">SEND</button>
                </form>
            </div>
        </div>
    </div>
  </div>
@endsection