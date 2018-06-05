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
            <img class="img-avatar img-avatar96 img-avatar-thumb" src="assets/img/avatars/avatar4.jpg" alt="">
          </div>
          <div class="push-30 animated fadeInUp text-white">
            <h2 class="h4 font-w600 push-5">{{$user->name}}</h2>
            <h3 class="h5 text-gray">{{$user->email}}</h3><br>
            <b 
              class="text-white" 
              data-toggle="modal" 
              data-target="#modal-popin"
              style="
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
        <!-- Follow -->
        <div class="block">
          <div class="block-content block-content-full text-center">
            <button class="btn btn-sm btn-default">
              <i class="fa fa-fw fa-plus text-success"></i> Follow</button>
            <button class="btn btn-sm btn-default">
              <i class="fa fa-fw fa-inbox text-info"></i> Send Message</button>
          </div>
        </div>
        <!-- END Follow -->

        <!-- About -->
        <div class="block">
          <div class="block-content">
            <p>Hi there, welcome to my profile!</p>
            <p>I'm a web designer and I love creating stuff that solve problems and make your life easier. Feel free to follow
              me to know more about me and my projects. Thanks for stopping by, wish you a great day!</p>
          </div>
        </div>
        <!-- END About -->

        <!-- Followers -->
        <div class="block block-opt-refresh-icon6">
          <div class="block-header">
            <ul class="block-options">
              <li>
                <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo">
                  <i class="si si-refresh"></i>
                </button>
              </li>
            </ul>
            <h3 class="block-title">
              <i class="fa fa-fw fa-share-alt"></i> Followers</h3>
          </div>
          <div class="block-content">
            <ul class="nav-users push">
              <li>
                <a href="base_pages_profile.html">
                  <img class="img-avatar" src="assets/img/avatars/avatar13.jpg" alt="">
                  <i class="fa fa-circle text-success"></i> George Stone
                  <div class="font-w400 text-muted">
                    <small>Web Developer</small>
                  </div>
                </a>
              </li>
              <li>
                <a href="base_pages_profile.html">
                  <img class="img-avatar" src="assets/img/avatars/avatar4.jpg" alt="">
                  <i class="fa fa-circle text-warning"></i> Amy Hunter
                  <div class="font-w400 text-muted">
                    <small>Web Designer</small>
                  </div>
                </a>
              </li>
              <li>
                <a href="base_pages_profile.html">
                  <img class="img-avatar" src="assets/img/avatars/avatar1.jpg" alt="">
                  <i class="fa fa-circle text-danger"></i> Laura Bell
                  <div class="font-w400 text-muted">
                    <small>Photographer</small>
                  </div>
                </a>
              </li>
            </ul>
            <div class="text-center push">
              <small>
                <a href="javascript:void(0)">Load More..</a>
              </small>
            </div>
          </div>
        </div>
        <!-- END Followers -->

        <!-- Products -->
        <div class="block block-opt-refresh-icon6">
          <div class="block-header">
            <ul class="block-options">
              <li>
                <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo">
                  <i class="si si-refresh"></i>
                </button>
              </li>
            </ul>
            <h3 class="block-title">
              <i class="fa fa-fw fa-briefcase"></i> Products</h3>
          </div>
          <div class="block-content">
            <ul class="list list-simple list-li-clearfix">
              <li>
                <a class="item item-rounded pull-left push-10-r bg-info" href="javascript:void(0)">
                  <i class="si si-rocket text-white-op"></i>
                </a>
                <h5 class="push-10-t">MyPanel</h5>
                <div class="font-s13">Responsive App Template</div>
              </li>
              <li>
                <a class="item item-rounded pull-left push-10-r bg-amethyst" href="javascript:void(0)">
                  <i class="si si-calendar text-white-op"></i>
                </a>
                <h5 class="push-10-t">Project Time</h5>
                <div class="font-s13">Web application</div>
              </li>
              <li>
                <a class="item item-rounded pull-left push-10-r bg-danger" href="javascript:void(0)">
                  <i class="si si-speedometer text-white-op"></i>
                </a>
                <h5 class="push-10-t">iDashboard</h5>
                <div class="font-s13">Bootstrap Admin Template</div>
              </li>
            </ul>
            <div class="text-center push">
              <small>
                <a href="javascript:void(0)">View More..</a>
              </small>
            </div>
          </div>
        </div>
        <!-- END Products -->

        <!-- Ratings -->
        <div class="block block-opt-refresh-icon6">
          <div class="block-header">
            <ul class="block-options">
              <li>
                <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo">
                  <i class="si si-refresh"></i>
                </button>
              </li>
            </ul>
            <h3 class="block-title">
              <i class="fa fa-fw fa-star"></i> Ratings</h3>
          </div>
          <div class="block-content">
            <ul class="list list-simple">
              <li>
                <div class="push-5 clearfix">
                  <div class="text-warning pull-right">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                  <a class="font-w600" href="base_pages_profile.html">Dennis Ross</a>
                  <span class="text-muted">(5/5)</span>
                </div>
                <div class="font-s13">Flawless design execution! I'm really impressed with the product, it really helped me build my app so fast!
                  Thank you!</div>
              </li>
              <li>
                <div class="push-5 clearfix">
                  <div class="text-warning pull-right">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                  <a class="font-w600" href="base_pages_profile.html">Adam Hall</a>
                  <span class="text-muted">(5/5)</span>
                </div>
                <div class="font-s13">Great value for money and awesome support! Would buy again and again! Thanks!</div>
              </li>
              <li>
                <div class="push-5 clearfix">
                  <div class="text-warning pull-right">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                  <a class="font-w600" href="base_pages_profile.html">Ethan Howard</a>
                  <span class="text-muted">(5/5)</span>
                </div>
                <div class="font-s13">Working great in all my devices, quality and quantity in a great package! Thank you!</div>
              </li>
            </ul>
            <div class="text-center push">
              <small>
                <a href="javascript:void(0)">Read More..</a>
              </small>
            </div>
          </div>
        </div>
        <!-- END Ratings -->
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
              <i class="fa fa-newspaper-o"></i> Updates</h3>
          </div>
          <div class="block-content">
            <!-- Facebook Notification -->
            <div class="block block-transparent pull-r-l">
              <div class="block-header bg-gray-lighter">
                <ul class="block-options">
                  <li>
                    <span>
                      <em class="text-muted">3 hrs ago</em>
                    </span>
                  </li>
                  <li>
                    <span>
                      <i class="fa fa-facebook text-primary"></i>
                    </span>
                  </li>
                </ul>
                <h3 class="block-title">+ 290 Page Likes</h3>
              </div>
              <div class="block-content">
                <p class="font-s13">This is great, keep it up!</p>
              </div>
            </div>
            <!-- END Facebook Notification -->

            <!-- Generic Notification -->
            <div class="block block-transparent pull-r-l">
              <div class="block-header bg-gray-lighter">
                <ul class="block-options">
                  <li>
                    <span>
                      <em class="text-muted">4 hrs ago</em>
                    </span>
                  </li>
                  <li>
                    <span>
                      <i class="fa fa-briefcase text-modern"></i>
                    </span>
                  </li>
                </ul>
                <h3 class="block-title">3 New Products were added!</h3>
              </div>
              <div class="block-content block-content-full">
                <a class="item item-rounded push-10-r bg-info" data-toggle="tooltip" title="" href="javascript:void(0)" data-original-title="MyPanel">
                  <i class="si si-rocket text-white-op"></i>
                </a>
                <a class="item item-rounded push-10-r bg-amethyst" data-toggle="tooltip" title="" href="javascript:void(0)" data-original-title="Project Time">
                  <i class="si si-calendar text-white-op"></i>
                </a>
                <a class="item item-rounded push-10-r bg-city" data-toggle="tooltip" title="" href="javascript:void(0)" data-original-title="iDashboard">
                  <i class="si si-speedometer text-white-op"></i>
                </a>
              </div>
            </div>
            <!-- END Generic Notification -->

            <!-- Twitter Notification -->
            <div class="block block-transparent pull-r-l">
              <div class="block-header bg-gray-lighter">
                <ul class="block-options">
                  <li>
                    <span>
                      <em class="text-muted">12 hrs ago</em>
                    </span>
                  </li>
                  <li>
                    <span>
                      <i class="fa fa-twitter text-info"></i>
                    </span>
                  </li>
                </ul>
                <h3 class="block-title">+ 1150 Followers</h3>
              </div>
              <div class="block-content">
                <p class="font-s13">You’re getting more and more followers, keep it up!</p>
              </div>
            </div>
            <!-- END Twitter Notification -->

            <!-- System Notification -->
            <div class="block block-transparent pull-r-l">
              <div class="block-header bg-gray-lighter">
                <ul class="block-options">
                  <li>
                    <span>
                      <em class="text-muted">1 day ago</em>
                    </span>
                  </li>
                  <li>
                    <span>
                      <i class="fa fa-database text-smooth"></i>
                    </span>
                  </li>
                </ul>
                <h3 class="block-title">Database backup completed!</h3>
              </div>
              <div class="block-content">
                <p class="font-s13">Download the
                  <a href="javascript:void(0)">latest backup</a>.</p>
              </div>
            </div>
            <!-- END System Notification -->

            <!-- Social Notification -->
            <div class="block block-transparent pull-r-l">
              <div class="block-header bg-gray-lighter">
                <ul class="block-options">
                  <li>
                    <span>
                      <em class="text-muted">2 days ago</em>
                    </span>
                  </li>
                  <li>
                    <span>
                      <i class="fa fa-user-plus text-success"></i>
                    </span>
                  </li>
                </ul>
                <h3 class="block-title">+ 5 Friend Requests</h3>
              </div>
              <div class="block-content">
                <ul class="nav-users push">
                  <li>
                    <a href="base_pages_profile.html">
                      <img class="img-avatar" src="assets/img/avatars/avatar6.jpg" alt="">
                      <i class="fa fa-circle text-success"></i> Judy Alvarez
                      <div class="font-w400 text-muted">
                        <small>Web Designer</small>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="base_pages_profile.html">
                      <img class="img-avatar" src="assets/img/avatars/avatar14.jpg" alt="">
                      <i class="fa fa-circle text-success"></i> Jeremy Fuller
                      <div class="font-w400 text-muted">
                        <small>Graphic Designer</small>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="base_pages_profile.html">
                      <img class="img-avatar" src="assets/img/avatars/avatar8.jpg" alt="">
                      <i class="fa fa-circle text-warning"></i> Denise Watson
                      <div class="font-w400 text-muted">
                        <small>Photographer</small>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="base_pages_profile.html">
                      <img class="img-avatar" src="assets/img/avatars/avatar13.jpg" alt="">
                      <i class="fa fa-circle text-warning"></i> John Parker
                      <div class="font-w400 text-muted">
                        <small>Copywriter</small>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="base_pages_profile.html">
                      <img class="img-avatar" src="assets/img/avatars/avatar12.jpg" alt="">
                      <i class="fa fa-circle text-danger"></i> Bruce Edwards
                      <div class="font-w400 text-muted">
                        <small>UI Designer</small>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- END Social Notification -->

            <!-- System Notification -->
            <div class="block block-transparent pull-r-l">
              <div class="block-header bg-gray-lighter">
                <ul class="block-options">
                  <li>
                    <span>
                      <em class="text-muted">1 week ago</em>
                    </span>
                  </li>
                  <li>
                    <span>
                      <i class="fa fa-cog text-primary-dark"></i>
                    </span>
                  </li>
                </ul>
                <h3 class="block-title">System updated to v2.02</h3>
              </div>
              <div class="block-content">
                <p class="font-s13">Check the complete changelog at the
                  <a href="javascript:void(0)">activity page</a>.</p>
              </div>
            </div>
            <!-- END System Notification -->

            <!-- Generic Notification -->
            <div class="block block-transparent pull-r-l">
              <div class="block-header bg-gray-lighter">
                <ul class="block-options">
                  <li>
                    <span>
                      <em class="text-muted">2 weeks ago</em>
                    </span>
                  </li>
                  <li>
                    <span>
                      <i class="fa fa-briefcase text-modern"></i>
                    </span>
                  </li>
                </ul>
                <h3 class="block-title">1 New Product was added!</h3>
              </div>
              <div class="block-content block-content-full">
                <a class="item item-rounded push-10-r bg-modern" data-toggle="tooltip" title="" href="javascript:void(0)" data-original-title="eSettings">
                  <i class="si si-settings text-white-op"></i>
                </a>
              </div>
            </div>
            <!-- END Generic Notification -->

            <!-- System Notification -->
            <div class="block block-transparent pull-r-l">
              <div class="block-header bg-gray-lighter">
                <ul class="block-options">
                  <li>
                    <span>
                      <em class="text-muted">2 months ago</em>
                    </span>
                  </li>
                  <li>
                    <span>
                      <i class="fa fa-cog text-primary-dark"></i>
                    </span>
                  </li>
                </ul>
                <h3 class="block-title">System updated to v2.01</h3>
              </div>
              <div class="block-content">
                <p class="font-s13">Check the complete changelog at the
                  <a href="javascript:void(0)">activity page</a>.</p>
              </div>
            </div>
            <!-- END System Notification -->
          </div>
        </div>
        <!-- END Timeline -->
      </div>
    </div>
    <!-- END Main Content -->
  </div>
  <!-- END Page Content -->
</main>
<!-- Pop In Modal -->
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
            <form 
              class="form-horizontal" 
              action="{{route('admin-updateprofile')}}" 
              method="post">
              @csrf
              <div class="form-group">
                <div class="col-sm-12">
                  <label for="username">Nama Pengguna</label>
                  <input 
                    class="form-control" 
                    name="name" 
                    placeholder="nama saat ini : {{$user->name}}" 
                    type="text"
                    value="{{$user->name}}">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-12">
                  <img
                    class="img-responsive" 
                    src="{{config('urls._pprofile').$user->pprofile}}" 
                    alt="{{$user->pprofile}}">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-12">
                  <label for="pprofile">Foto Profil</label>
                  <input 
                    class=""
                    name="pprofile"
                    type="file"
                    >
                  <a href="{{route('tes-get-pprofile').$user->pprofile}}">{{config('urls._menus')}}</a>
                </div>
              </div>
              <div class="form-group">
                <div class="col-xs-12">
                  <button class="btn btn-sm btn-info" type="submit">
                    <i class="fa fa-send push-5-r"></i> Send Message</button>
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
<!-- END Pop In Modal -->
@endsection @section('_script')
<!-- Page JS Plugins -->
<script src="assets/js/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
<script src="assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>

<!-- Page JS Code -->
<script src="assets/js/pages/base_forms_wizard.js"></script>
@endsection