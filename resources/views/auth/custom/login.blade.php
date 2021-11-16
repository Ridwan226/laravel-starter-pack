@extends('auth.custom.templates')
@section('content')

<div class="row align-items-center justify-content-md-center h-p100">
  <div class="col-lg-4 col-12 h-lg-p100 h-auto bg-img"
    style="background-image: url(/assets/admin/images/auth-bg/bg-1.jpg);">
    <div class="row l-block p-xl-100 p-lg-50 p-30 h-lg-p100 h-auto">
      <div class="col-12 logo align-self-start">
        <a href="#" class="aut-logo">
          <img src="{{ asset('assets/admin/images/logo-icon.png') }}" alt="">
        </a>
      </div>
      <div class="col-12 align-self-center">
        <h1 class="title text-white">Welcome to Ridwan Starter Pack!</h1>
        {{-- <h3 class="subtitle text-white-50">The ultimate Bootstrap &amp; admin theme framework for next generation web
          apps.</h3> --}}
      </div>
      <div class="col-12 align-self-end">
        <h6 class="text-white-50">
          © {{ date('Y') }}  Admin
        </h6>
      </div>
    </div>
  </div>
  <div class="col-lg-8 col-12">
    <div class="row justify-content-center no-gutters">
      <div class="col-xl-4 col-lg-7 col-md-6 col-12">
        <div class="content-top-agile p-10">
          <h2 class="text-primary">Get started with Us</h2>
          <p class="text-black-50">Sign in to start your session</p>
           @if ($errors->any())
        @foreach ($errors->all() as $error)
        <div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <strong>Oh snap!</strong> {{ $error }}
        </div>
        @endforeach
        @endif
        </div>
        <div class="p-30 rounded10 b-2 b-dashed border-info">
          <form method="POST" action="{{ route('login') }}" novalidate> @csrf
            <div class="form-group">
              <div class="controls">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
                  </div>
                  <input class="form-control pl-15 bg-transparent plc-black" type="email" name="email" required
                    placeholder="Email" data-validation-required-message="This field is required" autofocus>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="controls">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text  bg-transparent"><i class="ti-lock"></i></span>
                </div>
                <input type="password" name="password" class="form-control pl-15 bg-transparent plc-black" required placeholder="Password">
              </div>
              </div>
            </div>
            <div class="row">
              <div class="col-6">
                <div class="checkbox">
                  <input type="checkbox" name="remember" id="basic_checkbox_1">
                  <label for="basic_checkbox_1">Remember Me</label>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-6">
                <div class="fog-pwd text-right">
                  <a href="javascript:void(0)" class="hover-info"><i class="ion ion-locked"></i> Forgot pwd?</a><br>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-12 text-center">
                <button type="submit" class="btn btn-info mt-10">SIGN IN</button>
              </div>
              <!-- /.col -->
            </div>
          </form>

          {{-- <div class="text-center">
            <p class="mt-20">- Sign With -</p>
            <p class="gap-items-2 mb-20">
              <a class="btn btn-social-icon btn-facebook" href="#"><i class="fa fa-facebook"></i></a>
              <a class="btn btn-social-icon btn-twitter" href="#"><i class="fa fa-twitter"></i></a>
              <a class="btn btn-social-icon btn-google" href="#"><i class="fa fa-google-plus"></i></a>
              <a class="btn btn-social-icon btn-instagram" href="#"><i class="fa fa-instagram"></i></a>
            </p>
          </div> --}}

          <div class="text-center">
            <p class="mt-15 mb-0">Don't have an account? <a href="{{ url('register') }}" class="text-info ml-5">Sign
                Up</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection