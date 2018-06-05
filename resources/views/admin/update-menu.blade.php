@extends('admin.container.admin') @section('_style') @endsection @section('content')
<!-- Main Container -->
<main id="main-container">
  <!-- Side Content and Product -->
  <div class="bg-gray-lighter">
    <section class="content content-boxed">
      <div class="row center">
        <div class="col-lg-10 col-lg-offset-1">
          <!-- Product -->
          <div class="block">
            <div class="block-content">
              <div class="row items-push">
                <div class="col-sm-6">
                  <!-- Images -->
                  <div class="row js-gallery">
                    <div class="col-xs-12 push-10">
                      <a class="img-link" href="{{asset('assets/img/food/pizza.jpg')}}">
                        <div class="block-content block-content-full text-center bg-flat ribbon ribbon-bookmark ribbon-crystal">
                          <div class="ribbon-box font-w600">
                            <b>Rp {{$menu->harga_menu}}</b>
                          </div>
                        </div>
                        <img class="img-responsive" src="{{asset('assets/img/food/pizza.jpg')}}" alt="">
                      </a>
                    </div>
                    <div class="col-sm-12">
                      <h3>{{$menu->nama_menu}}</h3>
                    </div>
                    <div class="col-xs-12">
                      <h5>{{$menu->deskripsi_menu}}</h5>
                    </div>
                    <div class="col-xs-12">
                      <p>stock :
                        <b>{{$menu->stock_menu}}</b>
                      </p>
                    </div>
                  </div>
                  <!-- END Images -->
                </div>
                <div class="col-sm-6">
                  <!-- Bootstrap Register -->
                  <div class="block block-themed">
                    <div class="block-header bg-success">
                      <ul class="block-options">
                        <li>
                          <button type="button" onclick="javascript:window.location.href=''" data-toggle="block-option" data-action="refresh_toggle"
                            data-action-mode="demo">
                            <i class="si si-refresh"></i>
                          </button>
                        </li>
                        <li>
                          <button type="button" data-toggle="block-option" data-action="content_toggle">
                          </button>
                        </li>
                      </ul>
                      <h3 class="block-title">Update Menu</h3>
                    </div>
                    <div class="block-content">
                      <form 
                        class="form-horizontal push-5-t" 
                        action="{{route('admin-updatemenu',$menu->id)}}" 
                        method="post">
                        @csrf
                        <div class="form-group">
                          <div class="
                              col-xs-6 
                              {{$errors->has('metode_pemesanan') ? ' has-error':''}}
                            ">
                            <label for="jenis_pemesanan">Harga Menu</label>
                            <input 
                              class="form-control" 
                              type="number" 
                              min="500" 
                              name="harga_menu" 
                              placeholder="ex Rp. 1000"
                              value="{{$menu->harga_menu}}"> @if($errors->has('metode_pemesanan'))
                            <div class="help-block text-right">{{$errors->first('metode_pemesanan')}}</div>
                            @endif
                          </div>
                          <div class="
                              col-xs-6
                              {{$errors->has('jumlah_pesanan') ? ' has-error':''}}
                            ">
                            <label for="jumlah_pesanan">Stock Menu</label>
                            <input 
                              type="number" 
                              min="1" 
                              name="stock_menu" 
                              class="form-control" 
                              placeholder="berapa stock tersedia"
                              value="{{$menu->stock_menu}}"> @if($errors->has('jumlah_pesanan'))
                            <div class="help-block text-right">{{$errors->first('jumlah_pesanan')}}</div>
                            @endif
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="
                              col-xs-12
                              {{$errors->has('nama_pemesan')?' has-error':''}}
                            ">
                            <label for="nama_pemesan">Nama Menu</label>
                            <input 
                              class="form-control" 
                              type="text" 
                              id="nama_pemesan" 
                              name="nama_menu" 
                              placeholder="nama menu..."
                              value="{{$menu->nama_menu}}"> @if($errors->has('nama_pemesan'))
                            <div class="help-block text-right">{{$errors->first('nama_pemesan')}}</div>
                            @endif
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-sm-12">
                            <label for="simple-classic-details">Deskripsi Menu</label>
                            <textarea 
                              class="form-control" 
                              id="simple-classic-details" 
                              name="deskripsi_menu" 
                              rows="9" 
                              placeholder="Detail pesanan">{{$menu->deskripsi_menu}}</textarea>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-sm-6 text-left">
                            <a class="btn btn-sm btn-warning" href="{{route('admin-listmenu')}}">
                              <i class="fa fa-remove push-5-r"></i> Batal</a>
                          </div>
                          <div class="col-sm-6 text-right">
                            <button class="btn btn-sm btn-success" type="submit">
                              <i class="fa fa-cart-plus  push-5-r"></i> Update</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <!-- END Bootstrap Register -->
                </div>
                @if(session('err'))
                <div class="col-sm-12">
                  <div class="block block-themed">
                    <div class="alert alert-warning">
                      {{$errors}}
                    </div>
                  </div>
                </div>
                @endif
              </div>
            </div>
          </div>
          <!-- END Product -->
        </div>
      </div>
    </section>
  </div>
  <!-- END Side Content and Product -->
</main>
<!-- END Main Container -->
@endsection @section('_script')
<!-- Page JS Plugins -->
<script src="assets/js/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
<script src="assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>

<!-- Page JS Code -->
<script src="assets/js/pages/base_forms_wizard.js"></script>
@endsection