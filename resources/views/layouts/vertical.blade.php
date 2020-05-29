<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="endless admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, endless admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href='{{asset("/assets/images/favicon.png")}}' type="image/x-icon">
    <link rel="shortcut icon" href='{{asset("/assets/images/favicon.png")}}' type="image/x-icon">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    @include('layouts.link')
    @yield('link')
    <link rel="stylesheet" type="text/css" href='{{url("/assets/css/owlcarousel.css")}}'>
</head>
<body main-theme-layout="rtl">
<!-- Loader starts-->
<div class="loader-wrapper">
    <div class="loader bg-white">
        <div class="whirly-loader"> </div>
    </div>
</div>
<!-- Loader ends-->
<!-- page-wrapper Start-->
<div class="page-wrapper vertical">
    <!-- Page Header Start-->
@include('layouts.header')
<!-- Page Header Ends                              -->
    <!-- vertical menu start-->
    <div class="vertical-menu-main">
        <nav id="main-nav">
            <!-- Sample menu definition-->
            @include('layouts.vertical_menu')
        </nav>
    </div>
    <!-- vertical menu ends-->
    <!-- Page Body Start-->
    <div class="page-body-wrapper">
        <!-- Right sidebar Start-->
    @include('panel.layouts.right-sidebar')
    <!-- Right sidebar Ends-->
        <div class="page-body vertical-menu-mt">
            <div class="container-fluid">
                <div class="page-header">
                    @include('partials.alerts')
                    @if(session('mustVerifyEmail'))
                        <div class="alert alert-warning">
                            @lang('auth.you must verify your email',['link'=>route('auth.email.send.verification')])
                        </div>
                    @endif
                    @if(session('verificationEmailSent'))
                        <div class="alert alert-success text-center">
                            @lang('auth.verification email sent')
                        </div>
                    @endif
                    <div class="row">
                        <div class="col">
                            <div class="page-header-left">
                                @yield('breadcrumb')
                            </div>
                        </div>
                        <!-- Bookmark Start-->
                    @include('panel.layouts.bookmark')
                    <!-- Bookmark Ends-->
                    </div>
                </div>
            </div>
            <!-- Container-fluid starts-->
        @yield('content')
        <!-- Container-fluid Ends-->
        </div>
    </div>
</div>
@include('layouts.script')
@yield('script')
<script src='{{url("/assets/js/owlcarousel/owl.carousel.js")}}'></script>
<script src='{{url("/assets/js/owlcarousel/owl-custom.js")}}'></script>
</body>

</html>
