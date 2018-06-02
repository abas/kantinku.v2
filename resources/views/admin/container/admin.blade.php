@include('admin.container._head')
<body>
    <!-- Page Container -->
    <div id="page-container" class="sidebar-l sidebar-o side-scroll header-navbar-fixed">
        @include('admin.container.asset._sidebar') @include('admin.container.asset._header') @yield('content') @include('admin.container.asset._footer')
    </div>
    <!-- END Page Container -->
    @include('container._script')
</body>
</html>