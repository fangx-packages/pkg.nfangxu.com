<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app_name') }} @hasSection('title') - @yield("title", '') @endif</title>

    <!--Favicon -->
    <link rel="icon" href="favicon.ico" type="image/x-icon"/>

    <!--Bootstrap.min css-->
    <link rel="stylesheet" href="{{ assets('plugins/bootstrap/css/bootstrap.min.css') }}">

    <!--mCustomScrollbar css-->
    <link rel="stylesheet" href="{{ assets('plugins/scroll-bar/jquery.mCustomScrollbar.css') }}">

    <!--Icons css-->
    <link rel="stylesheet" href="{{ assets('css/icons.css') }}">

    <!--Style css-->
    <link rel="stylesheet" href="{{ assets('css/style.css') }}">

    <!--Sidemenu css-->
    <link rel="stylesheet" href="{{ assets('plugins/toggle-menu/sidemenu.css') }}">
    @yield("style")
</head>

@yield("body")

<!--Jquery.min js-->
<script src="{{ assets('js/jquery.min.js') }}"></script>

<!--popper js-->
<script src="{{ assets('js/popper.js') }}"></script>

<!--Tooltip js-->
<script src="{{ assets('js/tooltip.js') }}"></script>

<!--Bootstrap.min js-->
<script src="{{ assets('plugins/bootstrap/js/bootstrap.min.js') }}"></script>

<!--Jquery.nicescroll.min js-->
<script src="{{ assets('plugins/nicescroll/jquery.nicescroll.min.js') }}"></script>

<!--Scroll-up-bar.min js-->
<script src="{{ assets('plugins/scroll-up-bar/dist/scroll-up-bar.min.js') }}"></script>

<!--Sidemenu js-->
<script src="{{ assets('plugins/toggle-menu/sidemenu.js') }}"></script>

<!--mCustomScrollbar js-->
<script src="{{ assets('plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js') }}"></script>

<!--Morris js-->
<script src="{{ assets('plugins/morris/morris.min.js') }}"></script>
<script src="{{ assets('plugins/morris/raphael.min.js') }}"></script>

<!--Scripts js-->
<script src="{{ assets('js/scripts.js') }}"></script>

@yield("script")
</html>