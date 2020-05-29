<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
          content="endless admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
          content="admin template, endless admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <title>@yield('title')</title>
    @include('panel.layouts.link')
    @yield('link')
</head>
<body main-theme-layout="rtl">
<!-- Loader starts-->

<!-- Loader ends-->
<!-- page-wrapper Start-->
<div class="page-wrapper">
    <!-- Page Header Start-->
@include('panel.layouts.header')
<!-- Page Header Ends-->
    <!-- Page Body Start-->
    <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
    @include('panel.layouts.sidebar')
    <!-- Page Sidebar Ends-->
        <!-- Right sidebar Start-->
    @include('panel.layouts.right-sidebar')
    <!-- Right sidebar Ends-->
        <div class="page-body">
            <div class="container-fluid">
                <div class="page-header">
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
        @include('partials.alerts')
        @yield('content')
        <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        @include('panel.layouts.footer')
    </div>
</div>


@include('panel.layouts.script')
@yield('script')
</body>

</html>
