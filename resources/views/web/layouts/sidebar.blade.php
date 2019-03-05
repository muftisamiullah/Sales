<!DOCTYPE html>
<html lang="en">

<head>
    @include('web.includes.headSidebar')
</head>

<body>
<!-- Preloader -->
@include('web.includes.loader')
<!-- /Preloader -->

<!-- Wrapper -->
<div>

    <!-- Top Navbar -->
@include('web.includes.topNavbar')
    <!-- /Top Navbar -->

    <!-- Main Content -->
@yield('content')

    <!-- /Main Content -->
</div>
<!-- /HK Wrapper -->
@yield('page-script')
</body>
</html>
