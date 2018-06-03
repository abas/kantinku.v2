@extends('admin.container.admin') @section('_style') @endsection @section('content')
<!-- Main Container -->
<main id="main-container">
  <!-- Page Header -->
  <div class="content bg-gray-lighter">
    <div class="row items-push">
      <div class="col-sm-8">
        <h1 class="page-heading">
          Tambah Menu
          <small>Tambah menu
            <b>makanan</b> atau
            <b>minuman</b> yang ingin anda jual.</small>
        </h1>
      </div>
      <div class="col-sm-4 text-right hidden-xs">
        <ol class="breadcrumb push-10-t">
          <li>Forms</li>
          <li>
            <a class="link-effect" href="">Wizard</a>
          </li>
        </ol>
      </div>
    </div>
  </div>
  <!-- END Page Header -->

  <!-- Page Content -->
  <div class="content content-narrow">
    <!-- Simple Wizards -->
    <h2 class="content-heading">Tambah Menu</h2>
    <div class="row">
      <div class="col-lg-6">
        <!-- Simple Classic Wizard (.js-wizard-simple class is initialized in js/pages/base_forms_wizard.js) -->
        <!-- For more examples you can check out http://vadimg.com/twitter-bootstrap-wizard-example/ -->
        <div class="js-wizard-simple block">
          <!-- Step Tabs -->
          <ul class="nav nav-tabs nav-justified">
            <li class="active">
              <a href="#simple-classic-step1" data-toggle="tab">Makanan</a>
            </li>
            <li>
              <a href="#simple-classic-step2" data-toggle="tab">Details</a>
            </li>
            <li>
              <a href="#simple-classic-step3" data-toggle="tab"></a>
            </li>
          </ul>
          <!-- END Step Tabs -->

          <!-- Form -->
          <form 
            class="js-validation-bootstrap form-horizontal" 
            action="{{route('postAddmenu')}}" 
            method="post">
            @csrf
            @if($errors)
            {{$errors}}
            @endif
            @if(session('msg'))
              {{session('msg')}}
            @endif
            <!-- Steps Content -->
            <div class="block-content tab-content">
              <!-- Step 1 -->
              <div class="tab-pane push-30-t push-50 active" id="simple-classic-step1">
                <div class="form-group">
                  <div class="col-sm-10 col-sm-offset-1">
                    <label for="simple-classic-city">Harga Makanan</label>
                    <input 
                      class="form-control" 
                      type="number" 
                      id="simple-classic-city" 
                      name="harga_menu" 
                      min="100"
                      max="1000000"
                      placeholder="Harga Makanan ?">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-10 col-sm-offset-1">
                    <label for="val-digits">Stok Makanan
                      <span class="text-danger">*</span>
                    </label>
                    <input 
                      class="form-control" 
                      type="text" 
                      id="val-digits" 
                      name="stock_menu" 
                      placeholder="3">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-10 col-sm-offset-1">
                    <label class="val-digits" for="foto-makanan">Foto Makanan</label>
                    <div class="col-xs-12">
                      <input 
                        type="file" 
                        id="foto-makanan" 
                        name="image_menu">
                    </div>
                  </div>
                </div>
              </div>
              <!-- END Step 1 -->

              <!-- Step 2 -->
              <div class="tab-pane push-30-t push-50" id="simple-classic-step2">
                <div class="form-group">
                  <div class="col-sm-10 col-sm-offset-1">
                    <label for="val-digits">Nama Menu
                      <span class="text-danger">*</span>
                    </label>
                    <input 
                      class="form-control" 
                      type="text" 
                      id="val-digits" 
                      name="nama_menu" 
                      placeholder="nama menu ?">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-10 col-sm-offset-1">
                    <label for="simple-classic-details">Details</label>
                    <textarea 
                      class="form-control" 
                      id="simple-classic-details" 
                      name="deskripsi_menu" 
                      rows="9" 
                      placeholder="Detail pesanan"></textarea>
                  </div>
                </div>
              </div>
              <!-- END Step 2 -->
              <input type="text" name="tipe_menu" style="display:none" value="makanan">
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
                  <button class="wizard-finish btn btn-primary" type="submit">
                    <i class="fa fa-check"></i> Submit</button>
                </div>
              </div>
            </div>
            <!-- END Steps Navigation -->
          </form>
          <!-- END Form -->
        </div>
        <!-- END Simple Classic Wizard -->
      </div>
      <div class="col-lg-6">
        <!-- Simple Classic Wizard (.js-wizard-simple class is initialized in js/pages/base_forms_wizard.js) -->
        <!-- For more examples you can check out http://vadimg.com/twitter-bootstrap-wizard-example/ -->
        <div class="js-wizard-simple block">
          <!-- Step Tabs -->
          <ul class="nav nav-tabs nav-justified">
            <li class="active">
              <a href="#simple-classic-step1-minuman" data-toggle="tab">Minuman</a>
            </li>
            <li>
              <a href="#simple-classic-step2-minuman" data-toggle="tab">Details</a>
            </li>
            <li>
              <a href="#simple-classic-step3" data-toggle="tab"></a>
            </li>
          </ul>
          <!-- END Step Tabs -->

          <!-- Form -->
          <form class="js-validation-bootstrap form-horizontal" action="list_menu.html" method="post">
            <!-- Steps Content -->
            <div class="block-content tab-content">
              <!-- Step 1 -->
              <div class="tab-pane push-30-t push-50 active" id="simple-classic-step1-minuman">
                <div class="form-group">
                  <div class="col-sm-10 col-sm-offset-1">
                    <label for="simple-classic-city">Jenis Pemesanan</label>
                    <!-- <select name="jenis_pemesanan" id="">
                                                    <option value="">...</option>
                                                    <option value=""></option>
                                                </select> -->

                    <!-- <input class="form-control" type="text" id="simple-classic-city" name="simple-classic-city" placeholder="Nama Makanan ?"> -->
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-10 col-sm-offset-1">
                    <label for="simple-classic-city">Harga Minuman</label>
                    <input class="form-control" type="text" id="simple-classic-city" name="simple-classic-city" placeholder="Harga Makanan ?">
                  </div>
                </div>
                <!-- <div class="form-group">
                                            <div class="col-sm-10 col-sm-offset-1">
                                                <label for="simple-classic-details">Deskripsi Makanan</label>
                                                <textarea class="form-control" id="simple-classic-details" name="simple-classic-details" rows="9" placeholder="Masukan deskripsi makanan"></textarea>
                                            </div>
                                        </div> -->
                <div class="form-group">
                  <div class="col-sm-10 col-sm-offset-1">
                    <label for="val-digits">Stok Minuman
                      <span class="text-danger">*</span>
                    </label>
                    <input class="form-control" type="text" id="val-digits" name="val-digits" placeholder="3">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-10 col-sm-offset-1">
                    <label class="val-digits" for="foto-makanan">Foto Minuman</label>
                    <div class="col-xs-12">
                      <input type="file" id="foto-makanan" name="foto-makanan">
                    </div>
                  </div>
                </div>
              </div>
              <!-- END Step 1 -->

              <!-- Step 2 -->
              <div class="tab-pane push-30-t push-50" id="simple-classic-step2-minuman">
                <div class="form-group">
                  <div class="col-sm-8 col-sm-offset-2">
                    <label for="simple-classic-details">Details</label>
                    <textarea class="form-control" id="simple-classic-details" name="simple-classic-details" rows="9" placeholder="Detail pesanan"></textarea>
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
                  <button class="wizard-finish btn btn-primary" type="submit">
                    <i class="fa fa-check"></i> Submit</button>
                </div>
              </div>
            </div>
            <!-- END Steps Navigation -->
          </form>
          <!-- END Form -->
        </div>
        <!-- END Simple Classic Wizard -->
      </div>
      <!-- END Simple Wizards -->
    </div>
    <!-- END Page Content -->
</main>
<!-- END Main Container -->
@endsection @section('_script')
<!-- Page JS Plugins -->
<script src="assets/js/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
<script src="assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>

<!-- Page JS Code -->
<script src="assets/js/pages/base_forms_wizard.js"></script>
@endsection