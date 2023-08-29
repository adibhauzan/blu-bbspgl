<!DOCTYPE html>
<html style="height: auto;">
@include('admin.partials.header')

<body class="hold-transition sidebar-mini layout-fixed">
   
    <div class="wrapper">
        @include('admin.partials.navbar')
        @include('admin.partials.sidebar')
        @yield('main-content')
    </div>

    @include('admin.partials.scriptjs')

</body>

</html>
