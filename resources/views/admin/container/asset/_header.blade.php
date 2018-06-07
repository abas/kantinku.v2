<!-- Header -->
<header id="header-navbar" class="content-mini content-mini-full bg-blue">
    <!-- Header Navigation Left -->
    <ul class="nav-header">

        <li class="pull-left">
            <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
            <button class="btn btn-default" data-toggle="layout" data-action="sidebar_toggle" type="button">
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