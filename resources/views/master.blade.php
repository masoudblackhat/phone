<!doctype html>
<html class="no-js " lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
    <title>:: آرئو مدیریت بوت استرپ 4 :: خانه</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/plugins/charts-c3/plugin.css') }}"/>

    <link rel="stylesheet" href="{{ asset('assets/plugins/morrisjs/morris.min.css') }}"/>
    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.min.css') }}">
    <link rel="stylesheet" href="{{asset('/assets/sweetalert/sweetalert2.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/multi-select/css/multi-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/jquery-spinner/css/bootstrap-spinner.css') }}">
    <!-- Bootstrap Tagsinput Css -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}">
    <!-- Bootstrap Select Css -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-select/css/bootstrap-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/select2.css') }}">
</head>

<body class="theme-blush">

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin" src="{{ asset('/assets/images/loader.svg') }}" width="48" height="48" alt="Aero">
        </div>
        <p>لطفا صبر کنید...</p>
    </div>
</div>

<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<!-- Main Search -->
<div id="search">
    <button id="close" type="button" class="close btn btn-primary btn-icon btn-icon-mini btn-round">x</button>
    <form>
        <input type="search" value="" placeholder="جستجو..."/>
        <button type="submit" class="btn btn-primary">جستجو</button>
    </form>
</div>

<!-- Right Icon menu Sidebar -->
@include('layouts.navbarright')

<!-- Left Sidebar -->
@include('layouts.leftsidebar')

<!-- Right Sidebar -->
@include('layouts.rightsidebar')

<!-- Main Content -->

<section class="content">
    @yield('content')
</section>

@include('alerts.sweetalert.success')
@include('alerts.sweetalert.error')
@include('alerts.sweetalert.delete-confirm')

<!-- Jquery Core Js -->
<script src="{{ asset('/assets/bundles/libscripts.bundle.js') }}"></script>
<!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) -->
<script src="{{ asset('/assets/bundles/vendorscripts.bundle.js') }}"></script>
<!-- slimscroll, waves Scripts Plugin Js -->

<script src="{{ asset('/assets/bundles/jvectormap.bundle.js') }}"></script> <!-- JVectorMap Plugin Js -->
<script src="{{ asset('/assets/bundles/sparkline.bundle.js') }}"></script> <!-- Sparkline Plugin Js -->
<script src="{{ asset('/assets/bundles/c3.bundle.js') }}"></script>

<script src="{{ asset('/assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('/assets/js/pages/index.js') }}"></script>
<script src="{{ asset('/assets/sweetalert/sweetalert2.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery-inputmask/jquery.inputmask.bundle.js') }}"></script> <!-- Input Mask Plugin Js -->
<script src="{{ asset('assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script> <!-- Bootstrap Tags Input Plugin Js -->
<script src="{{ asset('assets/plugins/nouislider/nouislider.js') }}"></script> <!-- noUISlider Plugin Js -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<script src="{{ asset('assets/plugins/select2/select2.min.js') }}"></script> <!-- Select2 Js -->
</body>

</html>
