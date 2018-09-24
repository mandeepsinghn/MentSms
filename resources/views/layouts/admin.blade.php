<!DOCTYPE html>
<html lang="en">

<head>
    <title>Material Admin - Blank page</title>

    <!-- BEGIN META -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="your,keywords">
    <meta name="description" content="Short explanation about this website">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- END META -->

    <!-- BEGIN STYLESHEETS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'
    />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/theme-default/bootstrap.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/theme-default/materialadmin.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/theme-default/font-awesome.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/theme-default/material-design-iconic-font.min.css')}}" />
    <!-- END STYLESHEETS -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
		<script type="text/javascript" src="{{asset('assets/js/libs/utils/html5shiv.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/js/libs/utils/respond.min.js')}}"></script>
        <![endif]-->
    @stack('style')
</head>

<body class="menubar-hoverable header-fixed menubar-pin ">
    @component('components.admin.header') @endcomponent


    <!-- BEGIN BASE-->
    <div id="base">

        <!-- BEGIN OFFCANVAS LEFT -->
        <div class="offcanvas">
        </div>
        <!--end .offcanvas-->
        <!-- END OFFCANVAS LEFT -->

        <!-- BEGIN CONTENT-->
        <div id="content">

            @yield('content')
        </div>
        <!--end #content-->
        <!-- END CONTENT -->

        @component('components.admin.menu') @endcomponent @component('components.admin.rightPanel') @endcomponent

    </div>
    <!--end #base-->
    <!-- END BASE -->

    <!-- BEGIN JAVASCRIPT -->
    <script src="{{asset('assets/js/libs/jquery/jquery-1.11.2.min.js')}}"></script>
    <script src="{{asset('assets/js/libs/jquery/jquery-migrate-1.2.1.min.js')}}"></script>
    <script src="{{asset('assets/js/libs/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/libs/spin.js/spin.min.js')}}"></script>
    <script src="{{asset('assets/js/libs/autosize/jquery.autosize.min.js')}}"></script>
    <script src="{{asset('assets/js/libs/nanoscroller/jquery.nanoscroller.min.js')}}"></script>
    <script src="{{asset('assets/js/core/source/App.js')}}"></script>
    <script src="{{asset('assets/js/core/source/AppNavigation.js')}}"></script>
    <script src="{{asset('assets/js/core/source/AppOffcanvas.js')}}"></script>
    <script src="{{asset('assets/js/core/source/AppCard.js')}}"></script>
    <script src="{{asset('assets/js/core/source/AppForm.js')}}"></script>
    <script src="{{asset('assets/js/core/source/AppNavSearch.js')}}"></script>
    <script src="{{asset('assets/js/core/source/AppVendor.js')}}"></script>
    <script src="{{asset('assets/js/core/demo/Demo.js')}}"></script>
    @stack('scripts')
    <!-- END JAVASCRIPT -->

</body>

</html>
