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
              <h4 class="page-title m-0">Users List</h4>
            </div>
            <div class="col-md-4">
              <div class="float-right d-none d-md-block">
                <div class="dropdown">
                  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="ti-settings mr-1"></i> Menu
                  </button>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated">
                    <button class="dropdown-item" id="btn-tambah" data-toggle="modal" data-target="#myModal">Add
                      Users</button>
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
      <div class="col-12">
        <div class="card m-b-30">
          <div class="card-body">

            <h4 class="mt-0 header-title">All List Users</h4>

            <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap"
              style="border-collapse: collapse; border-spacing: 0; width: 100%;">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>email</th>
                  <th>created</th>
                  <th>Aksi</th>
                </tr>
              </thead>


              <tbody>

              </tbody>
            </table>

          </div>
        </div>
      </div> <!-- end col -->
    </div>

  </div>


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
        <form action="{{ url('administrator/users/add') }}" method="post" id="forms"> @csrf
          <input type="hidden" name="id_edit" id="id_edit" />
          <div class="modal-body">
            <div class="form-group">
              <label>Pilih Roles</label>
              <select class="form-control" name="role" id="role" required>
                <option value="">Pilih Roles</option>
                @foreach ($role as $item)
                  <option value="{{ $item->name }}">{{ $item->name }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label>Name</label>
              <input type="text" class="form-control" value="{{ old('name') }}" name="name" id="name" required
                placeholder:="Name" />
            </div>

            <div class="form-group">
              <label>Email</label>
              <input data-parsley-type="email" type="text" value="{{ old('email') }}" name="email" id="email"
                class="form-control" required />
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" value="{{ old('password') }}" name="password" class="form-control" />
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
          url: "{{ url('administrator/users') }}",
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
            data: 'email',
            name: 'email'
          },
          {
            data: 'created',
            name: 'created'
          },
          {
            data: 'aksi',
            name: 'aksi'
          },
        ],
      })
    });

    $('#myModal').on('hidden.bs.modal', function(e) {
      $('#forms').attr('action', "{{ url('/administrator/users/add') }}")
      $('#forms')[0].reset();
    })


    $(document).on('submit', 'form', function(event) {
      event.preventDefault();
      $.ajax({
        url: $(this).attr('action'),
        type: $(this).attr('method'),
        typeData: "JSON",
        data: new FormData(this),
        processData: false,
        contentType: false,
        success: function(res) {
          $('#btn-close').click();
          $("#datatable").DataTable().ajax.reload();
          toastr.success(res.message, 'Sukses');
          $('#forms')[0].reset();
        },
        error: function(xhr) {
          toastr.error(xhr.responseJSON.message, 'Inconceivable!')
        }
      })
    })

    $(document).on('click', '.edit', function() {
      $('#forms').attr('action', "{{ url('/administrator/users/update') }}")
      let id = $(this).attr('id');
      $.ajax({
        url: "{{ url('/administrator/users/edit') }}",
        type: "post",
        data: {
          id: id,
          _token: "{{ csrf_token() }}"
        },
        success: function(res) {
          // console.log(res.roles[0].name);
          $('#btn-tambah').click();
          $('#id_edit').val(res.id);
          $('#name').val(res.name);
          $('#email').val(res.email);
          $('#role').val(res.roles[0].name);
        },
        error: function(xhr) {
          toastr.error(xhr.responseJSON.message, 'Inconceivable!');
        }
      })
    })


    $(document).on('click', '.hapus', function() {
      let id_del = $(this).attr('id');
      //  console.log(id_del);
      Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: "{{ url('/administrator/users/del') }}",
            type: "post",
            data: {
              id: id_del,
              _token: "{{ csrf_token() }}"
            },
            success: function(res, status) {
              if (status = '200') {
                setTimeout(() => {
                  Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Data Berhasil di Hapus',
                    showConfirmButton: false,
                    timer: 1500
                  }).then((res) => {
                    $("#datatable").DataTable().ajax.reload();
                  })
                })
              }
            },
            error: function(xhr) {
              Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Something went wrong!',
                footer: 'Gagal Menghapus'
              })
            }
          })
        }
      })
    })


    $(document).on('click', '.detail', function() {
      let id_detail = $(this).attr('id');
      window.location.replace("{{ url('administrator/users/detail/') }}/" + id_detail);
    })

  </script>

@endsection
