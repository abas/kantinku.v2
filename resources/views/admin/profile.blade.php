@extends('admin.container.admin') @section('_style') @endsection @section('content')
<main id="main-container" style="min-height: 620px;">
  <!-- Page Content -->
  <div class="content content-boxed">
    <!-- User Header -->
    <div class="block">
      <!-- Basic Info -->
      <div class="bg-image" style="background-image: url('assets/img/photos/photo6@2x.jpg');">
        <div class="block-content bg-primary-dark-op text-center overflow-hidden">
          <div class="push-30-t push animated fadeInDown">
            <img class="img-avatar img-avatar96 img-avatar-thumb" src="{{asset('uploads/images/user/').'/'.$user->pprofil}}" alt="">
          </div>
          <div class="push-30 animated fadeInUp text-white">
            <h2 class="h4 font-w600 push-5">{{$user->name}}</h2>
            <h3 class="h5 text-gray">{{$user->email}}</h3>
            <br>
            <b class="text-white" data-toggle="modal" data-target="#modal-popin" style="
                cursor: pointer;
              ">
              <span class="fa fa-edit"></span> Edit
            </b>
          </div>
        </div>
      </div>
      <!-- END Basic Info -->

      <!-- Stats -->
      <div class="block-content text-center">
        <div class="row items-push text-uppercase">
          <div class="col-xs-6 col-sm-3">
            <div class="font-w700 text-gray-darker animated fadeIn">Makanan</div>
            <div class="h2 font-w300 text-primary animated flipInX">{{$makanans->count()}}</div>
          </div>
          <div class="col-xs-6 col-sm-3">
            <div class="font-w700 text-gray-darker animated fadeIn">Minuman</div>
            <div class="h2 font-w300 text-primary animated flipInX">{{$minumans->count()}}</div>
          </div>
          <div class="col-xs-6 col-sm-3">
            <div class="font-w700 text-gray-darker animated fadeIn">Pesanan</div>
            <div class="h2 font-w300 text-primary animated flipInX">{{$pesanans->count()}}</div>
          </div>
          <div class="col-xs-6 col-sm-3">
            <div class="font-w700 text-gray-darker animated fadeIn">Transaksi Selesai</div>
            <div class="h2 font-w300 text-primary animated flipInX">{{$transaksi_selesai->count()}}</div>
          </div>
        </div>
      </div>
      <!-- END Stats -->
    </div>
    <!-- END User Header -->

    <!-- Main Content -->
    <div class="row">
      <div class="col-sm-5 col-sm-push-7 col-lg-4 col-lg-push-8">
        <div class="block block-themed">
          <div class="block-header bg-info">
            <ul class="block-options">
              <li>
                <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo">
                  <i class="si si-refresh"></i>
                </button>
              </li>
              <li>
                <button type="button" data-toggle="block-option" data-action="content_toggle">
                  <i class="si si-arrow-up"></i>
                </button>
              </li>
            </ul>
            <h3 class="block-title">Rekening</h3>
          </div>
          <div class="block-content">
            <form 
              class="form-horizontal push-5-t" 
              action="{{route('admin-updaterekening',$rekening->id)}}" 
              method="post" 
              >
              @csrf
              <div class="form-group">
                <div class="col-sm-12">
                  <label for="contact1-firstname">Atas Nama</label>
                  <input 
                    class="form-control" 
                    id="contact1-firstname" 
                    name="atasnama" 
                    placeholder="{{$rekening->atasnama}}" 
                    value="{{$rekening->atasnama}}"
                    type="text">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-12" for="contact1-email">Nomor Rekening</label>
                <div class="col-sm-12">
                  <div class="input-group">
                    <input 
                      class="form-control" 
                      id="contact1-email" 
                      name="no_rekening" 
                      placeholder="{{$rekening->no_rekening}}" 
                      type="text"
                      value="{{$rekening->no_rekening}}"
                      >
                    <span class="input-group-addon">
                      <i class="si si-grid "></i>
                    </span>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-12" for="contact1-subject">Jenis Rekening</label>
                <div class="col-sm-5">
                  <div class="form-control">{{$rekening->jenis_rekening}}</div>
                </div>
                <div class="col-sm-1">
                  <div 
                    class="btn" 
                    data-toggle="tooltip" 
                    data-placement="bottom" 
                    title="" 
                    data-original-title="ganti tipe rekening">
                      <i class="fa fa-arrow-right"></i>
                  </div>
                </div>
                <div class="col-sm-5 pull-right">
                  <select 
                    class="form-control" 
                    id="contact1-subject" 
                    name="jenis_rekening"
                    size="1">
                    <option value="{{$rekening->jenis_rekening}}">...</option>
                    <option value="a">BNI</option>
                    <option value="b">BRI</option>
                    <option value="c">MANDIRI</option>
                    <option value="d">BPD</option>
                  </select>
                </div>
              </div>
              
              <div class="form-group">
                <div class="col-sm-12 text-right">
                  <button class="btn btn-sm btn-info" type="submit">
                      <i class="fa fa-save"></i> Update</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-sm-7 col-sm-pull-5 col-lg-8 col-lg-pull-4">
        <!-- Timeline -->
        <div class="block block-opt-refresh-icon6">
          <div class="block-header">
            <ul class="block-options">
              <li>
                <button type="button" data-toggle="block-option" data-action="fullscreen_toggle">
                  <i class="si si-size-fullscreen"></i>
                </button>
              </li>
              <li>
                <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo">
                  <i class="si si-refresh"></i>
                </button>
              </li>
            </ul>
            <h3 class="block-title">
              <i class="glyphicon glyphicon-apple"></i> Menu Terbaru</h3>
          </div>
          <div class="block-content">
            <!-- Facebook Notification -->
            @if($menu_baru != null)
            <div class="block block-transparent pull-r-l">
              <div class="block-header bg-gray-lighter">
                <ul class="block-options">
                  <li>
                    <span>
                      <em class="text-muted">{{$menu_baru->updated_at}}</em>
                    </span>
                  </li>
                  <li>
                    <span>
                      <i class="glyphicon glyphicon-apple"></i>
                    </span>
                  </li>
                </ul>
                <h3 class="block-title">+ 
                  <a href="#" data-toggle="modal" data-target="#detail_menu{{$menu_baru->id}}">{{$menu_baru->nama_menu}}</a>
                  | IDR. {{$menu_baru->harga_menu/1000}}K
                </h3>
              </div>
              <div class="block-content">
                <img src="{{asset('uploads/images/menu/').$menu_baru->image_menu}}" alt="">
              </div>
              <div class="block-content">
                <p class="font-s13">{{$menu_baru->deskripsi_menu}}</p>
              </div>
            </div>
            <!-- END Facebook Notification -->
            @endif
          </div>
        </div>
        <!-- END Timeline -->
      </div>
    </div>
    <!-- END Main Content -->
  </div>
  <!-- END Page Content -->
</main>

<!-- EDIT PROFILE MODAL -->
<div class="modal fade" id="modal-popin" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-popin">
    <div class="modal-content">
      <div class="block block-themed block-transparent remove-margin-b">
        <div class="block-header bg-primary-dark">
          <ul class="block-options">
            <li>
              <button data-dismiss="modal" type="button">
                <i class="si si-close"></i>
              </button>
            </li>
          </ul>
          <h3 class="block-title">Update Profile</h3>
        </div>
        <div class="block-content">
          <div class="block-content">
            <form class="form-horizontal" action="{{route('admin-updateprofile')}}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <div class="col-sm-12">
                  <label for="username">Nama Pengguna</label>
                  <input class="form-control" name="name" placeholder="nama saat ini : {{$user->name}}" type="text" value="{{$user->name}}">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-12">
                  <img class="img-responsive" src="{{asset('uploads/images/user/').'/'.$user->pprofil}}" alt="{{$user->pprofile}}">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-12">
                  <label for="pprofile">Foto Profil</label>
                  <input class="" name="pprofil" type="file" value="jsbjgvj">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-12">
                  <button class="btn btn-sm btn-info" type="submit">
                    <i class="si si-refresh push-5-r"></i> Update</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- <div class="modal-footer">
        <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Close</button>
        <button class="btn btn-sm btn-primary" type="button" data-dismiss="modal">
          <i class="fa fa-check"></i> Ok</button>
      </div> -->
    </div>
  </div>
</div>
<!-- END UPDATE PROFILE MODAL -->

<!-- EDIT PROFILE MODAL -->
@if($menu_baru != null)
<div class="modal fade" id="detail_menu{{$menu_baru->id}}" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-popin">
    <div class="modal-content">
      <div class="block block-themed block-transparent remove-margin-b">
        <div class="block-header bg-primary-dark">
          <ul class="block-options">
            <li>
              <button data-dismiss="modal" type="button">
                <i class="si si-close"></i>
              </button>
            </li>
          </ul>
          <h3 class="block-title">Update Profile</h3>
        </div>
        <div class="block-content">
          <div class="block-content">
            <form class="form-horizontal" action="{{route('admin-updateprofile')}}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <div class="col-sm-12">
                  <label for="username">Nama Pengguna</label>
                  <input class="form-control" name="name" placeholder="nama saat ini : {{$user->name}}" type="text" value="{{$user->name}}">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-12">
                  <img class="img-responsive" src="{{asset('uploads/images/user/').'/'.$user->pprofil}}" alt="{{$user->pprofile}}">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-12">
                  <label for="pprofile">Foto Profil</label>
                  <input class="" name="pprofil" type="file" value="jsbjgvj">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-12">
                  <button class="btn btn-sm btn-info" type="submit">
                    <i class="si si-refresh push-5-r"></i> Update</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- <div class="modal-footer">
        <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Close</button>
        <button class="btn btn-sm btn-primary" type="button" data-dismiss="modal">
          <i class="fa fa-check"></i> Ok</button>
      </div> -->
    </div>
  </div>
</div>
@endif
<!-- END UPDATE PROFILE MODAL -->

@endsection @section('_script')
<!-- Page JS Plugins -->
<script src="assets/js/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
<script src="assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>

<!-- Page JS Code -->
<script src="assets/js/pages/base_forms_wizard.js"></script>

{{-- alert --}} @if(Session('upload-gagal'))
<script>
  swal({
    title: "Error!",
    text: "profile tidak dapat di perbarui, coba beberapa saat lagi!",
    icon: "warning",
    button: "ok!",
  });
</script>
@elseif(Session('upload-sukses'))
<script>
  swal({
    title: "Berhasil!",
    text: "profile sudah diperbarui!",
    icon: "success",
    button: "ok!",
  });
</script>
@elseif(Session('update-denied'))
<script>
  swal({
    title: "Error!",
    text: "tidak dapat melakukan update!",
    icon: "error",
    button: "ok!",
  });
</script>
@elseif(Session('update-sukses'))
<script>
  swal({
    title: "Berhasil!",
    text: "profile sudah diperbarui!",
    icon: "success",
    button: "ok!",
  });
</script>
@elseif(Session('rek-update-sukses'))
<script>
  swal({
    title: "Berhasil!",
    text: "Rekening sudah diperbarui!",
    icon: "success",
    button: "ok!",
  });
</script>
@elseif(Session('rekening-notset'))
<script>
  swal({
    title: "Maaf!",
    text: "anda harus mengupdate data rekening anda terlebih dahulu!",
    icon: "error",
    button: "ok!",
  });
</script>

@endif
@endsection