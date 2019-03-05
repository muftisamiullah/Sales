<!DOCTYPE html>
<html lang="en">
<head>
    @include('agentadmin.includes.head')
</head>
<body>
<!-- Preloader -->
@include('agentadmin.includes.loader')
<!-- /Preloader -->

<!-- HK Wrapper -->
<div class="hk-wrapper">
    <!-- Main Content -->
    <div class="hk-pg-wrapper hk-auth-wrapper">
        <!-- header content -->
    @include('agentadmin.includes.header')
    <!-- header content end -->
        <div class="container-fluid">
            <!-- main content -->
            @yield('content')
        </div>
    </div>
    <!-- /Main Content -->

</div>
<!-- /HK Wrapper -->
@include('agentadmin.includes.footDefault')

</body>
</html>