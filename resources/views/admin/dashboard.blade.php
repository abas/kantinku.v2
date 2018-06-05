@extends('admin.container.admin') @section('_style') @endsection @section('content')
<!-- Main Container -->
<main id="main-container">
  <!-- Page Content -->
  <div class="content content-narrow">
    <!-- Simple Wizards -->
    <h2 class="content-heading">Daftar Pesanan</h2>
    <div class="row">
    <div class="col-sm-12">
        <div class="col-sm-12 text-right">
          {{$pesanans->render()}}
        </div>
        <!-- Hover Table -->
        <div class="block">
          <div class="block-content">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th class="text-center" style="width: 50px;">#</th>
                  <th>Antar/Ambil</th>
                  <th class="hidden-xs">Atasnama</th>
                  <th class="hidden-xs">Kontak</th>
                  <th class="hidden-xs">Jumlah</th>
                  <th class="hidden-xs">Alamat</th>
                  <th class="text-center" style="width: 100px;">Actions</th>
                </tr>
              </thead>
              <tbody>
                @php $i=1; @endphp @foreach($pesanans as $pesanan)
                <tr>
                  <td class="text-center">{{$i++}}</td>
                  <td style="text-transform:capitalize">{{$pesanan->metode_pemesanan}}</td>
                  <td>{{$pesanan->nama_pemesan}}</td>
                  <td>{{$pesanan->kontak}}</td>
                  <td class="hidden-xs">
                    <span class="label label-danger">{{$pesanan->jumlah_pesanan}}</span>
                  </td>
                  <td>{{$pesanan->alamat}}</td>
                  <td class="text-center">
                    <div class="btn-group">
                      <a class="btn btn-xs btn-default" href="#">
                        <i class="fa fa-pencil"></i>
                      </a>
                      <a class="btn btn-xs btn-default" href="#">
                        <i class="fa fa-times"></i>
                      </a>
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
        <!-- END Hover Table -->
      </div>
      @if($pesanans->count() > 0)
      @foreach($pesanans as $pesanan)
      <div class="col-lg-6">
        <!-- Simple Classic Wizard (.js-wizard-simple class is initialized in js/pages/base_forms_wizard.js) -->
        <!-- For more examples you can check out http://vadimg.com/twitter-bootstrap-wizard-example/ -->
        <div class="js-wizard-simple block">
          <!-- Step Tabs -->
          <ul class="nav nav-tabs nav-justified">
            <li class="active">
              <a href="#simple-classic-step1-{{$pesanan->id}}" data-toggle="tab">Menu</a>
            </li>
            <li>
              <a href="#simple-classic-step2-{{$pesanan->id}}" data-toggle="tab">Details</a>
            </li>
            <li>
              <a href="#simple-classic-step3-{{$pesanan->id}}" data-toggle="tab">Action</a>
            </li>
          </ul>
          <!-- END Step Tabs -->

          <!-- Form -->
          <form class="form-horizontal" action="dashboard.html" method="">
            <!-- Steps Content -->
            <div class="block-content tab-content">
              <!-- Step 1 -->
              <div class="tab-pane push-30-t push-50 active" id="simple-classic-step1-{{$pesanan->id}}">
                <div class="form-group">
                  <div class="col-sm-10 col-sm-offset-1">
                    <label for="">
                      <h3>{{$menu->getName($pesanan->id_menu)}}</h3>
                    </label>
                    <img src="{{asset('assets/img/food/daging.jpg')}}" alt="" class="img-responsive" id="image_menu">
                  </div>
                </div>
              </div>
              <!-- END Step 1 -->

              <!-- Step 2 -->
              <div class="tab-pane push-30-t push-50" id="simple-classic-step2-{{$pesanan->id}}">
                <div class="form-group">
                  <div class="col-sm-10 col-sm-offset-1">
                    <label for="simple-classic-details">Pemesan</label>
                    <p class="form-control">{{$pesanan->nama_pemesan}}</p>
                  </div>
                  <div class="col-sm-10 col-sm-offset-1">
                    <label for="simple-classic-details">Jumlah, Harga & Total Bayar</label>
                    <p class="form-control">{{$pesanan->jumlah_pesanan}} x Rp. {{$menu->getHarga($pesanan->id_menu)}} :
                      <b>Rp. {{$pesanan->jumlah_pesanan * $menu->getHarga($pesanan->id_menu)}}</b>
                    </p>
                  </div>
                  <div class="col-sm-10 col-sm-offset-1">
                    <label for="simple-classic-details">Kontak</label>
                    <p class="form-control">{{$pesanan->kontak}}</p>
                  </div>
                </div>
              </div>
              <!-- END Step 2 -->

              <!-- Step 3 -->
              @if($pesanan->metode_pemesanan == 'antar')
              <div class="tab-pane push-30-t push-50" id="simple-classic-step3-{{$pesanan->id}}">
                <div class="form-group">
                  <div class="col-sm-10 col-sm-offset-1">
                    <label for="alamat">Jenis Pesanan</label>
                    <p class="form-control">{{$pesanan->metode_pemesanan}}</p>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-10 col-sm-offset-1">
                    <label for="alamat">Alamat</label>
                    <p class="form-control">{{$pesanan->alamat}}</p>
                    <confirm onclick="konfirmasi_pembayaran()" class="btn btn-warning" id="konfirmasi_pembayaran">Konfirmasi Pembayaran</confirm>
                    <script>
                      function konfirmasi_pembayaran() {
                        document.getElementById("konfirmasi_pembayaran").classList.remove(
                          "btn-warning")
                        document.getElementById("konfirmasi_pembayaran").classList.add(
                          "btn-success")
                        document.getElementById("konfirmasi_pembayaran").innerHTML =
                          "pesanan terbayar"
                      }
                    </script>
                  </div>
                </div>
              </div>
              <!-- END Step 3 -->
              <!-- else step 3 -->
              @else
              <div class="tab-pane push-30-t push-50" id="simple-classic-step3-{{$pesanan->id}}">
                <div class="form-group">
                  <div class="col-sm-10 col-sm-offset-1">
                    <label for="alamat">Jenis Pesanan</label>
                    <p class="form-control">{{$pesanan->metode_pemesanan}}</p>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-10 col-sm-offset-1">
                    <p class="form-control">beritahu pemesan, pesanan sudah bisa di ambil</p>
                    <button class="btn btn-warning">Kirim</button>
                  </div>
                </div>
              </div>
              <!-- END Step 3 -->
              @endif
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
                    <i class="fa fa-check"></i> Done</button>
                </div>
              </div>
            </div>
            <!-- END Steps Navigation -->
          </form>
          <!-- END Form -->
        </div>
        <!-- END Simple Classic Wizard -->
      </div>
      @endforeach
      <div class="col-sm-12">
        <center>
          {{$pesanans->render()}}
        </center>
      </div>
      @else
      <div class="col-sm-12">
        <div class="alert alert-danger">
          tidak ada pesanan saat ini
        </div>
      </div>
      @endif
    </div>
    <!-- END Page Content -->
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