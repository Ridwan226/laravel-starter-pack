@extends('admin.templates.templates')

@section('content')

<div class="container-fluid">

  <div class="row">
    <div class="col-sm-12">
      <div class="page-title-box">
        <div class="row align-items-center">
          <div class="col-md-8">
            <h4 class="page-title m-0">Setting Permissions</h4>
          </div>
          <div class="col-md-4">
            <div class="float-right d-none d-md-block">
              <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <i class="ti-settings mr-1"></i> Menu
                </button>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated">
                  <a class="dropdown-item" href="#">Add Permissions</a>
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

</div><!-- container fluid -->

@endsection
