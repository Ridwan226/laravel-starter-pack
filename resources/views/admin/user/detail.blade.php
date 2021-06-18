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
      <div class="col-xl-12">
        <div class="card m-b-30">
          <div class="card-body">

            <h4 class="mt-0 header-title"></h4>

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#profile" role="tab">
                  <span class="d-none d-md-block">Profile</span><span class="d-block d-md-none"><i
                      class="mdi mdi-account h5"></i></span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " data-toggle="tab" href="#home" role="tab">
                  <span class="d-none d-md-block">Permissions</span><span class="d-block d-md-none"><i
                      class="mdi mdi-home-variant h5"></i></span>
                </a>
              </li>


            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
              <div class="tab-pane active p-3" id="profile" role="tabpanel">
                <p class="mb-0">
                <dl class="row mb-0">
                  <dt class="col-sm-3">Name</dt>
                  <dd class="col-sm-9">{{ $user->name }}</dd>

                  <dt class="col-sm-3">Email</dt>
                  <dd class="col-sm-9">{{ $user->email }}</dd>

                  <dt class="col-sm-3">Create</dt>
                  <dd class="col-sm-9">{{ date('d M, Y', strtotime($user->created_at)) }}</dd>

                  <dt class="col-sm-3">Groups</dt>
                  <dd class="col-sm-9">

                    @forelse ($user->roles->pluck('name') as $item)
                      <span class="badge badge-info">{{ $item }}</span>
                    @empty
                      <span class="badge badge-danger">Tidak Ada Groups</span>
                    @endforelse
                  </dd>

                </dl>
                </p>
              </div>
              <div class="tab-pane  p-3" id="home" role="tabpanel">
                <h4 class="mt-0 header-title">Permissions Yang diIjinkan</h4>

                <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap"
                  style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Desc</th>
                      <th>Access</th>
                    </tr>
                  </thead>
                  
                </table>
              </div>


            </div>

          </div>
        </div>
      </div>
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
<script>
  $(document).ready(function() {
    var table = $('#datatable').DataTable({
      processing: true,
      serverSide: true, //aktifkan server-side
      ajax: {
        url: "{{ url('administrator/users/detail/') }}/{{ $user->id }}",
        type: 'GET'
      },
      columns: [{
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
      url: "{{ url('/administrator/users/assignpermission') }}",
      type: "post",
      data: {
        permission_name: idpermission,
        dataaccess: dataaccess,
        iduser: "{{ $user->id }}",
        _token: "{{ csrf_token() }}"
      },
      success: function(res, status) {
        console.log(res);
        $("#datatable").DataTable().ajax.reload();
        toastr.success(res.message, 'Sukses');
      },
      error: function(xhr) {
      toastr.error(xhr.responseJSON.message, 'Inconceivable!')
      }
    })
  });
</script>
@endsection
