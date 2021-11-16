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
        <h3 class="page-title">Detail</h3>
        <div class="d-inline-block align-items-center">
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ url('administrator/dashboard') }}"><i
                    class="mdi mdi-home-outline"></i></a></li>
              <li class="breadcrumb-item" aria-current="page">Dashboard</li>
              <li class="breadcrumb-item " aria-current="page"><a href="{{ url('administrator/users') }}">Users</a></li>
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
          <h4 class="box-title">Tab Detail User</h4>
          <h6 class="box-subtitle"></h6>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <!-- Nav tabs -->
          <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#profile" role="tab"><span><i
                    class="ion-home mr-15"></i>Profile</span></a> </li>
            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#permissions" role="tab"><span><i
                    class="ion-person mr-15"></i>Permissions</span></a> </li>
          </ul>
          <!-- Tab panes -->
          <div class="tab-content tabcontent-border">
            <div class="tab-pane active" id="profile" role="tabpanel">
              <div class="p-15">
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
            </div>
            <div class="tab-pane" id="permissions" role="tabpanel">
              <div class="p-15">
                <h4 class="mt-0 header-title">Permissions Yang diIjinkan</h4>

                 <table id="datatable" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
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
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>


  {{-- <div class="row">
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
  </div> --}}

</section>


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