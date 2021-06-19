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

  </div><!-- container fluid -->

  <!-- sample modal content -->
  <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title mt-0" id="myModalLabel">Add Data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ url('administrator/roles/add') }}" method="post" id="forms"> @csrf
          <input type="hidden" name="id_edit" id="id_edit" />
          <div class="modal-body">
            <div class="form-group">
              <label>Name Roles</label>
              <input type="text" class="form-control" name="name" id="name" required placeholder="Type something" />
            </div>

            <div class="form-group">
              <label>Description</label>
              <input type="text" class="form-control" name="desc" id="desc" placeholder="Type something" />
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" id="btn-close" class="btn btn-secondary waves-effect"
              data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary waves-effect waves-light">Save changes</button>
          </div>
        </form>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

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
