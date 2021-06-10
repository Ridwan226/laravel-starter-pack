@extends('auth.custom.templates')
@section('content')
  <div class="container">
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
  </div>
@endsection
