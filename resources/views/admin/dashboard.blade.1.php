<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-focus" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">

    <title>KantinKU - Kantin Kampus Udinus</title>

    <meta name="description" content="OneUI - Admin Dashboard Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="assets/img/favicons/favicon.png">

    <link rel="icon" type="image/png" href="assets/img/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="assets/img/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="assets/img/favicons/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="assets/img/favicons/favicon-160x160.png" sizes="160x160">
    <link rel="icon" type="image/png" href="assets/img/favicons/favicon-192x192.png" sizes="192x192">

    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Web fonts -->
    <!-- <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700"> -->

    <!-- Bootstrap and OneUI CSS framework -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" id="css-main" href="assets/css/oneui.css">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
    <!-- END Stylesheets -->
</head>

<body>
    <!-- Page Container -->
    <div id="page-container" class="sidebar-l sidebar-o side-scroll header-navbar-fixed">
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
                        <a class="h5 text-white" href="index.html">
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
                                <a href="dashboard.html">
                                    <i class="si si-speedometer"></i>
                                    <span class="sidebar-mini-hide">Pesanan</span>
                                </a>
                            </li>
                            <li class="nav-main-heading">
                                <span class="sidebar-mini-hide">Menu</span>
                            </li>
                            <li>
                                <a href="tambah_menu.html">
                                    <i class="si si-plus"></i>
                                    <span class="sidebar-mini-hide">Tambah</span>
                                </a>
                            </li>
                            <li>
                                <a href="list_menu.html">
                                    <i class="si si-list"></i>
                                    <span class="sidebar-mini-hide">List</span>
                                </a>
                            </li>
                            <li class="nav-main-heading">
                                <span class="sidebar-mini-hide">Accounts</span>
                            </li>
                            <!-- <li>
                                <a href="login.html">
                                    <i class="si si-login"></i>
                                    <span class="sidebar-mini-hide">Login</span>
                                </a>
                            </li> -->
                            <li>
                                <a href="login.html">
                                    <i class="si si-logout"></i>
                                    <span class="sidebar-mini-hide">Logout</span>
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

        <!-- Header -->
        <header id="header-navbar" class="content-mini content-mini-full bg-blue">
            <!-- Header Navigation Left -->
            <ul class="nav-header">

                <li class="hidden-xs hidden-sm pull-left">
                    <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                    <button class="btn btn-default" data-toggle="layout" data-action="sidebar_mini_toggle" type="button">
                        <i class="fa fa-ellipsis-v"></i>
                    </button>
                </li>
                <li class="visible-xs pull-left">
                    <!-- Toggle class helper (for .js-header-search below), functionality initialized in App() -> uiToggleClass() -->
                    <button class="btn btn-default" data-toggle="class-toggle" data-target=".js-header-search" data-class="header-search-xs-visible"
                        type="button">
                        <i class="fa fa-search"></i>
                    </button>
                </li>
                <li class="js-header-search header-search pull-right">
                    <form class="form-horizontal" action="search_result.html" method="post">
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

        <!-- Main Container -->
        <main id="main-container">
            <!-- Page Content -->
            <div class="content content-narrow">
                <!-- Simple Wizards -->
                <h2 class="content-heading">Daftar Pesanan</h2>
                <div class="row">
                    <div class="col-lg-6">
                        <!-- Simple Classic Wizard (.js-wizard-simple class is initialized in js/pages/base_forms_wizard.js) -->
                        <!-- For more examples you can check out http://vadimg.com/twitter-bootstrap-wizard-example/ -->
                        <div class="js-wizard-simple block">
                            <!-- Step Tabs -->
                            <ul class="nav nav-tabs nav-justified">
                                <li class="active">
                                    <a href="#simple-classic-step1" data-toggle="tab">Menu</a>
                                </li>
                                <li>
                                    <a href="#simple-classic-step2" data-toggle="tab">Details</a>
                                </li>
                                <li>
                                    <a href="#simple-classic-step3" data-toggle="tab">Action</a>
                                </li>
                            </ul>
                            <!-- END Step Tabs -->

                            <!-- Form -->
                            <form class="form-horizontal" action="dashboard.html" method="">
                                <!-- Steps Content -->
                                <div class="block-content tab-content">
                                    <!-- Step 1 -->
                                    <div class="tab-pane push-30-t push-50 active" id="simple-classic-step1">
                                        <div class="form-group">
                                            <div class="col-sm-10 col-sm-offset-1">
                                                <label for="">
                                                    <h3>Rica-Rica Daging Sapi</h3>
                                                </label>
                                                <img src="assets/img/food/daging.jpg" alt="" class="img-responsive" id="image_menu">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END Step 1 -->

                                    <!-- Step 2 -->
                                    <div class="tab-pane push-30-t push-50" id="simple-classic-step2">
                                        <div class="form-group">
                                            <div class="col-sm-10 col-sm-offset-1">
                                                <label for="simple-classic-details">Pemesan</label>
                                                <p class="form-control">Ahmad Basir</p>
                                            </div>
                                            <div class="col-sm-10 col-sm-offset-1">
                                                <label for="simple-classic-details">Jumlah, Harga & Total Bayar</label>
                                                <p class="form-control">1 x Rp. 10000 :
                                                    <b>Rp. 10000</b>
                                                </p>
                                            </div>
                                            <div class="col-sm-10 col-sm-offset-1">
                                                <label for="simple-classic-details">Kontak</label>
                                                <p class="form-control">telegram @Abas_</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END Step 2 -->

                                    <!-- Step 3 -->
                                    <div class="tab-pane push-30-t push-50" id="simple-classic-step3">
                                        <div class="form-group">
                                            <div class="col-sm-10 col-sm-offset-1">
                                                <label for="alamat">Jenis Pesanan</label>
                                                <p class="form-control">Antar</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-10 col-sm-offset-1">
                                                <label for="alamat">Alamat</label>
                                                <p class="form-control">Banowati Selatan no 6</p>
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
                                    <!-- <div class="tab-pane push-30-t push-50" id="simple-classic-step3">
                                        <div class="form-group">
                                            <div class="col-sm-10 col-sm-offset-1">
                                                <p class="form-control">beritahu pemesan, pesanan sudah bisa di ambil</p>
                                                <button class="btn btn-warning">Kirim</button>
                                            </div>
                                        </div>
                                    </div> -->
                                    <!-- END Step 3 -->
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

                    <div class="col-lg-6">
                        <!-- Simple Classic Wizard (.js-wizard-simple class is initialized in js/pages/base_forms_wizard.js) -->
                        <!-- For more examples you can check out http://vadimg.com/twitter-bootstrap-wizard-example/ -->
                        <div class="js-wizard-simple block">
                            <!-- Step Tabs -->
                            <ul class="nav nav-tabs nav-justified">
                                <li class="active">
                                    <a href="#simple-classic-step4" data-toggle="tab">Menu</a>
                                </li>
                                <li>
                                    <a href="#simple-classic-step5" data-toggle="tab">Details</a>
                                </li>
                                <li>
                                    <a href="#simple-classic-step6" data-toggle="tab">Action</a>
                                </li>
                            </ul>
                            <!-- END Step Tabs -->

                            <!-- Form -->
                            <form class="form-horizontal" action="dashboard.html" method="">
                                <!-- Steps Content -->
                                <div class="block-content tab-content">
                                    <!-- Step 1 -->
                                    <div class="tab-pane push-30-t push-50 active" id="simple-classic-step4">
                                        <div class="form-group">
                                            <div class="col-sm-10 col-sm-offset-1">
                                                <label for="">
                                                    <h3>Pecel Lele</h3>
                                                </label>
                                                <img src="assets/img/food/pecel-lele.jpg" alt="" class="img-responsive" id="image_menu">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END Step 1 -->

                                    <!-- Step 2 -->
                                    <div class="tab-pane push-30-t push-50" id="simple-classic-step5">
                                        <div class="form-group">
                                            <div class="col-sm-10 col-sm-offset-1">
                                                <label for="simple-classic-details">Pemesan</label>
                                                <p class="form-control">Hermawan Luthfi Nugroho</p>
                                            </div>
                                            <div class="col-sm-10 col-sm-offset-1">
                                                <label for="simple-classic-details">Jumlah, Harga & Total Bayar</label>
                                                <p class="form-control">1 x Rp. 7500 :
                                                    <b>Rp. 7500</b>
                                                </p>
                                            </div>
                                            <div class="col-sm-10 col-sm-offset-1">
                                                <label for="simple-classic-details">Kontak</label>
                                                <p class="form-control">telegram @Hermawanln</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END Step 2 -->

                                    <!-- Step 3 -->
                                    <div class="tab-pane push-30-t push-50" id="simple-classic-step6">
                                        <div class="form-group">
                                            <div class="col-sm-10 col-sm-offset-1">
                                                <label for="kirim_pesan">Jenis Pesanan</label>
                                                <p class="form-control">Ambil</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-10 col-sm-offset-1">
                                                <label for="kirim_pesan">Beritahu Pemesan</label>
                                                <p class="form-control">Terimakasih, Pesanan Anda Sudah Jadi.</p>
                                                <confirm onclick="konfirmasi_pesanan()" class="btn btn-warning" id="konfirmasi_pesanan">Send</confirm>
                                                <script>
                                                    function konfirmasi_pesanan() {
                                                        document.getElementById("konfirmasi_pesanan").classList.remove(
                                                            "btn-warning")
                                                        document.getElementById("konfirmasi_pesanan").classList.add(
                                                            "btn-success")
                                                        document.getElementById("konfirmasi_pesanan").innerHTML =
                                                            "pesan telah terkirim"
                                                    }
                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END Step 3 -->
                                    <!-- else step 3 -->
                                    <!-- <div class="tab-pane push-30-t push-50" id="simple-classic-step3">
                                            <div class="form-group">
                                                <div class="col-sm-10 col-sm-offset-1">
                                                    <p class="form-control">beritahu pemesan, pesanan sudah bisa di ambil</p>
                                                    <button class="btn btn-warning">Kirim</button>
                                                </div>
                                            </div>
                                        </div> -->
                                    <!-- END Step 3 -->
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

                    <div class="col-lg-6">
                        <!-- Simple Classic Wizard (.js-wizard-simple class is initialized in js/pages/base_forms_wizard.js) -->
                        <!-- For more examples you can check out http://vadimg.com/twitter-bootstrap-wizard-example/ -->
                        <div class="js-wizard-simple block">
                            <!-- Step Tabs -->
                            <ul class="nav nav-tabs nav-justified">
                                <li class="active">
                                    <a href="#simple-classic-step7" data-toggle="tab">Menu</a>
                                </li>
                                <li>
                                    <a href="#simple-classic-step8" data-toggle="tab">Details</a>
                                </li>
                                <li>
                                    <a href="#simple-classic-step9" data-toggle="tab">Action</a>
                                </li>
                            </ul>
                            <!-- END Step Tabs -->

                            <!-- Form -->
                            <form class="form-horizontal" action="dashboard.html" method="">
                                <!-- Steps Content -->
                                <div class="block-content tab-content">
                                    <!-- Step 1 -->
                                    <div class="tab-pane push-30-t push-50 active" id="simple-classic-step7">
                                        <div class="form-group">
                                            <div class="col-sm-10 col-sm-offset-1">
                                                <label for="">
                                                    <h3>Batte Batte Chocolate</h3>
                                                </label>
                                                <img src="assets/img/food/coklat.jpg" alt="" class="img-responsive" id="image_menu">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END Step 1 -->

                                    <!-- Step 2 -->
                                    <div class="tab-pane push-30-t push-50" id="simple-classic-step8">
                                        <div class="form-group">
                                            <div class="col-sm-10 col-sm-offset-1">
                                                <label for="simple-classic-details">Pemesan</label>
                                                <p class="form-control">Hafidz</p>
                                            </div>
                                            <div class="col-sm-10 col-sm-offset-1">
                                                <label for="simple-classic-details">Jumlah, Harga & Total Bayar</label>
                                                <p class="form-control">2 x Rp. 12500 :
                                                    <b>Rp. 25000</b>
                                                </p>
                                            </div>
                                            <div class="col-sm-10 col-sm-offset-1">
                                                <label for="simple-classic-details">Kontak</label>
                                                <p class="form-control">telegram @hafdiz</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END Step 2 -->

                                    <!-- Step 3 -->
                                    <div class="tab-pane push-30-t push-50" id="simple-classic-step9">
                                        <div class="form-group">
                                            <div class="col-sm-10 col-sm-offset-1">
                                                <p class="form-control">Bima Timur no 6</p>
                                                <button class="btn btn-warning" type="button">Kirim</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END Step 3 -->
                                    <!-- else step 3 -->
                                    <!-- <div class="tab-pane push-30-t push-50" id="simple-classic-step3">
                                                <div class="form-group">
                                                    <div class="col-sm-10 col-sm-offset-1">
                                                        <p class="form-control">beritahu pemesan, pesanan sudah bisa di ambil</p>
                                                        <button class="btn btn-warning">Kirim</button>
                                                    </div>
                                                </div>
                                            </div> -->
                                    <!-- END Step 3 -->
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

                    <div class="col-lg-6">
                        <!-- Simple Classic Wizard (.js-wizard-simple class is initialized in js/pages/base_forms_wizard.js) -->
                        <!-- For more examples you can check out http://vadimg.com/twitter-bootstrap-wizard-example/ -->
                        <div class="js-wizard-simple block">
                            <!-- Step Tabs -->
                            <ul class="nav nav-tabs nav-justified">
                                <li class="active">
                                    <a href="#simple-classic-step10" data-toggle="tab">Menu</a>
                                </li>
                                <li>
                                    <a href="#simple-classic-step11" data-toggle="tab">Details</a>
                                </li>
                                <li>
                                    <a href="#simple-classic-step12" data-toggle="tab">Action</a>
                                </li>
                            </ul>
                            <!-- END Step Tabs -->

                            <!-- Form -->
                            <form class="form-horizontal" action="dashboard.html" method="">
                                <!-- Steps Content -->
                                <div class="block-content tab-content">
                                    <!-- Step 1 -->
                                    <div class="tab-pane push-30-t push-50 active" id="simple-classic-step10">
                                        <div class="form-group">
                                            <div class="col-sm-10 col-sm-offset-1">
                                                <label for="">
                                                    <h3>Pizza Delisiuso</h3>
                                                </label>
                                                <img src="assets/img/food/pizza.jpg" alt="" class="img-responsive" id="image_menu">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END Step 1 -->

                                    <!-- Step 2 -->
                                    <div class="tab-pane push-30-t push-50" id="simple-classic-step11">
                                        <div class="form-group">
                                            <div class="col-sm-10 col-sm-offset-1">
                                                <label for="simple-classic-details">Pemesan</label>
                                                <p class="form-control">Dwi Dian Ayu</p>
                                            </div>
                                            <div class="col-sm-10 col-sm-offset-1">
                                                <label for="simple-classic-details">Jumlah, Harga & Total Bayar</label>
                                                <p class="form-control">3 x Rp. 10000 :
                                                    <b>Rp. 30000</b>
                                                </p>
                                            </div>
                                            <div class="col-sm-10 col-sm-offset-1">
                                                <label for="simple-classic-details">Kontak</label>
                                                <p class="form-control">telegram @ayuk</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END Step 2 -->

                                    <!-- Step 3 -->
                                    <div class="tab-pane push-30-t push-50" id="simple-classic-step12">
                                        <div class="form-group">
                                            <div class="col-sm-10 col-sm-offset-1">
                                                <p class="form-control">Arjuna barat no 6</p>
                                                <button class="btn btn-warning" type="button">Kirim</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END Step 3 -->
                                    <!-- else step 3 -->
                                    <!-- <div class="tab-pane push-30-t push-50" id="simple-classic-step3">
                                                    <div class="form-group">
                                                        <div class="col-sm-10 col-sm-offset-1">
                                                            <p class="form-control">beritahu pemesan, pesanan sudah bisa di ambil</p>
                                                            <button class="btn btn-warning">Kirim</button>
                                                        </div>
                                                    </div>
                                                </div> -->
                                    <!-- END Step 3 -->
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
                </div>
                <!-- END Page Content -->
        </main>
        <!-- END Main Container -->

        <!-- Footer -->
        <footer id="page-footer" class="content-mini content-mini-full font-s12 bg-gray-lighter clearfix">
            <div class="pull-right">
                Develop with
                <i class="fa fa-heart text-city"></i> by
                <a class="font-w600" href="http://goo.gl/vNS3I" target="_blank">Gladiator</a>
            </div>
            <div class="pull-left">
                <a class="font-w600" href="http://goo.gl/6LF10W" target="_blank">DOSCOM</a> &copy;
                <span> 2018 - 20 </span>
            </div>
        </footer>
        <!-- END Footer -->
        </div>
        <!-- END Page Container -->

        <!-- Apps Modal -->
        <!-- Opens from the button in the header -->
        <div class="modal fade" id="apps-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-sm modal-dialog modal-dialog-top">
                <div class="modal-content">
                    <!-- Apps Block -->
                    <div class="block block-themed block-transparent">
                        <div class="block-header bg-primary-dark">
                            <ul class="block-options">
                                <li>
                                    <button data-dismiss="modal" type="button">
                                        <i class="si si-close"></i>
                                    </button>
                                </li>
                            </ul>
                            <h3 class="block-title">Apps</h3>
                        </div>
                        <div class="block-content">
                            <div class="row text-center">
                                <div class="col-xs-6">
                                    <a class="block block-rounded" href="base_pages_dashboard.html">
                                        <div class="block-content text-white bg-default">
                                            <i class="si si-speedometer fa-2x"></i>
                                            <div class="font-w600 push-15-t push-15">Backend</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xs-6">
                                    <a class="block block-rounded" href="frontend_home.html">
                                        <div class="block-content text-white bg-modern">
                                            <i class="si si-rocket fa-2x"></i>
                                            <div class="font-w600 push-15-t push-15">Frontend</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Apps Block -->
                </div>
            </div>
        </div>
        <!-- END Apps Modal -->

        <!-- Terms Modal -->
        <div class="modal fade" id="modal-terms" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-popout">
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
                            <h3 class="block-title">Terms &amp; Conditions</h3>
                        </div>
                        <div class="block-content">
                            <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus
                                mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor
                                tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum
                                quis in sit varius lorem sit metus mi.</p>
                            <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus
                                mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor
                                tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum
                                quis in sit varius lorem sit metus mi.</p>
                            <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus
                                mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor
                                tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum
                                quis in sit varius lorem sit metus mi.</p>
                            <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus
                                mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor
                                tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum
                                quis in sit varius lorem sit metus mi.</p>
                            <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus
                                mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor
                                tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum
                                quis in sit varius lorem sit metus mi.</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Close</button>
                        <button class="btn btn-sm btn-primary" type="button" data-dismiss="modal">
                            <i class="fa fa-check"></i> I agree</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Terms Modal -->

        <!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
        <script src="assets/js/core/jquery.min.js"></script>
        <script src="assets/js/core/bootstrap.min.js"></script>
        <script src="assets/js/core/jquery.slimscroll.min.js"></script>
        <script src="assets/js/core/jquery.scrollLock.min.js"></script>
        <script src="assets/js/core/jquery.appear.min.js"></script>
        <script src="assets/js/core/jquery.countTo.min.js"></script>
        <script src="assets/js/core/jquery.placeholder.min.js"></script>
        <script src="assets/js/core/js.cookie.min.js"></script>
        <script src="assets/js/app.js"></script>

        <!-- Page JS Plugins -->
        <script src="assets/js/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
        <script src="assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>

        <!-- Page JS Code -->
        <script src="assets/js/pages/base_forms_wizard.js"></script>
</body>

</html>