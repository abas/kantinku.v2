@extends('container.app') @section('_style') @endsection @section('content')
<!-- Main Container -->
<main id="main-container">
  <!-- Live Previews -->
  <div class="bg-gray-lighter">
    <section class="content content-boxed" id="to_makanan">
      <!-- Section Content -->
      <h3 class="font-w400 text-black push-30-t push-20">Explore Makanan</h3>
      <div class="row">
        @if($makanans->count() > 0) @foreach($makanans as $makanan)
        <!-- menus -->
        <div class="col-sm-4">
          <a class="block block-link-hover3" href="{{route('menu-detail',$makanan->id)}}">
            <div class="block-content block-content-full text-center bg-warning ribbon ribbon-bookmark ribbon-crystal">
              <div class="ribbon-box font-w600">
                <b>Rp {{$makanan->harga_menu}}</b>
              </div>
            </div>
            @if($makanan->image_menu == null)
              <img class="img-responsive" src="{{asset('assets/img/food/aneka-gorengan.jpg')}}" alt="">
            @else
              <img class="img-responsive" src="{{asset('uploads/images/menu/').'/'.$makanan->image_menu}}" alt="">
            @endif
            <div class="block-content block-content-full text-left">
              <h4 class="">{{$makanan->nama_menu}}</h4>
              <p>
                {{$makanan->deskripsi_menu}}
              </p>
            </div>
            <div class="text-right block-content block-content-full">
              stock :
              <b>{{$makanan->stock_menu}}</b>
            </div>
          </a>
        </div>
        @endforeach
        <center class="col-sm-12 text-warning">
          <h4>{{$makanans->render()}}</h4>
        </center>
        @else
        <div class="col-sm-12">
          <div class="block block-link-hover2">
            <div class="alert alert-danger">
              <b>makanan</b> tidak tersedia untuk saat ini.
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