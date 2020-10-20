<!DOCTYPE html>
<html>
<head>

<!-- Title -->
<title>{{ config('app.name', 'Laravel') }}</title>

<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta charset="UTF-8">
<link rel='shortcut icon' type='image/x-icon' href="{{asset('/favicon.png')}}" />

<!-- Styles -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
<link href="{{asset('vendor/assets')}}/plugins/pace-master/themes/blue/pace-theme-flash.css" rel="stylesheet"/>
<link href="{{asset('vendor/assets')}}/plugins/uniform/css/uniform.default.min.css" rel="stylesheet"/>
<link href="{{asset('vendor/assets')}}/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="{{asset('vendor/assets')}}/plugins/fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
<link href="{{asset('vendor/assets')}}/plugins/line-icons/simple-line-icons.css" rel="stylesheet" type="text/css"/>	
<link href="{{asset('vendor/assets')}}/plugins/offcanvasmenueffects/css/menu_cornerbox.css" rel="stylesheet" type="text/css"/>	
<link href="{{asset('vendor/assets')}}/plugins/waves/waves.min.css" rel="stylesheet" type="text/css"/>	
<link href="{{asset('vendor/assets')}}/plugins/switchery/switchery.min.css" rel="stylesheet" type="text/css"/>
<link href="{{asset('vendor/assets')}}/plugins/3d-bold-navigation/css/style.css" rel="stylesheet" type="text/css"/>
<link href="{{asset('vendor/assets')}}/plugins/slidepushmenus/css/component.css" rel="stylesheet" type="text/css"/>
<link href="{{asset('vendor/assets')}}/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" type="text/css"/>
<link href="{{asset('vendor/assets')}}/plugins/weather-icons-master/css/weather-icons.min.css" rel="stylesheet" type="text/css"/>	
<link href="{{asset('vendor/assets')}}/plugins/metrojs/MetroJs.min.css" rel="stylesheet" type="text/css"/>
<link href="{{asset('vendor/assets')}}/plugins/datatables/css/jquery.datatables.min.css" rel="stylesheet" type="text/css"/>
<link href="{{asset('vendor/assets')}}/plugins/datatables/css/jquery.datatables_themeroller.css" rel="stylesheet" type="text/css"/>
	
<!-- Theme Styles -->
<link href="{{asset('vendor/assets')}}/css/modern.min.css" rel="stylesheet" type="text/css"/>
<link href="{{asset('vendor/assets')}}/css/themes/green.css" class="theme-color" rel="stylesheet" type="text/css"/>
<link href="{{asset('vendor/assets')}}/css/custom.css" rel="stylesheet" type="text/css"/>

<!-- SweetAlert2 -->
<link rel="stylesheet" href="{{asset('vendor/sweetalert')}}/sweetalert.css">
<!-- End SweetAlert2 -->
<script src="{{asset('vendor/assets')}}/plugins/3d-bold-navigation/js/modernizr.js"></script>
<script src="{{asset('vendor/assets')}}/plugins/offcanvasmenueffects/js/snap.svg-min.js"></script>

        
</head>   
    <body class="page-header-fixed">
        <div class="overlay"></div>
        <form class="search-form" action="#" method="GET">
            <div class="input-group">
                <input type="text" name="search" class="form-control search-input" placeholder="Search...">
                <span class="input-group-btn">
                    <button class="btn btn-default close-search waves-effect waves-button waves-classic" type="button"><i class="fa fa-times"></i></button>
                </span>
            </div><!-- Input Group -->
        </form><!-- Search Form -->
        <main class="page-content content-wrap">
            <div class="navbar">
                <div class="navbar-inner">
                    <div class="sidebar-pusher">
                        <a href="javascript:void(0);" class="waves-effect waves-button waves-classic push-sidebar">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div>
                    <div class="logo-box">
                        <a href="{{url('/admin')}}" class="logo-text"><span>{{ config('app.name', 'Laravel') }}</span></a>
                    </div><!-- Logo Box -->
                    <div class="search-button">
                        <a href="javascript:void(0);" class="waves-effect waves-button waves-classic show-search"><i class="fa fa-search"></i></a>
                    </div>
                    <div class="topmenu-outer">
                        <div class="top-menu">
                            <ul class="nav navbar-nav navbar-left">
                                <li>        
                                    <a href="javascript:void(0);" class="waves-effect waves-button waves-classic sidebar-toggle"><i class="fa fa-bars"></i></a>
                                </li>
                                <li>        
                                    <a href="javascript:void(0);" class="waves-effect waves-button waves-classic toggle-fullscreen"><i class="fa fa-expand"></i></a>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li>    
                                    <a href="javascript:void(0);" class="waves-effect waves-button waves-classic show-search"><i class="fa fa-search"></i></a>
                                </li>
                                <li>
                                    <a href="{{route('logout')}}" class="log-out waves-effect waves-button waves-classic">
                                        <span><i class="fa fa-sign-out m-r-xs"></i>Log out</span>
                                    </a>
                                </li>
                            </ul><!-- Nav -->
                        </div><!-- Top Menu -->
                    </div>
                </div>
            </div><!-- Navbar -->
            @include('admin.sidebar')
            @yield('content')
        </main><!-- Page Content -->    

        <!-- Javascripts -->
        <script src="{{asset('vendor/assets')}}/plugins/jquery/jquery-2.1.4.min.js"></script>
        <script src="{{asset('vendor/assets')}}/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="{{asset('vendor/assets')}}/plugins/pace-master/pace.min.js"></script>
        <script src="{{asset('vendor/assets')}}/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="{{asset('vendor/assets')}}/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="{{asset('vendor/assets')}}/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="{{asset('vendor/assets')}}/plugins/switchery/switchery.min.js"></script>
        <script src="{{asset('vendor/assets')}}/plugins/uniform/jquery.uniform.min.js"></script>
        <script src="{{asset('vendor/assets')}}/plugins/offcanvasmenueffects/js/classie.js"></script>
        <script src="{{asset('vendor/assets')}}/plugins/offcanvasmenueffects/js/main.js"></script>
        <script src="{{asset('vendor/assets')}}/plugins/waves/waves.min.js"></script>
        <script src="{{asset('vendor/assets')}}/plugins/3d-bold-navigation/js/main.js"></script>
        <script src="{{asset('vendor/assets')}}/plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="{{asset('vendor/assets')}}/plugins/jquery-counterup/jquery.counterup.min.js"></script>
        <script src="{{asset('vendor/assets')}}/plugins/flot/jquery.flot.min.js"></script>
        <script src="{{asset('vendor/assets')}}/plugins/flot/jquery.flot.time.min.js"></script>
        <script src="{{asset('vendor/assets')}}/plugins/flot/jquery.flot.symbol.min.js"></script>
        <script src="{{asset('vendor/assets')}}/plugins/flot/jquery.flot.resize.min.js"></script>
        <script src="{{asset('vendor/assets')}}/plugins/flot/jquery.flot.tooltip.min.js"></script>
        <script src="{{asset('vendor/assets')}}/plugins/curvedlines/curvedLines.js"></script>
        <script src="{{asset('vendor/assets')}}/plugins/metrojs/MetroJs.min.js"></script>
        <script src="{{asset('vendor/assets')}}/js/modern.js"></script>
        <script src="{{asset('vendor/assets')}}/js/pages/dashboard.js"></script>
        <script src="{{asset('vendor/assets')}}/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script src="{{asset('vendor/sweetalert')}}/sweetalert.min.js"></script>
        <script src="{{asset('vendor/assets')}}/plugins/datatables/js/jquery.datatables.min.js"></script>
        <script>
            $("#dataTable").dataTable();
        </script>
        <script src="https://cdn.ckeditor.com/4.11.4/full/ckeditor.js"></script>
        <script>
            CKEDITOR.replace( 'editor' );
        </script>
        @include('vendor.sweet.alert')
    </body>
</html>