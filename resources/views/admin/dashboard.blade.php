@extends('admin.templates.templates')

@section('content')
<!-- Main content -->
<section class="content">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="d-flex align-items-center">
      <div class="mr-auto">
        <h3 class="page-title">Dashboard</h3>
        <div class="d-inline-block align-items-center">
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
              <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
          </nav>
        </div>
      </div>
      <div class="right-title">
        <div class="dropdown">
          <button class="btn btn-outline dropdown-toggle no-caret" type="button" data-toggle="dropdown"><i
              class="mdi mdi-dots-horizontal"></i></button>
          <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="#"><i class="mdi mdi-share"></i>Activity</a>
            <a class="dropdown-item" href="#"><i class="mdi mdi-email"></i>Messages</a>
            <a class="dropdown-item" href="#"><i class="mdi mdi-help-circle-outline"></i>FAQ</a>
            <a class="dropdown-item" href="#"><i class="mdi mdi-settings"></i>Support</a>
            <div class="dropdown-divider"></div>
            <button type="button" class="btn btn-rounded btn-success">Submit</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="box">
        <div class="box-header with-border">
          <h4 class="box-title">Title</h4>
        </div>
        <div class="box-body">
          This is some text within a card block.
        </div>
        <div class="box-footer">
          Footer
        </div>
      </div>
    </div>
  </div>
</section>

{{-- <div class="container-fluid">

  <div class="row">
    <div class="col-sm-12">
      <div class="page-title-box">
        <div class="row align-items-center">
          <div class="col-md-8">
            <h4 class="page-title m-0">Starter</h4>
          </div>
          <div class="col-md-4">
            <div class="float-right d-none d-md-block">
              <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <i class="ti-settings mr-1"></i> Settings
                </button>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Separated link</a>
                </div>
              </div>
            </div>
          </div>
          <!-- end col -->
        </div>
        <!-- end row -->
      </div>
      <!-- end page-title-box -->
    </div>
  </div>
  <!-- end page title -->

  <div class="row">

  </div>

</div><!-- container fluid --> --}}

@endsection