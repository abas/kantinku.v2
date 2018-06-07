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
            <b>minuman</b> atau
            <b>inuman</b> yang ingin anda jual.</small>
        </h1>
      </div>
      <div class="col-sm-4 text-right hidden-xs">
        <ol class="breadcrumb push-10-t">
          <li>Forms</li>
          <li>
            <a class="link-effect" href="#">Wizard</a>
          </li>
        </ol>
      </div>
    </div>
  </div>
  <!-- END Page Header -->

  <!-- Page Content -->
  <div class="content content-narrow">
    <h2 class="content-heading">Tambah Menu</h2>
    <!-- Simple Wizards -->
    <div class="row">
      <div class="col-sm-6">
        <!-- Simple Classic Wizard (.js-wizard-simple class is initialized in js/pages/base_forms_wizard.js) -->
        <!-- For more examples you can check out http://vadimg.com/twitter-bootstrap-wizard-example/ -->
        <div class="js-wizard-simple block">
          <!-- Step Tabs -->
          <ul class="nav nav-tabs nav-justified">
            <li class="active">
              <a href="#simple-classic-step2-makanan" data-toggle="tab">Details</a>
            </li>
            <li >
              <a href="#simple-classic-step1-makanan" data-toggle="tab">Makanan</a>
            </li>
          </ul>
          <!-- END Step Tabs -->

          <!-- Form -->
          <form class="js-validation-bootstrap form-horizontal" action="{{route('postAddmenu')}}" method="post" enctype="multipart/form-data">
            @csrf @if(session('sukses-makanan'))
            <div class="alert alert-success">
              {{session('sukses-makanan')}}
            </div>
            @elseif(session('gagal-makanan'))
            <div class="alert alert-danger">
              {{session('gagal-makanan')}}
            </div>
            @endif
            <!-- Steps Content -->
            <div class="block-content tab-content">
              <!-- Step 1 -->
              <div class="tab-pane push-30-t push-50 active" id="simple-classic-step2-makanan">
                <div class="form-group">
                  <div class="
                    col-sm-10 col-sm-offset-1
                    {{session('makanan')&&$errors->has('nama_menu') ? ' has-error' : ''}}
                    ">
                    <label for="val-digits">Nama Menu
                      <span class="text-danger">*</span>
                    </label>
                    <input class="form-control" type="text" id="val-digits" name="nama_menu" placeholder="nama menu ?">
                    @if(session('makanan')&&$errors->has('nama_menu'))
                      <div class="help-block text-right">
                        {{$errors->first('nama_menu')}}
                      </div>
                    @endif
                  </div>
                </div>
                <div class="form-group">
                  <div class="
                    col-sm-10 col-sm-offset-1
                    {{session('makanan')&&$errors->has('deskripsi_menu') ? ' has-error':''}}
                    ">
                    <label for="simple-classic-details">Details</label>
                    <textarea class="form-control" id="simple-classic-details" name="deskripsi_menu" rows="9" placeholder="Deskripsi menu"></textarea>
                    @if(session('makanan')&&$errors->has('deskripsi_menu'))  
                      <div class="help-block text-right">{{$errors->first('deskripsi_menu')}}</div>
                    @endif
                  </div>
                </div>
              </div>
              <!-- END Step 1 -->

              <!-- Step 2 -->
              <div class="tab-pane push-30-t push-50" id="simple-classic-step1-makanan">
                <div class="form-group">
                  <div class="
                    col-sm-10 col-sm-offset-1
                    {{Session('makanan') && $errors->has('harga_menu') ? 
                        ' has-error':'' 
                    }}
                    ">
                    <label for="simple-classic-city">Harga Makanan</label>
                    <input class="form-control" type="number" id="simple-classic-city" name="harga_menu" min="100" max="1000000" placeholder="Harga Makanan ?">
                    @if( Session('makanan')&&$errors->has('harga_menu'))
                      <div class="help-block text-right">{{$errors->first('harga_menu')}}</div>
                    @endif
                  </div>
                </div>
                <div class="form-group">
                  <div class="
                    col-sm-10 col-sm-offset-1
                    {{Session('makanan') ? ($errors->has('stock_menu') ? ' has-error':'') : ''}}
                    ">
                    <label for="val-digits">Stok Makanan
                      <span class="text-danger">*</span>
                    </label>
                    <input class="form-control" type="number" id="val-digits" name="stock_menu" placeholder="ex : 9">
                    @if(Session('makanan')&&$errors->has('stock_menu'))
                      <div class="help-block text-right">{{$errors->first('stock_menu')}}</div>
                    @endif
                  </div>
                </div>
                <div class="form-group">
                  <div class="
                    col-sm-10 col-sm-offset-1
                    {{Session('makanan') ? ($errors->has('image_menu') ? ' has-error':'') : ''}}
                    ">
                    <label class="val-digits" for="foto-makanan">Foto Makanan</label>
                    <div class="col-xs-12">
                      <input type="file" id="foto-makanan" name="image_menu">
                      @if(Session('makanan')&&$errors->has('image_menu'))
                        <div class="help-block text-right">{{$errors->first('image_menu')}}</div>
                      @endif  
                    </div>
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
                <div class="col-sm-12 text-right">
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
      <div class="col-sm-6">
        <!-- Simple Classic Wizard (.js-wizard-simple class is initialized in js/pages/base_forms_wizard.js) -->
        <!-- For more examples you can check out http://vadimg.com/twitter-bootstrap-wizard-example/ -->
        <div class="js-wizard-simple block">
          <!-- Step Tabs -->
          <ul class="nav nav-tabs nav-justified">
            <li class="active">
              <a href="#simple-classic-step1-minuman" data-toggle="tab">Details</a>
            </li>
            <li>
              <a href="#simple-classic-step2-minuman" data-toggle="tab">Minuman</a>
            </li>
          </ul>
          <!-- END Step Tabs -->

          <!-- Form -->
          <form class="js-validation-bootstrap form-horizontal" action="{{route('postAddmenu')}}" method="post" enctype="multipart/form-data">
            @csrf @if(session('sukses-minuman'))
            <div class="alert alert-success">
              {{session('sukses-minuman')}}
            </div>
            @elseif(session('gagal-minuman'))
            <div class="alert alert-danger">
              {{session('gagal-minuman')}}
            </div>
            @endif
            <!-- Steps Content -->
            <div class="block-content tab-content">
              <!-- Step 1 -->
              <div class="tab-pane push-30-t push-50 active" id="simple-classic-step1-minuman">
                <div class="form-group">
                  <div class="
                    col-sm-10 col-sm-offset-1
                    {{session('minuman')&&$errors->has('nama_menu')?' has-error':''}}
                    ">
                    <label for="val-digits">Nama Menu
                      <span class="text-danger">*</span>
                    </label>
                    <input class="form-control" type="text" id="val-digits" name="nama_menu" placeholder="nama menu ?">
                    @if(session('minuman')&&$errors->has('nama_menu'))
                      <div class="help-block text-right">{{$errors->first('nama_menu')}}</div>
                    @endif
                  </div>
                </div>
                <div class="form-group">
                  <div class="
                    col-sm-10 col-sm-offset-1
                    {{session('minuman')&&$errors->has('deskripsi_menu')?' has-error':''}}
                    ">
                    <label for="simple-classic-details">Details</label>
                    <textarea class="form-control" id="simple-classic-details" name="deskripsi_menu" rows="9" placeholder="Deskripsi menu"></textarea>
                    @if(session('minuman')&&$errors->has('deskripsi_menu')) 
                      <div class="help-block text-right">{{$errors->first('deskripsi_menu')}}</div>
                    @endif
                  </div>
                </div>
              </div>
              <!-- END Step 1 -->

              <!-- Step 2 -->
              <div class="tab-pane push-30-t push-50" id="simple-classic-step2-minuman">
                <div class="form-group">
                  <div class="
                    col-sm-10 col-sm-offset-1
                    {{session('minuman')&&$errors->has('harga_menu')?' has-error':''}}
                    ">
                    <label for="simple-classic-city">Harga Minuman</label>
                    <input class="form-control" type="number" id="simple-classic-city" name="harga_menu" min="100" max="1000000" placeholder="Harga Minuman ?">
                    @if(session('minuman')&&$errors->has('harga_menu'))
                      <div class="help-block text-right">{{$errors->first('harga_menu')}}</div>
                    @endif  
                  </div>
                </div>
                <div class="form-group">
                  <div class="
                    col-sm-10 col-sm-offset-1
                    {{session('minuman')&&$errors->has('stock_menu')?' has-error':''}}
                    ">
                    <label for="val-digits">Stok Minuman
                      <span class="text-danger">*</span>
                    </label>
                    <input class="form-control" type="number" id="val-digits" name="stock_menu" placeholder="ex : 9">
                    @if(session('minuman')&&$errors->has('stock_menu'))
                      <div class="help-block text-right">{{$errors->first('stock_menu')}}</div>
                    @endif  
                  </div>
                </div>
                <div class="form-group">
                  <div class="
                    col-sm-10 col-sm-offset-1
                    {{session('minuman')&&$errors->has('image_menu') ? ' has-error':''}}
                    ">
                    <label class="val-digits" for="foto-Minuman">Foto Minuman</label>
                    <div class="col-xs-12">
                      <input type="file" id="foto-Minuman" name="image_menu">
                      @if(session('minuman')&&$errors->has('image_menu'))
                        <div class="help-block text-right">{{$errors->first('image_menu')}}</div>
                      @endif
                    </div>
                  </div>
                </div>
              </div>
              <!-- END Step 2 -->
              <input type="text" name="tipe_menu" style="display:none" value="minuman">
            </div>
            <!-- END Steps Content -->

            <!-- Steps Navigation -->
            <div class="block-content block-content-mini block-content-full border-t">
              <div class="row">
                <div class="col-sm-12 text-right">
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