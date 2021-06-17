@if (Session::has('flash_message_success'))
<div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
  </button>
  <strong>Success!</strong> {!! session('flash_message_success') !!}
</div>
@endif

@if (Session::has('flash_message_error'))
<div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
  </button>
  <strong>Oh snap!</strong> {!! session('flash_message_error') !!}
</div>
@endif

@if (Session::has('flash_message_warning'))
<div class="alert alert-warning alert-dismissible fade show mb-0" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
  </button>
  <strong>Oh Warning!</strong> {!! session('flash_message_warning') !!}
</div>
@endif

@if (count($errors) > 0)
@foreach ($errors->all() as $error)
<div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
  </button>
  <strong>Oh Warning!</strong>  {{ $error }}
</div>
 @endforeach
@endif