@extends('container.app') @section('_style')
<!-- Page JS Plugins CSS -->
<link rel="stylesheet" href="{{asset('assets/js/plugins/magnific-popup/magnific-popup.min.css')}}"> 
@endsection 
@section('content')
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
                        @if($menu->image_menu != null)
                        <img class="img-responsive" src="{{asset('uploads/images/menu/'.$menu->image_menu)}}" alt="">
                        @else
                        <img class="img-responsive" src="{{asset('assets/img/food/pizza.jpg')}}" alt="">
                        @endif
                      </a>
                    </div>
                    <div class="col-xs-12">
                      <h3>{{$menu->nama_menu}}</h3>
                      <p style="text-align:justify;">{{$menu->deskripsi_menu}}</p>
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
                          <button 
                            type="button" 
                            onclick="javascript:window.location.href=''" 
                            data-toggle="block-option" 
                            data-action="refresh_toggle"
                            data-action-mode="demo">
                            <i class="si si-refresh"></i>
                          </button>
                        </li>
                        <li>
                          <button 
                            type="button" 
                            data-toggle="block-option" 
                            data-action="content_toggle">
                          </button>
                        </li>
                      </ul>
                      <h3 class="block-title">Buat Pesanan</h3>
                    </div>
                    <div class="block-content">
                      <form 
                        class="form-horizontal push-5-t" 
                        action="{{route('pesan',$menu->id)}}" 
                        method="post">
                        @csrf
                        <div class="form-group">
                          <div 
                            class="
                              col-xs-6 
                              {{$errors->has('metode_pemesanan') ? ' has-error':''}}
                            ">
                            <label for="jenis_pemesanan">Jenis Pemesanan</label>
                            <select  
                              onclick="showAlamatForm()"
                              onkeyup="showAlamatForm()"
                              id="jenis_pemesanan" 
                              name="metode_pemesanan" 
                              class="form-control">
                              <option value="">...</option>
                              <option onkeyup="showAlamatForm()" value="Antar">Antar</option>
                              <option onkeyup="showAlamatForm()" value="Ambil">Ambil</option>
                            </select>
                            @if($errors->has('metode_pemesanan'))
                              <div class="help-block text-right">{{$errors->first('metode_pemesanan')}}</div>
                            @endif
                          </div>
                          <div 
                            class="
                              col-xs-6
                              {{$errors->has('jumlah_pesanan') ? ' has-error':''}}
                            ">
                            <label for="jumlah_pesanan">Jumlah Pesanan</label>
                            <input 
                              onkeyup="showAlamatForm()"
                              type="number"
                              min="1" 
                              max="{{$menu->stock_menu}}" 
                              name="jumlah_pesanan" 
                              class="form-control" 
                              placeholder="max: {{$menu->stock_menu}}"
                            >
                            @if($errors->has('jumlah_pesanan'))
                              <div class="help-block text-right">{{$errors->first('jumlah_pesanan')}}</div>
                            @endif
                          </div>
                        </div>
                        <div class="form-group">
                          <div 
                            class="
                              col-xs-12
                              {{$errors->has('nama_pemesan')?' has-error':''}}
                            ">
                            <label for="nama_pemesan">Nama Pemesan</label>
                            <input 
                              class="form-control" 
                              type="text" 
                              id="nama_pemesan" 
                              name="nama_pemesan" 
                              placeholder="masukkan nama anda."
                            >
                            @if($errors->has('nama_pemesan'))
                              <div class="help-block text-right">{{$errors->first('nama_pemesan')}}</div>
                            @endif
                          </div>
                        </div>
                        <div class="form-group">
                          <div 
                            class="
                              col-xs-12
                              {{$errors->has('kontak')?' has-error':''}}
                            ">
                            <label for="kontak">Kontak</label>
                            <input 
                              class="form-control" 
                              type="text" 
                              id="kontak" 
                              name="kontak" 
                              placeholder="ex: 0812345678 or telegram @abas">
                            @if($errors->has('kontak'))
                              <div class="help-block text-right">{{$errors->first('kontak')}}</div>
                            @endif
                          </div>
                        </div>
                       
                        <div class="form-group" id="group-alamat" style="display: none">
                          <div 
                            class="
                              col-xs-12
                              {{$errors->has('alamat')?' has-error':''}}
                            ">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" id="input-alamat" class="form-control" placeholder="alamat yang dituju">
                            @if($errors->has('alamat'))
                              <div class="help-block text-right">{{$errors->first('alamat')}}</div>
                            @endif
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-sm-6">
                            <button class="btn btn-sm btn-danger" type="submit">
                              <i class="fa fa-arrow-circle-left push-5-r"></i> Batal</button>
                          </div>
                          <div class="col-sm-6 text-right">
                            <button class="btn btn-sm btn-success" type="submit">
                              <i class="fa fa-cart-plus  push-5-r"></i> Pesan</button>
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
@endsection 
@section('_script')
<!-- Page JS Plugins -->
<script src="{{asset('assets/js/plugins/magnific-popup/magnific-popup.min.js')}}"></script>
<!-- Page JS Code -->
<script>
  jQuery(function () {
    // Init page helpers (Appear + Magnific Popup plugins)
    App.initHelpers(['appear', 'magnific-popup']);
  });
</script>
<script>
  // to check is value antar
  function isAntar(komponen){
    return komponen == 'Antar'
  }

  // to show / hide alamat form
  function showAlamatForm(){
    var alamat = document.getElementById('group-alamat')
    var jenis_pemesanan = document.getElementById('jenis_pemesanan').value
    if(isAntar(jenis_pemesanan)){
      alamat.removeAttribute('style')
    }else{
      alamat.setAttribute('style','display:none')
      var val_alamat = document.getElementById('input-alamat').value = null
    }
  }
</script>
@endsection