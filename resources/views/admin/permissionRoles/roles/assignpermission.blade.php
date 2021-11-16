@extends('admin.templates.templates')

@section('app-css')
<!-- DataTables -->
<link href="{{ asset('/assets/admin/vendor_components/datatable/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
  type="text/css" />
<link href="{{ asset('/assets/admin/vendor_components/datatable/buttons.bootstrap4.min.css') }}" rel="stylesheet"
  type="text/css" />

<!-- Responsive datatable examples -->
<link href="{{ asset('/assets/admin/vendor_components/datatable/responsive.bootstrap4.min.css') }}" rel="stylesheet"
  type="text/css" />
@endsection


@section('content')
<section class="content">
  <div class="content-header">
    <div class="d-flex align-items-center">
      <div class="mr-auto">
        <h3 class="page-title">Setting Roles Permissions</h3>
        <div class="d-inline-block align-items-center">
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ url('administrator/dashboard') }}"><i
                    class="mdi mdi-home-outline"></i></a></li>
              <li class="breadcrumb-item" aria-current="page">Dashboard</li>
              <li class="breadcrumb-item " aria-current="page"><a href="{{ url('administrator/roles') }}">Roles</a></li>
              <li class="breadcrumb-item active" aria-current="page">Detail</li>
            </ol>
          </nav>
        </div>
      </div>
      <div class="right-title">

      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-xl-12 col-12">
      <div class="box">
        <div class="box-header with-border">
          <h4 class="box-title">Tab Detail Roles</h4>
          <h6 class="box-subtitle">All Permissions Access Roles <b>{{ $role->name }}</h6>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="table-responsive">
            <table id="datatable" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Desc</th>
                  <th>Action</th>
                </tr>
              </thead>
            </table>
          </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>
</section>

{{-- <div class="container-fluid">

    <div class="row">
      <div class="col-sm-12">
        <div class="page-title-box">
          <div class="row align-items-center">
            <div class="col-md-8">
              <h4 class="page-title m-0">Setting Roles Permissions</h4>
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
      <div class="col-12">
        <div class="card m-b-30">
          <div class="card-body">

            <h4 class="mt-0 header-title">All Permissions Access Roles <b>{{ $role->name }}</b></h4>

<table id="datatable" class="table table-striped table-bordered dt-responsive nowrap"
  style="border-collapse: collapse; border-spacing: 0; width: 100%;">
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Desc</th>
      <th>Action</th>
    </tr>
  </thead>
</table>

</div>
</div>
</div> <!-- end col -->
</div>

</div><!-- container fluid --> --}}



@endsection


@section('app-js')

<!-- Required datatable js -->
<script src="{{ asset('/assets/admin/vendor_components/datatable/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('/assets/admin/vendor_components/datatable/dataTables.bootstrap4.min.js') }}"></script>
<!-- Buttons examples -->
<script src="{{ asset('/assets/admin/vendor_components/datatable/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('/assets/admin/vendor_components/datatable/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('/assets/admin/vendor_components/datatable/jszip.min.js') }}"></script>
<script src="{{ asset('/assets/admin/vendor_components/datatable/pdfmake.min.js') }}"></script>
<script src="{{ asset('/assets/admin/vendor_components/datatable/vfs_fonts.js') }}"></script>
<script src="{{ asset('/assets/admin/vendor_components/datatable/buttons.html5.min.js') }}"></script>
<script src="{{ asset('/assets/admin/vendor_components/datatable/buttons.print.min.js') }}"></script>
<script src="{{ asset('/assets/admin/vendor_components/datatable/buttons.colVis.min.js') }}"></script>
<!-- Responsive examples -->
<script src="{{ asset('/assets/admin/vendor_components/datatable/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('/assets/admin/vendor_components/datatable/responsive.bootstrap4.min.js') }}"></script>



<script>
  $(document).ready(function() {
      $('#datatable').DataTable({
        processing: true,
        serverSide: true, //aktifkan server-side
        scrollX: true,
        fixedColumns: true,
        ajax: {
          url: "{{ url('administrator/roles/assignperm/') }}/{{ $role->id }}",
          type: 'GET'
        },
        columns: [{
            data: 'id',
            name: 'id'
          },
          {
            data: 'name',
            name: 'name'
          },
          {
            data: 'desc',
            name: 'desc'
          },
          {
            data: 'aksi',
            name: 'aksi'
          },
        ],
      });

    });


    $(document).on('click', '.permission', function() {
      let idpermission = $(this).attr('id');
      let dataaccess = $(this).attr('data-access');
      console.log(idpermission);
      console.log(dataaccess);

      $.ajax({
        url: "{{ url('administrator/roles/assignperm/add') }}",
        type: "post",
        data: {
          permission_name: idpermission,
          dataaccess: dataaccess,
          nameroles: "{{ $role->name }}",
          _token: "{{ csrf_token() }}"
        },
        success: function(res, status) {
          $("#datatable").DataTable().ajax.reload(null, false);
          toastr.success(res.message, 'Sukses');
        },
        error: function(xhr) {
          toastr.error(xhr.responseJSON.message, 'Inconceivable!')
        }
      })
    });

</script>
@endsection