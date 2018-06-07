<!DOCTYPE html>
<html class="no-focus" lang="en">

<head>
  @include('container.asset._metadata') @include('container._style')
</head>

<body>
  <!-- Error Content -->
  <div class="content text-center pulldown overflow-hidden">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <!-- Error Titles -->
        <h1 class="font-s128 font-w300 text-city animated flipInX">404</h1>
        <h2 class="h3 font-w300 push-50 animated fadeInUp">
          Maaf, Halaman yang anda cari tidak ada.
        </h2>
        <a href="{{url('/')}}" class="btn btn-primary">
          <i class="fa fa-home"></i> Home</a>
        <!-- END Error Titles -->
      </div>
    </div>
  </div>
  <!-- END Error Content -->
  @include('container._script')
</body>

</html>