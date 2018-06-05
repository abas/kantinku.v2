@extends('container.app') @section('_style')
<!-- Page JS Plugins CSS -->
<link rel="stylesheet" href="{{asset('assets/js/plugins/magnific-popup/magnific-popup.min.css')}}"> @endsection @section('content')
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
                  <!-- Bootstrap Register -->
                  <div class="block block-themed">
                    <div class="block-header bg-success">
                      <ul class="block-options">
                        <li>
                          <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                        </li>
                      </ul>
                      <h3 class="block-title">Detail Pesanan</h3>
                    </div>
                    <div class="block-content">
                      <div class="form-horizontal push-5-t" action="detail_pesanan.html" method="post">
                        <div class="form-group">
                          <div class="col-xs-6">
                            <label for="jenis_pemesanan">Jenis Pemesanan</label>
                            <div class="form-control">
                              {{$pesanan->metode_pemesanan}}
                            </div>
                          </div>
                          <div class="col-xs-6">
                            <label for="jumlah_pesanan">Jumlah Pesanan</label>
                            <div class="form-control">{{$pesanan->jumlah_pesanan}} porsi</div>
                            <!-- <X type="number" min="0" name="jumlah_pemesanan" class="form-control" placeholder="ex: 10"> -->
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-xs-12">
                            <label for="nama_pemesan">Nama Pemesan</label>
                            <div class="form-control">{{$pesanan->nama_pemesan}}</div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-xs-12">
                            <label for="kontak">Kontak</label>
                            <div class="form-control">{{$pesanan->kontak}}</div>
                          </div>
                        </div>
                        <div class="col-xs-12">
                          <label for="note">Note</label>
                          <div style="text-align: justify" class="alert alert-warning">
                            <b>pesanan tidak akan di layani jika anda tidak bisa dikonfirmasi dari penjual dan terlambat membayar
                              dalam kurun waktu 5 menit, setelah konfirmasi dari penjual.</b>
                          </div>
                        </div>
                        @if($pesanan->metode_pemesanan == 'antar')
                        <hr>
                        <div class="form-group">
                          <div class="col-xs-12">
                            <label for="alamat">Alamat</label>
                            <div class="form-control">{{$pesanan->alamat}}</div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-xs-12">
                            <label for="transfer">Pembayaran</label>
                            <p>
                              silahkan transfer pembayaran ke nomor rekening berikut
                            </p>
                            <div class="row">
                              <div class="col-xs-6">
                                <label for="norek">No Rekening <b>{{$pesanan->jenis_rekening}}</b></label>
                                <div class="form-control">
                                  {{$pesanan->no_rekening}}
                                </div>

                              </div>
                              <div class="col-xs-6">

                                <label for="norek">Atas Nama Penjual</label>
                                <div class="form-control">
                                  {{$pesanan->atasnama}}
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        @endif
                      </div>
                    </div>
                  </div>
                  <!-- END Bootstrap Register -->
                </div>
                <div class="col-sm-6">
                  <!-- Images -->
                  <div class="row js-gallery">
                    <div class="col-xs-12 push-10">
                      <a class="img-link" href="{{asset('assets/img/various/ecom_product6.png')}}">
                        <div class="block-content block-content-full text-center bg-flat ribbon ribbon-bookmark ribbon-crystal">
                          <div class="ribbon-box font-w600">
                            <b>Rp {{$harga}}</b>
                          </div>
                        </div>
                        <img class="img-responsive" src="{{asset('assets/img/food/pizza.jpg')}}" alt="">
                      </a>
                    </div>
                    <div class="col-xs-12">
                      <h3>Mozarella Pizza</h3>
                    </div>
                    <div class="col-xs-12">
                        <hr>
                        <span>
                          jumlah pesanan : <b>{{$pesanan->jumlah_pesanan}}</b>
                        </span><br>
                        <span>
                          harga menu /porsi : <b>{{$harga}}</b>
                        </span>
                      <h5>total pembayaran Rp. <span>{{$pesanan->jumlah_pesanan * $harga}}</span></h5>
                    </div>
                  </div>
                  <!-- END Images -->
                </div>
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
<script src="assets/js/plugins/magnific-popup/magnific-popup.min.js"></script>

<!-- Page JS Code -->
<script>
  jQuery(function () {
    // Init page helpers (Appear + Magnific Popup plugins)
    App.initHelpers(['appear', 'magnific-popup']);
  });
</script>
@endsection