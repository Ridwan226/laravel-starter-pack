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
          <h2 class="text-primary">GET STARTED WITH US</h2>
          <p class="text-black-50">REGISTER A NEW MEMBERSHIP</p>
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
          <form method="POST" action="{{ route('register') }}" novalidate> @csrf
            <div class="form-group">
              <div class="controls">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
                  </div>
                  <input class="form-control pl-15 bg-transparent plc-black" type="text" name="name" required
                    placeholder="Your Name" data-validation-required-message="This field is required" autofocus>
                </div>
              </div>
            </div>
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
            
             <div class="form-group">
              <div class="controls">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text  bg-transparent"><i class="ti-lock"></i></span>
                </div>
                <input type="password" name="password_confirmation" class="form-control pl-15 bg-transparent plc-black" required placeholder="Confirmation Password">
              </div>
              </div>
            </div>
            
            <div class="row">
              <div class="col-6">
                <div class="checkbox">
                  <input type="checkbox" name="remember" id="basic_checkbox_1">
                  <label for="basic_checkbox_1">I agree to the</label>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-6">
                <div class="fog-pwd text-right">
                  <a href="javascript:void(0)" class="hover-info"><i class="ion ion-locked"></i> Terms?</a><br>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-12 text-center">
                <button type="submit" class="btn btn-info mt-10">SIGN UP</button>
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
            <p class="mt-15 mb-0">Don't have an account? <a href="{{ url('login') }}" class="text-info ml-5">Sign
                Up</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



  {{-- <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div>
          <div>
            <a href="{{ url('') }}" class="logo logo-admin"><img src="{{ asset('assets/images/logo_dark.png') }}"
                height="28" alt="logo"></a>
          </div>
          <h5 class="font-14 text-muted mb-4">Ridwan Starter Pack</h5>
        </div>
      </div>
      <div class="col-lg-5 offset-lg-1">
        <div class="card mb-0">
          <div class="card-body">
            <div class="p-2">
              <h4 class="text-muted float-right font-18 mt-4">Register</h4>
              <div>
                <a href="index.html" class="logo logo-admin"><img src="assets/images/logo_dark.png" height="28"
                    alt="logo"></a>
              </div>
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

            <div class="p-2">
              <form method="POST" class="form-horizontal m-t-20" action="{{ route('register') }}">
                @csrf

                <div class="form-group row">
                  <div class="col-12">
                    <input class="form-control" name="name" type="text" required="" placeholder="Name" autofocus>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-12">
                    <input class="form-control" type="email" name="email" required="" placeholder="Email">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-12">
                    <input class="form-control" type="password" required="" placeholder="Password" name="password"
                      required autocomplete="new-password">
                  </div>
                </div>
                
                  <div class="form-group row">
                  <div class="col-12">
                    <input class="form-control" type="password" required="" placeholder="Password" name="password_confirmation"
                      required autocomplete="new-password">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-12">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck1" required >
                      <label class="custom-control-label font-weight-normal" for="customCheck1">I accept <a href="#"
                          class="text-primary">Terms and Conditions</a></label>
                    </div>
                  </div>
                </div>

                <div class="form-group text-center row m-t-20">
                  <div class="col-12">
                    <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Register</button>
                  </div>
                </div>

                <div class="form-group m-t-10 mb-0 row">
                  <div class="col-12 m-t-20 text-center">
                    <a href="{{ url('login') }}" class="text-muted">Already have account?</a>
                  </div>
                </div>
              </form>

            </div>

          </div>
        </div>
      </div>
    </div>
    <!-- end row -->
  </div> --}}
@endsection
