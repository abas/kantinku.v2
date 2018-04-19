@extends('layouts.app') @section('content')

  <!-- Page Container -->
  <div id="page-container">
    <!-- Header -->
    <header id="header-navbar" class="content-mini content-mini-full">
      <!-- Header Navigation Right -->
      <ul class="nav-header pull-right">
        <li>
          <div class="btn-group">
            <button class="btn btn-primary btn-image dropdown-toggle" data-toggle="dropdown" type="button">
              <img src="assets/img/avatars/avatar10.jpg" alt="Avatar"> Accounts
              <span class="caret"></span>
            </button>
            <ul class="dropdown-menu dropdown-menu-right">
              <li class="dropdown-header">Profile</li>
              <li>
                <a tabindex="-1" href="dashboard.html">
                  <i class="si si-settings pull-right"></i>Dashboard
                </a>
              </li>
              <li class="divider"></li>
              <li class="dropdown-header">Actions</li>
              <li>
                <a tabindex="-1" href="login.html">
                  <i class="si si-lock pull-right"></i>Login
                </a>
              </li>
              <li>
                <a tabindex="-1" href="register.html">
                  <i class="si si-logout pull-right"></i>Log out
                </a>
              </li>
            </ul>
          </div>
        </li>
        <!-- <li>
                    <button class="btn btn-default" data-toggle="layout" data-action="side_overlay_toggle" type="button">
                        <i class="fa fa-tasks"></i>
                    </button>
                </li> -->
      </ul>
      <!-- END Header Navigation Right -->

      <!-- Header Navigation Left -->
      <ul class="nav-header pull-left">

        <li>
          <!-- Opens the Apps modal found at the bottom of the page, before including JS code -->
          <a href="index.html" class="btn pull-right">
            <i class="fa fa-circle-o-notch text-primary push-5-r"></i>KantinKU
          </a>
        </li>
        <li class="visible-xs">
          <!-- Toggle class helper (for .js-header-search below), functionality initialized in App() -> uiToggleClass() -->
          <button class="btn btn-default" data-toggle="class-toggle" data-target=".js-header-search" data-class="header-search-xs-visible"
            type="button">
            <i class="fa fa-search"></i>
          </button>
        </li>
        <li class="js-header-search header-search">
          <form class="form-horizontal" action="search_result.html" method="post">
            <div class="form-material form-material-primary input-group remove-margin-t remove-margin-b">
              <input class="form-control" type="text" id="base-material-text" name="base-material-text" placeholder="Search..">
              <span class="input-group-addon">
                <i class="si si-magnifier"></i>
              </span>
            </div>
          </form>
        </li>
      </ul>
      <!-- END Header Navigation Left -->
    </header>
    <!-- END Header -->
    <!-- Main Container -->
    <main id="main-container">
      <!-- Header Navigation Right -->
      <ul class="nav-header pull-right">
        <li>
          <div class="btn-group">
            <button class="btn btn-default btn-image dropdown-toggle" data-toggle="dropdown" type="button">
              <img src="assets/img/avatars/avatar10.jpg" alt="Avatar">
              <span class="caret"></span>
            </button>
            <ul class="dropdown-menu dropdown-menu-right">
              <li class="dropdown-header">Profile</li>
              <li>
                <a tabindex="-1" href="javascript:void(0)">
                  <i class="si si-settings pull-right"></i>Dashboard
                </a>
              </li>
              <li class="divider"></li>
              <li class="dropdown-header">Actions</li>
              <li>
                <a tabindex="-1" href="login.html">
                  <i class="si si-lock pull-right"></i>Login
                </a>
              </li>
              <li>
                <a tabindex="-1" href="register.html">
                  <i class="si si-logout pull-right"></i>Log out
                </a>
              </li>
            </ul>
          </div>
        </li>
        <li>
          <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
          <button class="btn btn-default" data-toggle="layout" data-action="side_overlay_toggle" type="button">
            <i class="fa fa-tasks"></i>
          </button>
        </li>
      </ul>
      <!-- END Header Navigation Right -->
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
                  href="register.html">Bikin Kantin</a>
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
            <!-- menus -->
            <div class="col-sm-4">
              <a class="block block-link-hover3" href="detail_menu_gorengan.html">
                <div class="block-content block-content-full text-center bg-warning ribbon ribbon-bookmark ribbon-crystal">
                  <div class="ribbon-box font-w600">
                    <b>Rp 500</b>
                  </div>
                </div>
                <img class="img-responsive" src="assets/img/food/aneka-gorengan.jpg" alt="">

                <div class="block-content block-content-full text-left">
                  <h4 class="">Aneka Gorengan</h4>
                  <p class="">Gorengan asli dua kelinci lumer dan juicy minyaknya. Bisa buat kamu kamu yang pengen jadi ndut.</p>
                  <!-- <h3 class="">Rp. 5000</h3> -->
                </div>
                <div class="text-right block-content block-content-full">
                  stock :
                  <b>100</b>
                </div>
              </a>
            </div>
            <!-- menus -->
            <div class="col-sm-4">
              <a class="block block-link-hover3" href="detail_menu_daging.html">
                <div class="block-content block-content-full text-center bg-warning ribbon ribbon-bookmark ribbon-crystal">
                  <div class="ribbon-box font-w600">
                    <b>Rp 10000</b>
                  </div>
                </div>
                <img class="img-responsive" src="assets/img/food/daging.jpg" alt="">

                <div class="block-content block-content-full text-left">
                  <h4 class="">Rica-Rica Daging Sapi</h4>
                  <p class="">Daging sapi asli segar dan lembut digoreng tanpa pengawet.</p>
                  <!-- <h3 class="">Rp. 5000</h3> -->
                </div>
                <div class="text-right block-content block-content-full">
                  stock :
                  <b>43</b>
                </div>
              </a>
            </div>
            <!-- menus -->
            <div class="col-sm-4">
              <a class="block block-link-hover3" href="detail_menu_pecel_lele.html">
                <div class="block-content block-content-full text-center bg-warning ribbon ribbon-bookmark ribbon-crystal">
                  <div class="ribbon-box font-w600">
                    <b>Rp 7500</b>
                  </div>
                </div>
                <img class="img-responsive" src="assets/img/food/pecel-lele.jpg" alt="">

                <div class="block-content block-content-full text-left">
                  <h4 class="">Pecel Lele</h4>
                  <p class="">Laper? Jangan Baper! Dateng aja ke kantin kita dan nikmati pecel lele nikmat tidak bikin kembung.</p>
                  <!-- <h3 class="">Rp. 5000</h3> -->
                </div>
                <div class="text-right block-content block-content-full">
                  stock :
                  <b>36</b>
                </div>
              </a>
            </div>
            <!-- end menus -->
          </div>
          <div class="row">
            <!-- menus -->
            <div class="col-sm-4">
              <a class="block block-link-hover3" href="detail_menu_coklat.html">
                <div class="block-content block-content-full text-center bg-warning ribbon ribbon-bookmark ribbon-crystal">
                  <div class="ribbon-box font-w600">
                    <b>Rp 12500</b>
                  </div>
                </div>
                <img class="img-responsive" src="assets/img/food/coklat.jpg" alt="">

                <div class="block-content block-content-full text-left">
                  <h4 class="">Batte Batte Chocolate</h4>
                  <p class="">Coklat lumer dengan taburan micin diatasnya. Beserta irisan coklat nikmat aman diperut.</p>
                  <!-- <h3 class="">Rp. 5000</h3> -->
                </div>
                <div class="text-right block-content block-content-full">
                  stock :
                  <b>50</b>
                </div>
              </a>
            </div>
            <!-- menus -->
            <div class="col-sm-4">
              <a class="block block-link-hover3" href="detail_menu_nastar.html">
                <div class="block-content block-content-full text-center bg-warning ribbon ribbon-bookmark ribbon-crystal">
                  <div class="ribbon-box font-w600">
                    <b>Rp 7000</b>
                  </div>
                </div>
                <img class="img-responsive" src="assets/img/food/nastar.jpg" alt="">

                <div class="block-content block-content-full text-left">
                  <h4 class="">Nastar Cake</h4>
                  <p class="">Kue kering nastar bertabur kacang. Tapi paling engga kamu ga bakal dikacangin kaya chat doi.</p>
                  <!-- <h3 class="">Rp. 5000</h3> -->
                </div>
                <div class="text-right block-content block-content-full">
                  stock :
                  <b>43</b>
                </div>
              </a>
            </div>
            <!-- menus -->
            <div class="col-sm-4">
              <a class="block block-link-hover3" href="detail_menu_pizza.html">
                <div class="block-content block-content-full text-center bg-warning ribbon ribbon-bookmark ribbon-crystal">
                  <div class="ribbon-box font-w600">
                    <b>Rp 10000</b>
                  </div>
                </div>
                <img class="img-responsive" src="assets/img/food/pizza.jpg" alt="">

                <div class="block-content block-content-full text-left">
                  <h4 class="">Mozarella Pizza</h4>
                  <p class="">Pizza lumer yang bikin nagih kaya chatingan sama doi.</p>
                  <!-- <h3 class="">Rp. 5000</h3> -->
                </div>
                <div class="text-right block-content block-content-full">
                  stock :
                  <b>100</b>
                </div>
              </a>
            </div>
            <!-- end menus -->
          </div>
          <h3 class="font-w400 text-black push-50-t push-20">Minuman Tersedia</h3>
          <div class="row">
            <!-- menus -->
            <div class="col-sm-4">
              <a class="block block-link-hover3" href="detail_menu_es_teh.html">
                <div class="block-content block-content-full text-center bg-flat ribbon ribbon-bookmark ribbon-crystal">
                  <div class="ribbon-box font-w600">
                    <b>Rp 8000</b>
                  </div>
                </div>
                <img class="img-responsive" src="assets/img/food/es-teh.jpg" alt="">

                <div class="block-content block-content-full text-left">
                  <h4 class="">Ice Tea</h4>
                  <p class="">Mahal ? iya lah orang namanya Ice Tea bukan Esteh.</p>
                  <!-- <h3 class="">Rp. 5000</h3> -->
                </div>
                <div class="text-right block-content block-content-full">
                  stock :
                  <b>115</b>
                </div>
              </a>
            </div>
            <!-- menus -->
            <div class="col-sm-4">
              <a class="block block-link-hover3" href="detail_menu_jus_mangga.html">
                <div class="block-content block-content-full text-center bg-flat ribbon ribbon-bookmark ribbon-crystal">
                  <div class="ribbon-box font-w600">
                    <b>Rp 5500</b>
                  </div>
                </div>
                <img class="img-responsive" src="assets/img/food/jus-mangga.png" alt="">

                <div class="block-content block-content-full text-left">
                  <h4 class="">Jus Mangga</h4>
                  <p class="">Mangga langsung di petik dari pohonnya.</p>
                  <!-- <h3 class="">Rp. 5000</h3> -->
                </div>
                <div class="text-right block-content block-content-full">
                  stock :
                  <b>50</b>
                </div>
              </a>
            </div>
            <!-- menus -->
            <div class="col-sm-4">
              <a class="block block-link-hover3" href="detail_menu_jus_alpukat.html">
                <div class="block-content block-content-full text-center bg-flat ribbon ribbon-bookmark ribbon-crystal">
                  <div class="ribbon-box font-w600">
                    <b>Rp 6000</b>
                  </div>
                </div>
                <img class="img-responsive" src="assets/img/food/jus-alpukat.jpg" alt="">

                <div class="block-content block-content-full text-left">
                  <h4 class="">Jus Alpukat</h4>
                  <p class="">Haus kaks? coba jus alpukat segerrr.</p>
                  <!-- <h3 class="">Rp. 5000</h3> -->
                </div>
                <div class="text-right block-content block-content-full">
                  stock :
                  <b>25</b>
                </div>
              </a>
            </div>
            <!-- end menus -->
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


  @endsection