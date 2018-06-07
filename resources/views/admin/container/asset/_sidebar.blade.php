<!-- Sidebar -->
<nav id="sidebar">
    <!-- Sidebar Scroll Container -->
    <div id="sidebar-scroll">
        <!-- Sidebar Content -->
        <!-- Adding .sidebar-mini-hide to an element will hide it when the sidebar is in mini mode -->
        <div class="sidebar-content">
            <!-- Side Header -->
            <div class="side-header side-content bg-white-op">
                <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                <button class="btn btn-link text-gray pull-right hidden-md hidden-lg" type="button" data-toggle="layout" data-action="sidebar_close">
                    <i class="fa fa-times"></i>
                </button>
                <a class="h5 text-white" href="{{url('/')}}">
                    <i class="fa fa-circle-o-notch text-primary"></i>
                    <span class="h4 font-w600 sidebar-mini-hide"> Kantin
                        <b class="text-primary">KU</b>
                    </span>
                </a>
            </div>
            <!-- END Side Header -->

            <!-- Side Content -->
            <div class="side-content">
                <ul class="nav-main">
                    <li>
                        <a href="{{route('dashboard')}}">
                            <i class="si si-speedometer"></i>
                            <span class="sidebar-mini-hide">Pesanan</span>
                        </a>
                    </li>
                    <li class="nav-main-heading">
                        <span class="sidebar-mini-hide">Menu</span>
                    </li>
                    <li>
                        <a href="{{route('admin-tambahmenu')}}">
                            <i class="si si-plus"></i>
                            <span class="sidebar-mini-hide">Tambah</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin-listmenu')}}">
                            <i class="si si-list"></i>
                            <span class="sidebar-mini-hide">List</span>
                        </a>
                    </li>
                    <li class="nav-main-heading">
                        <span class="sidebar-mini-hide">Accounts</span>
                    </li>
                    <li>
                        <a href="{{route('admin-userprofile')}}">
                            <i class="si si-user"></i>
                            <span class="sidebar-mini-hide">Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('logout')}}" onclick="
                                event.preventDefault();
                                document.getElementById('logout-form').submit();
                            ">
                            <i class="si si-logout"></i>
                            <span class="sidebar-mini-hide">Logout</span>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </a>
                    </li>
                    <!-- <li class="nav-main-heading">
                                <span class="sidebar-mini-hide">Manage</span>
                            </li> -->
                    <!-- <li>
                                <a href="lock.html">
                                    <i class="si si-lock"></i>
                                    <span class="sidebar-mini-hide">Lock</span>
                                </a>
                            </li> -->
                </ul>
            </div>
            <!-- END Side Content -->
        </div>
        <!-- Sidebar Content -->
    </div>
    <!-- END Sidebar Scroll Container -->
</nav>
<!-- END Sidebar -->