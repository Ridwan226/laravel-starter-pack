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

  {{-- <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}"> --}}

  {{-- <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css"> --}}
  <!-- Bootstrap 4.0-->
  <link rel="stylesheet" href="{{ asset('assets/admin/vendor_components/bootstrap/dist/css/bootstrap.min.css') }}">

  <!-- theme style -->
  <link rel="stylesheet" href="{{ asset('assets/admin/css/style.css') }}">

  <!-- Admin skins -->
  <link rel="stylesheet" href="{{ asset('assets/admin/css/skin_color.css') }}">

</head>


<body class="hold-transition theme-fruit">

  <div class="h-p100">
    @yield('content')
    
  </div>

 


  <!-- jQuery 3 -->
  <script src="{{ asset('assets/admin/vendor_components/jquery-3.3.1/jquery-3.3.1.js') }}"></script>

  <!-- fullscreen -->
  <script src="{{ asset('assets/admin/vendor_components/screenfull/screenfull.js') }}"></script>

  <!-- popper -->
  <script src="{{ asset('assets/admin/vendor_components/popper/dist/popper.min.js') }}"></script>

  <!-- Bootstrap 4.0-->
  <script src="{{ asset('assets/admin/vendor_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
  
  	<!-- Form validator JavaScript -->
    <script src="{{ asset('assets/admin/js/pages/validation.js') }}"></script>
    <script src="{{ asset('assets/admin/js/pages/form-validation.js') }}"></script>
    



</body>

</html>