@extends('admin.container.admin') @section('_style') @endsection @section('content')
<!-- Main Container -->
<main id="main-container">
  <!-- Page Content -->
  <div class="content content-narrow">
    <!-- Simple Wizards -->
    <h2 class="content-heading">List Menu</h2>
    <div class="row">
      @foreach($menus as $menu)
      <div class="col-lg-6" id="list_menu1">
        <!-- Simple Classic Wizard (.js-wizard-simple class is initialized in js/pages/base_forms_wizard.js) -->
        <!-- For more examples you can check out http://vadimg.com/twitter-bootstrap-wizard-example/ -->
        <div class="js-wizard-simple block">
          <!-- Step Tabs -->
          <ul class="nav nav-tabs nav-justified">
            <li class="active">
              <a href="#simple-classic-step1" data-toggle="tab">Menu</a>
            </li>
            <li>
              <a href="#simple-classic-step2" data-toggle="tab">Details</a>
            </li>
          </ul>
          <!-- END Step Tabs -->

          <!-- Form -->
          <div class="form-horizontal">
            <!-- Steps Content -->
            <div class="block-content tab-content">
              <!-- Step 1 -->
              <div class="tab-pane push-30-t push-50 active" id="simple-classic-step1">
                <div class="form-group">
                  <div class="col-sm-10 col-sm-offset-1">
                    <label for="">
                      <h3>{{$menu->nama_menu}}</h3>
                    </label>
                    <img src="{{asset('assets/img/food/daging.jpg')}}" alt="" class="img-responsive" id="image_menu">
                  </div>
                </div>
              </div>
              <!-- END Step 1 -->

              <!-- Step 2 -->
              <div class="tab-pane push-30-t push-50" id="simple-classic-step2">
                <div class="form-group">
                  <div class="col-sm-10 col-sm-offset-1">
                    <div class="row">
                      <div class="col-sm-6">

                        <label for="simple-classic-details">Harga</label>
                        <p class="form-control">Rp. {{$menu->harga_menu}}</p>
                      </div>
                      <div class="col-sm-6">
                        <label for="simple-classic-details">Stok Tersedia</label>
                        <p class="form-control">
                          <b>{{$menu->stock_menu}}</b>
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-10 col-sm-offset-1">
                    <label for="simple-classic-details">Jenis Menu</label>
                    <p class="form-control">{{$menu->tipe_menu}}</p>
                  </div>
                </div>
              </div>
              <!-- END Step 2 -->

            </div>
            <!-- END Steps Content -->

            <!-- Steps Navigation -->
            <div class="block-content block-content-mini block-content-full border-t">
              <div class="row">
                <div class="col-xs-6">
                  <button class="wizard-prev btn btn-default" type="button">
                    <i class="fa fa-arrow-left"></i> Previous</button>
                </div>
                <div class="col-xs-6 text-right">
                  <button class="wizard-next btn btn-default" type="button">Next
                    <i class="fa fa-arrow-right"></i>
                  </button>
                  <button class="wizard-finish btn btn-danger" type="button" onclick="list_menu1()">
                    <i class="fa fa-exclamation-triangle"></i> Sold Out</button>
                  <script>
                    function list_menu1() {
                      document.getElementById("list_menu1").style.display = "none"
                    }
                  </script>
                  <button class="wizard-finish btn btn-success" type="button" onclick="javascript:window.location.href='tambah_menu.html'">
                    <i class="fa fa-exclamation-triangle"></i> Update</button>

                </div>
              </div>
              <!-- END Steps Navigation -->
          </div>
          <!-- END Form -->
          </div>
          <!-- END Simple Classic Wizard -->
        </div>

      </div>
      <!-- END Page Content -->
      @endforeach
    </div>
  </div>
</main>
<!-- END Main Container -->
@endsection @section('_script')
<!-- Page JS Plugins -->
<script src="assets/js/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
<script src="assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>

<!-- Page JS Code -->
<script src="assets/js/pages/base_forms_wizard.js"></script>
@endsection