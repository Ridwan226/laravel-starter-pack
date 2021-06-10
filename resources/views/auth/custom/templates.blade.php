<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <title>Ridwan - Starter</title>
  <meta content="Admin Dashboard" name="description" />
  <meta content="Ridwan" name="author" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

  <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">

</head>


<body class="fixed-left">

  <!-- Loader -->
  <div id="preloader">
    <div id="status">
      <div class="spinner">
        <div class="rect1"></div>
        <div class="rect2"></div>
        <div class="rect3"></div>
        <div class="rect4"></div>
        <div class="rect5"></div>
      </div>
    </div>
  </div>

  <!-- Begin page -->
  <div class="home-btn d-none d-sm-block">
    <a href="{{url('')}}" class="text-dark"><i class="mdi mdi-home h1"></i></a>
  </div>

  <div class="account-pages">
    @yield('content')
  </div>



  <!-- jQuery  -->
  <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>
  <script src="{{ asset('assets/js/detect.js') }}"></script>
  <script src="{{ asset('assets/js/fastclick.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.blockUI.js') }}"></script>
  <script src="{{ asset('assets/js/waves.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.nicescroll.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.scrollTo.min.js') }}"></script>

  <!-- App js -->
  <script src="{{ asset('assets/js/app.js') }}"></script>

</body>

</html>