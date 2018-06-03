<!-- Header -->
<header id="header-navbar" class="content-mini content-mini-full">
  <!-- Header Navigation Right -->
  <ul class="nav-header pull-right">
    <li>
      <div class="btn-group">
        <button class="btn btn-primary btn-image dropdown-toggle" data-toggle="dropdown" type="button">
          <img src="{{asset('assets/img/avatars/avatar10.jpg')}}" alt="Avatar"> @guest Accounts @else {{ Auth::user()->name }} @endguest
          <span class="caret"></span>
        </button>
        <ul class="dropdown-menu dropdown-menu-right">
          <li class="dropdown-header">Profile</li>
          <li>
            <a tabindex="-1" href="{{route('dashboard')}}">
              <i class="si si-settings pull-right"></i>Dashboard
            </a>
          </li>
          <li class="divider"></li>
          <li class="dropdown-header">Actions</li>
          @guest
          <li>
            <a tabindex="-1" href="{{route('login')}}">
              <i class="si si-lock pull-right"></i>Login
            </a>
          </li>
          @else
          <li>
            <a 
              tabindex="-1" 
              href="{{route('register')}}"
              onclick="
                    event.preventDefault();
                    document.getElementById('logout-form').submit();
                    ">
              <i class="si si-logout pull-right"></i>Log out
            </a>
          </li>
          @endguest
        </ul>
      </div>
    </li>
  </ul>
  <!-- END Header Navigation Right -->

  <!-- Header Navigation Left -->
  <ul class="nav-header pull-left">

    <li>
      <!-- Opens the Apps modal found at the bottom of the page, before including JS code -->
      <a href="{{url('/')}}" class="btn pull-right">
        <i class="fa fa-circle-o-notch text-primary push-5-r"></i>KantinKU
      </a>
    </li>
    <li class="visible-xs">
      <!-- Toggle class helper (for .js-header-search below), functionality initialized in App() -> uiToggleClass() -->
      <button class="btn btn-default" data-toggle="class-toggle" data-target=".js-header-search" data-class="header-search-xs-visible"
        type="button">
        <i class="fa fa-search"></i>
      </button>
    </li>
    <li class="js-header-search header-search">
      <form class="form-horizontal" action="#" method="post">
        <div class="form-material form-material-primary input-group remove-margin-t remove-margin-b">
          <input class="form-control" type="text" id="base-material-text" name="base-material-text" placeholder="Search..">
          <span class="input-group-addon">
            <i class="si si-magnifier"></i>
          </span>
        </div>
      </form>
    </li>
  </ul>
  <!-- END Header Navigation Left -->
</header>
<!-- END Header -->
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
  @csrf
</form>