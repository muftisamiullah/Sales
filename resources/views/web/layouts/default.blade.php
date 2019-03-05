<!DOCTYPE html>
<html lang="en">
<head>
    @include('web.includes.head')
</head>
<body>
<!-- Preloader -->
@include('web.includes.loader')
<!-- /Preloader -->

<!-- Wrapper -->
<div>
    <!-- Main Content -->
    <div>
        <!-- header content -->
    @include('web.includes.header')
    <!-- header content end -->
        <div>
            <!-- main content -->
            @yield('content')
        </div>
    </div>
    <!-- /Main Content -->

</div>
<!-- /HK Wrapper -->
@include('web.includes.footDefault')
</body>
</html>