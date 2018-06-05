@extends('admin.container.admin') @section('_style') @endsection @section('content')
<!-- Main Container -->
<main id="main-container">
  <!-- Page Content -->
  <div class="content content-narrow">
    <!-- Simple Wizards -->
    <h2 class="content-heading">List Menu</h2>
    <div class="row">
      @if($menus->count()>0)
      <div class="col-sm-12">
        <div class="block-header bg-white">
          <div class="block-options">
            {{$menus->render()}}
          </div>
          <h3 class="block-title">List Menu Terbaru</h3>
        </div>
        <!-- Hover Table -->
        <div class="block">
          <div class="block-content">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th class="text-center" style="width: 50px;">#</th>
                  <th>Menu</th>
                  <th class="hidden-xs">Harga</th>
                  <th class="hidden-xs">Tipe</th>
                  <th class="hidden-xs">Stock</th>
                  <th class="text-center" style="width: 100px;">Actions</th>
                </tr>
              </thead>
              <tbody>
                @php $i=1; @endphp @foreach($menus as $menu)
                <tr>
                  <td class="text-center">{{$i++}}</td>
                  <td>{{$menu->nama_menu}}</td>
                  <td>{{$menu->harga_menu}}</td>
                  <td>{{$menu->tipe_menu}}</td>
                  <td class="hidden-xs">
                    <span class="label label-danger">{{$menu->stock_menu}}</span>
                  </td>
                  <td class="text-center">
                    <div class="btn-group">
                      <a class="btn btn-xs btn-default" href="{{route('admin-editmenu',$menu->id)}}">
                        <i class="fa fa-pencil"></i>
                      </a>
                      <a class="btn btn-xs btn-default" href="{{route('admin-deletemenu',$menu->id)}}">
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
      @endif @if($menus->count()>0) @foreach($menus as $menu)
      <menu id="{{$menu->id}}" style="display:none"></menu>
        <div class="col-lg-6" id="list_menu1-menu{{$menu->id}}">
          <!-- Simple Classic Wizard (.js-wizard-simple class is initialized in js/pages/base_forms_wizard.js) -->
          <!-- For more examples you can check out http://vadimg.com/twitter-bootstrap-wizard-example/ -->
          <div class="js-wizard-simple block">
            <!-- Step Tabs -->
            <ul class="nav nav-tabs nav-justified">
              <li class="active">
                <a href="#simple-classic-step1-menu{{$menu->id}}" data-toggle="tab">Menu</a>
              </li>
              <li>
                <a href="#simple-classic-step2-menu{{$menu->id}}" data-toggle="tab">Details</a>
              </li>
            </ul>
            <!-- END Step Tabs -->

            <!-- Form -->
            <div class="form-horizontal">
              <!-- Steps Content -->
              <div class="block-content tab-content">
                <!-- Step 1 -->
                <div class="tab-pane push-30-t push-50 active" id="simple-classic-step1-menu{{$menu->id}}">
                  <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-1">
                      <label for="">
                        <h3>{{$menu->nama_menu}}</h3>
                      </label>
                      @if($menu->image_menu != null)
                      <img src="{{asset('uploads/images/menu/'.$menu->image_menu)}}" alt="" class="img-responsive" id="image_menu"> @else
                      <img src="{{asset('assets/img/food/daging.jpg')}}" alt="" class="img-responsive" id="image_menu"> @endif
                    </div>
                  </div>
                </div>
                <!-- END Step 1 -->

                <!-- Step 2 -->
                <div class="tab-pane push-30-t push-50" id="simple-classic-step2-menu{{$menu->id}}">
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
                    <div class="col-sm-10 col-sm-offset-1">
                      <label for="simple-classic-details">Deskripsi</label>
                      <br> {{$menu->deskripsi_menu}}
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
                    <a class="wizard-prev btn btn-success" href="{{route('admin-editmenu',$menu->id)}}">
                      Update</a>
                    <!-- <button class="btn btn-info" data-toggle="modal" data-target="#modal-normal-{{$menu->id}}" type="button">Launch Modal</button> -->
                  </div>
                  <div id="delete-menu" class="col-xs-6 text-right">
                    <a class="wizard-prev btn btn-danger" onclick="deleteMenu('{{route('admin-deletemenu',$menu->id)}}')">
                      Delete</a>
                  </div>

                </div>
              </div>
              <!-- END Form -->
            </div>
            <!-- END Simple Classic Wizard -->
          </div>

        </div>
        <!-- END Page Content -->
        @endforeach @else
        <div class="col-sm-12">
          <div class="alert alert-danger">
            anda belum membuat menu
          </div>
        </div>
        @endif
    </div>
  </div>
</main>
<!-- END Main -->
@endsection
@section('_script')
<!-- Page JS Plugins -->
<script src="assets/js/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
<script src="assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>

<!-- Page JS Code -->
<script src="assets/js/pages/base_forms_wizard.js"></script>

<!-- alert -->

<script>
    function deleteMenu(url) {
      swal({
          title: "Hapus Menu",
          text: "apa kamu yakin ingin menghapus menu ini?",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            swal("Poof! menu berhasil di hapus!", {
              icon: "success",
            }).then(()=>{
              window.location = url
            })
          }
        }
      );
    }
  </script>
  
  @if(Session('delete-sukses'))
  <script>
    swal({
      title: "Okay!",
      text: "Menu berhasil di hapus!",
      icon: "success",
      button: "Done!",
    });
  </script>
  @elseif(Session('delete-failed'))
  <script>
    swal({
      title: "Maaf!",
      text: "Menu gagal untuk di hapus!",
      icon: "warning",
      button: "Ok!",
    });
  </script>
  @elseif(Session('delete-denied'))
  <script>
    swal({
      title: "Oiiit!",
      text: "Anda tidak punya akses untuk menghapus menu ini!",
      icon: "danger",
      button: "Ok!",
    });
  </script>
  @elseif(Session('update-sukses'))
  <script>
    swal({
      title: "Updated!",
      text: "menu berhasil di update!",
      icon: "success",
      button: "Ok!",
    });
  </script>
  @endif 
@endsection