@extends('container.app') @section('_style') @endsection @section('content')
<!-- Main Container -->
<main id="main-container">
  <!-- Hero Content -->
  <div class="bg-video" data-vide-bg="assets/img/videos/hero_tech" data-vide-options="posterType: jpg, position: 50% 75%">
    <div class="bg-primary-dark-op">
      <section class="content content-full content-boxed">
        <!-- Section Content -->
        <br>
        <br>
        <br>
        <div class="text-center push-30-t visibility-hidden" data-toggle="appear" data-class="animated fadeIn">
          <a class="fa-2x text-white" href="">
            <i class="fa fa-circle-o-notch text-primary push-5-r"></i>KantinKU
          </a>
        </div>
        <div class="push-100-t push-50 text-center">
          <h1 class="h2 font-w700 text-white push-20 visibility-hidden" data-toggle="appear" data-class="animated fadeInDown">
            < / Kantin Kampus Udinus>
          </h1>
          <h2 class="h4 text-white-op visibility-hidden" data-toggle="appear" data-timeout="750" data-class="animated fadeIn">
            <em>beli makanan dan minuman menjadi lebih mudah.</em>
          </h2>
          <div class="push-50-t push-20 text-center">
            <a class="btn btn-rounded btn-noborder btn-lg btn-primary push-5 visibility-hidden" data-toggle="appear" data-class="animated fadeInRight"
              href="#to_makanan">Ayo Jajan!</a>
            <a class="btn push-5 text-white visibility-hidden" data-toggle="appear" data-class="animated fadeInRight">or</a>
            <a class="btn btn-rounded btn-noborder btn-lg btn-success push-5 visibility-hidden" data-toggle="appear" data-class="animated fadeInRight"
              href="{{route('dashboard')}}">Bikin Kantin</a>
          </div>
          <br>
          <br>
          <br>
        </div>
        <!-- END Section Content -->
      </section>
    </div>
  </div>
  <!-- END Hero Content -->

  <!-- Live Previews -->
  <div class="bg-gray-lighter">
    <section class="content content-boxed" id="to_makanan">
      <!-- Section Content -->
      <h3 class="font-w400 text-black push-30-t push-20">Makanan Tersedia</h3>
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
            @if($makanan->image_menu != null)
            <img class="img-responsive" src="{{asset('uploads/images/menu/'.$makanan->image_menu)}}" alt="">
            @else
            <img class="img-responsive" src="assets/img/food/aneka-gorengan.jpg" alt="">
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
        <center class="col-sm-12">
          <div class="card">
            <a class="btn btn-rounded text-white bg-warning" href="{{route('exp-makanans')}}">
              <i class="fa fa-arrow-right pull-right"></i>Explore Makanan </i>
            </a>
          </div>
        </center>
        <!-- <center class="col-sm-12 text-warning">
          <h4>{{$makanans->render()}}</h4>
        </center> -->
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
      <!-- break point -->
      <h3 class="font-w400 text-black push-50-t push-20">Minuman Tersedia</h3>
      <div class="row">
        @if($minumans->count() > 0) @foreach($minumans as $minuman)
        <!-- menus -->
        <div class="col-sm-4">
          <a class="block block-link-hover3" href="{{route('menu-detail',$minuman->id)}}">
            <div class="block-content block-content-full text-center bg-flat ribbon ribbon-bookmark ribbon-crystal">
              <div class="ribbon-box font-w600">
                <b class="priceFormat">{{$minuman->harga_menu}}</b>
              </div>
            </div>
            @if($minuman->image_menu!=null)
            <img class="img-responsive" src="{{asset('uploads/images/menu/'.$minuman->image_menu)}}" alt="">
            @else
            <img class="img-responsive" src="{{asset('assets/img/food/es-teh.jpg')}}" alt="">
            @endif
            <div class="block-content block-content-full text-left">
              <h4 class="">{{$minuman->nama_menu}}</h4>
              <p class="">{{$minuman->deskripsi_menu}}</p>
              <!-- <h3 class="">Rp. 5000</h3> -->
            </div>
            <div class="text-right block-content block-content-full">
              stock :
              <b>{{$minuman->stock_menu}}</b>
            </div>
          </a>
        </div>
        @endforeach
        <center class="col-sm-12 text-flat">
          <div class="card">
            <a class="btn btn-rounded text-white bg-flat" href="{{route('exp-minumans')}}">
              <i class="fa fa-arrow-right pull-right"></i>Explore Minuman </i>
            </a>
            <br>
            <br>
          </div>
        </center>
        <!-- <center class="col-sm-12 text-flat">
            <h4>{{$makanans->render()}}</h1>
        </center> -->
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

  <!-- Features -->
  <!-- <div class="bg-white">
                <section class="content content-boxed">
                    <center>
                        <h2 class="font-w400 text-black push-50-t push-20">Kantin Terdaftar</h2>
                    </center>

                    <div class="row items-push-3x push-50-t nice-copy">
                        <div class="col-sm-4">
                            <div class="text-center push-30">
                                <span class="item item-2x item-circle border">
                                    <i class=" glyphicon-apple text-city"></i>
                                </span>
                            </div>
                            <h3 class="h5 font-w600 text-uppercase text-center push-10">One Powerful Layout</h3>
                            <p>OneUI’s layout was built from the ground up to be flexible, lightweight and easy to use. It will
                                enable you to build backend and frontend pages that look and work great.</p>
                        </div>
                        <div class="col-sm-4">
                            <div class="text-center push-30">
                                <span class="item item-2x item-circle border">
                                    <i class="si si-rocket text-success"></i>
                                </span>
                            </div>
                            <h3 class="h5 font-w600 text-uppercase text-center push-10">Bootstrap Powered</h3>
                            <p>Bootstrap is a sleek, intuitive, and powerful mobile first front-end framework for faster and
                                easier web development. OneUI was built on top, extending it to a large degree.</p>
                        </div>
                        <div class="col-sm-4">
                            <div class="text-center push">
                                <span class="item item-2x item-circle border">
                                    <i class="si si-screen-smartphone text-flat"></i>
                                </span>
                            </div>
                            <h3 class="h5 font-w600 text-uppercase text-center push-10">Fully Responsive</h3>
                            <p>The User Interface will adjust to any screen size. It will look great on mobile devices and desktops
                                at the same time. No need to worry about the UI, just stay focused on the development.</p>
                        </div>
                    </div>
                </section>
            </div> -->
  <!-- END Features -->

  <!-- Ratings -->
  <!-- <div class="bg-image" style="background-image: url('assets/img/photos/photo36@2x.jpg');">
                <div class="bg-primary-dark-op">
                    <section class="content content-full content-boxed overflow-hidden">
                        <div class="row items-push-2x push-50-t">
                            <div class="col-sm-4 visibility-hidden" data-toggle="appear">
                                <div class="text-warning push-10-t push-15">
                                    <i class="fa fa-fw fa-star"></i>
                                    <i class="fa fa-fw fa-star"></i>
                                    <i class="fa fa-fw fa-star"></i>
                                    <i class="fa fa-fw fa-star"></i>
                                    <i class="fa fa-fw fa-star"></i>
                                </div>
                                <div class="h4 text-white-op push-5">It's awesome, not only the design is marvelous, the code and documentation helps easy customization.</div>
                                <div class="h6 text-gray">For Design Quality by
                                    <em>alperaydyn2</em>
                                </div>
                            </div>
                            <div class="col-sm-4 visibility-hidden" data-toggle="appear" data-timeout="150">
                                <div class="text-warning push-10-t push-15">
                                    <i class="fa fa-fw fa-star"></i>
                                    <i class="fa fa-fw fa-star"></i>
                                    <i class="fa fa-fw fa-star"></i>
                                    <i class="fa fa-fw fa-star"></i>
                                    <i class="fa fa-fw fa-star"></i>
                                </div>
                                <div class="h4 text-white-op push-5">Awesome !!! Thanks for a so great template !!</div>
                                <div class="h6 text-gray">For Feature Availability by
                                    <em>Markuitos</em>
                                </div>
                            </div>
                            <div class="col-sm-4 visibility-hidden" data-toggle="appear" data-timeout="300">
                                <div class="text-warning push-10-t push-15">
                                    <i class="fa fa-fw fa-star"></i>
                                    <i class="fa fa-fw fa-star"></i>
                                    <i class="fa fa-fw fa-star"></i>
                                    <i class="fa fa-fw fa-star"></i>
                                    <i class="fa fa-fw fa-star"></i>
                                </div>
                                <div class="h4 text-white-op push-5">Awesome code, works really well, well documented!</div>
                                <div class="h6 text-gray">For Flexibility by
                                    <em>corverdevelopment</em>
                                </div>
                            </div>
                        </div>
                        <div class="h5 text-center visibility-hidden" data-toggle="appear" data-class="animated fadeInUp">
                            <span class="text-gray">Would you like to read more reviews and testimonials? You can find them over at
                                <a class="text-primary-light" href="http://goo.gl/6LF10W">OneUI page on Themeforest</a>.</span>
                        </div>
                    </section>
                </div>
            </div> -->
  <!-- END Ratings -->
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