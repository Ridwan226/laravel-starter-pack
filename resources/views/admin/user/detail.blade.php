@extends('admin.templates.templates')

@section('app-css')
  <!-- DataTables -->
  <link href="{{ asset('/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

  <!-- Responsive datatable examples -->
  <link href="{{ asset('/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
@endsection


@section('content')
  <div class="container-fluid">

    <div class="row">
      <div class="col-sm-12">
        <div class="page-title-box">
          <div class="row align-items-center">
            <div class="col-md-8">
              <h4 class="page-title m-0">Users Detail</h4>
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

  </div>


@endsection


@section('app-js')


  <!-- Required datatable js -->
  <script src="{{ asset('/plugins/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
  <!-- Buttons examples -->
  <script src="{{ asset('/plugins/datatables/dataTables.buttons.min.js') }}"></script>
  <script src="{{ asset('/plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('/plugins/datatables/jszip.min.js') }}"></script>
  <script src="{{ asset('/plugins/datatables/pdfmake.min.js') }}"></script>
  <script src="{{ asset('/plugins/datatables/vfs_fonts.js') }}"></script>
  <script src="{{ asset('/plugins/datatables/buttons.html5.min.js') }}"></script>
  <script src="{{ asset('/plugins/datatables/buttons.print.min.js') }}"></script>
  <script src="{{ asset('/plugins/datatables/buttons.colVis.min.js') }}"></script>
  <!-- Responsive examples -->
  <script src="{{ asset('/plugins/datatables/dataTables.responsive.min.js') }}"></script>
  <script src="{{ asset('/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>
  <!-- Parsley js -->
  <script src="{{ asset('/plugins/parsleyjs/parsley.min.js') }}"></script>

  
@endsection
