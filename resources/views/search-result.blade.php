@extends('container.app') @section('content')
<!-- Main Container -->
<main id="main-container">
  <!-- Filter and Results -->
  <div class="bg-gray-lighter">
    <section class="content content-boxed">
      <div class="row">
        <div class="col-sm-12">
          <section class="content content-boxed" id="to_makanan">
            <div class="block">
              <div class="block-content form-horizontal bg-flat text-white">
                <p class="text-left">Hasil
                  <mark class="font-w600"> {{$menu->count()}} Menu </mark>
                </p>
              </div>
            </div>
          </section>
        </div>

        <div class="col-sm-12">
          <section class="content content-boxed" id="to_makanan">
            <!-- makanan -->
            @if(Session('menu') != null)
            <div class="row">
              <!-- menus -->
              @foreach($menu as $m)
              <div class="col-sm-4">
                <a class="block block-link-hover3" href="{{route('menu-detail',$m->id)}}">
                  <div class="block-content block-content-full text-center bg-warning ribbon ribbon-bookmark ribbon-crystal">
                    <div class="ribbon-box font-w600">
                      <b>Rp. {{$m->harga_menu}}</b>
                    </div>
                  </div>
                  <img class="img-responsive" src="{{asset('uploads/images/menu').'/'.$m->image_menu}}" alt="">

                  <div class="block-content block-content-full text-left">
                    <h4 class="">{{$m->nama_menu}}</h4>
                    <p class="">{{$m->deskripsi_menu}}</p>
                    <!-- <h3 class="">Rp. 5000</h3> -->
                  </div>
                  <div class="text-right block-content block-content-full">
                    stock :
                    <b>{{$m->stock_menu}}</b>
                  </div>
                </a>
              </div>
              @endforeach
              <!-- end menus -->
            </div>
            @endif
          </section>
        </div>
        <div class="col-sm-12">
          <center>
            {{$menu->render()}}
          </center>
        </div>
      </div>
    </section>
  </div>
  <!-- END Filter and Results -->
</main>
<!-- END Main Container -->
@endsection @section('_script')
<!-- Page JS Code -->
<script>
  jQuery(function () {
    // Init page helpers (Appear plugin)
    App.initHelpers('appear');
  });
</script>
@endsection