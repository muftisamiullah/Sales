<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.includes.headSidebar')
</head>

<body>
<!-- Preloader -->
@include('agentadmin.includes.loader')
<!-- /Preloader -->

<!-- HK Wrapper -->
<div class="hk-wrapper hk-vertical-nav">

    <!-- Top Navbar -->
@include('agentadmin.includes.topNavbar')
    <!-- /Top Navbar -->

    <!-- Vertical Nav -->
@include('agentadmin.includes.leftNavBar')
    <!-- /Vertical Nav -->

    <!-- Setting Panel -->
@include('agentadmin.includes.settingsPanel')
    <!-- /Setting Panel -->

    <!-- Main Content -->
@yield('content')
    <!-- /Main Content -->
</div>
<!-- /HK Wrapper -->
@yield('page-script')
</body>
</html>



