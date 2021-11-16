<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <title>Ridwan - Startters</title>
  <meta content="Admin Dashboard" name="description" />
  <meta content="ThemeDesign" name="author" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <link rel="shortcut icon" href="assets/images/favicon.ico">

  <!-- Bootstrap 4.0-->
  <link rel="stylesheet" href="{{ asset('assets/admin/vendor_components/bootstrap/dist/css/bootstrap.min.css') }}">

  <!-- theme style -->
  <link rel="stylesheet" href="{{ asset('assets/admin/css/style.css') }}">

  <!-- Admin skins -->
  <link rel="stylesheet" href="{{ asset('assets/admin/css/skin_color.css') }}">
   <!-- summernote -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
  @yield('app-css')

</head>



<!-- Begin page -->

<body class="hold-transition light-skin sidebar-mini theme-fruit">

  <div class="wrapper">
    <div class="art-bg">
      <img src="https://adminvoice-admin-template.multipurposethemes.com/images/art1.svg" alt=""
        class="art-img light-img">
      <img src="https://adminvoice-admin-template.multipurposethemes.com/images/art2.svg" alt=""
        class="art-img dark-img">
      <img src="https://adminvoice-admin-template.multipurposethemes.com/images/art-bg.svg" alt=""
        class="wave-img light-img">
      <img src="https://adminvoice-admin-template.multipurposethemes.com/images/art-bg2.svg" alt=""
        class="wave-img dark-img">
    </div>
    @include('admin.templates.header')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <div class="container-full clearfix position-relative">
        @include('admin.templates.sidemenu')
        @yield('content')
      </div>
    </div>

    @include('admin.templates.footer')
  </div>





  <!-- jQuery 3 -->
  <script src="{{ asset('assets/admin/vendor_components/jquery-3.3.1/jquery-3.3.1.js') }}"></script>

  <!-- fullscreen -->
  <script src="{{ asset('assets/admin/vendor_components/screenfull/screenfull.js') }}"></script>

  <!-- popper -->
  <script src="{{ asset('assets/admin/vendor_components/popper/dist/popper.min.js') }}"></script>

  <!-- Bootstrap 4.0-->
  <script src="{{ asset('assets/admin/vendor_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

  <!-- SlimScroll -->
  <script src="{{ asset('assets/admin/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>

  <!-- FastClick -->
  <script src="{{ asset('assets/admin/vendor_components/fastclick/lib/fastclick.js') }}"></script>

  <!-- VoiceX Admin App -->
  <script src="{{ asset('assets/admin/js/template.js') }}"></script>

  <!-- VoiceX Admin for demo purposes -->
  <script src="{{ asset('assets/admin/js/demo.js') }}"></script>
  	<!-- Form validator JavaScript -->
    <script src="{{ asset('assets/admin/js/pages/validation.js') }}"></script>
    <script src="{{ asset('assets/admin/js/pages/form-validation.js') }}"></script>

  <!-- Sweet-Alert  -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.7/dist/sweetalert2.all.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  @yield('app-js')

</body>

</html>