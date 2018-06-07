@extends('container.app') @section('_style') @endsection @section('content')
<!-- Main Container -->
<main id="main-container">
  <!-- Live Previews -->
  <div class="bg-gray-lighter">
    <section class="content content-boxed" id="to_minuman">
      <!-- Section Content -->
      <h3 class="font-w400 text-black push-30-t push-20">Explore Minuman</h3>
      <div class="row">
        @if($minumans->count() > 0) @foreach($minumans as $minuman)
        <!-- menus -->
        <div class="col-sm-4">
          <a class="block block-link-hover3" href="{{route('menu-detail',$minuman->id)}}">
            <div class="block-content block-content-full text-center bg-flat ribbon ribbon-bookmark ribbon-crystal">
              <div class="ribbon-box font-w600">
                <b>Rp {{$minuman->harga_menu}}</b>
              </div>
            </div>
            <img class="img-responsive" src="{{asset('assets/img/food/es-teh.jpg')}}" alt="">

            <div class="block-content block-content-full text-left">
              <h4 class="">{{$minuman->nama_menu}}</h4>
              <p>
                {{$minuman->deskripsi_menu}}
              </p>
            </div>
            <div class="text-right block-content block-content-full">
              stock :
              <b>{{$minuman->stock_menu}}</b>
            </div>
          </a>
        </div>
        @endforeach
        <center class="col-sm-12 text-warning">
          <h4>{{$minumans->render()}}</h4>
        </center>
        @else
        <div class="col-sm-12">
          <div class="block block-link-hover2">
            <div class="alert alert-danger">
              <b>minuman</b> tidak tersedia untuk saat ini.
            </div>
          </div>
        </div>
        @endif
      </div>
      <!-- END Section Content -->
    </section>
  </div>
  <!-- END Live Previews -->
</main>
<!-- END Main Container -->
@endsection @section('_script')
<!-- Page JS Code -->
<script src="assets/js/plugins/jquery-vide/jquery.vide.min.js"></script>
<script>
  jQuery(function () {
    // Init page helpers (Appear plugin)
    App.initHelpers('appear');
  });
</script>
@endsection