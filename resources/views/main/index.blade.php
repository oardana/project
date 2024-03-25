<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>

    
    <!-- Fontfaces CSS-->
    <link href="{{asset('css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">


    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Vendor CSS-->
    <link href="{{asset('vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">


    <!-- Main CSS-->
    <link rel="stylesheet" href="{{asset('css/theme.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.structure.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.structure.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.theme.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.theme.min.css')}}">
</head>
<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="{{asset('images/icon/logo.png')}}" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li  class="{{Request::is('member') ? 'active' :''}}" >
                            <a href="/member">
                                <i class="fas fa-group"></i>Master Member</a>
                        </li>
                        <li class="{{Request::is('vehicle') ? 'active' :''}}">
                            <a href="/vehicle">
                                <i class="fas fa-sort-amount-asc"></i>Master Vehicle</a>
                        </li>
                        <li class="{{Request::is('payment') ? 'active':''}}">
                            <a href="/payment" >
                                <i class="fas fa-dollar"></i>Master Payment</a>
                        </li>
                        @can('admin')
                        <li>Administrator</li>
                        <li class="{{Request::is('membership')? 'active':''}}">
                            <a href="/membership"><i class="fa fa-user"></i>Master Membership</a>
                        </li>
                        <li class="{{Request::is('vehicletype')? 'active':''}}">
                            <a href="/vehicletype"><i class="fa fa-tasks"></i>Master VehicleType</a>
                        </li>
                        <li class="{{Request::is('hourlyrate')? 'active':''}}">
                            <a href="/hourlyrate"><i class="fas fa-tachometer-alt"></i>Master Hourlyrate</a>
                        </li>
                        <li class="{{Request::is('parkingdata')? 'active':''}}">
                            <a href="/parkingdata"><i class="fa fa-signal"></i>Master ParkingData</a>
                        </li>   
                        @endcan
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="{{asset('images/icon/logo.png')}}" alt="Cool Admin" />
                </a>
            </div>
            
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li  class="{{Request::is('member') ? 'active' :''}}" >
                            <a href="/member">
                                <i class="fas fa-group"></i>Master Member</a>
                        </li>
                        <li class="{{Request::is('vehicle') ? 'active' :''}}">
                            <a href="/vehicle">
                                <i class="fas fa-sort-amount-asc"></i>Master Vehicle</a>
                        </li>
                        <li class="{{Request::is('payment') ? 'active':''}}">
                            <a href="/payment" >
                                <i class="fas fa-dollar"></i>Master Payment</a>
                        </li>
                        @can('admin')
                        <li class="mr-4 ">Administrator</li>
                        <li class="{{Request::is('membership')? 'active':''}}">
                            <a href="/membership"><i class="fa fa-user"></i>Master Membership</a>
                        </li>
                        <li class="{{Request::is('vehicletype')? 'active':''}}">
                            <a href="/vehicletype"><i class="fa fa-tasks"></i>Master VehicleType</a>
                        </li>
                        <li class="{{Request::is('hourlyrate')? 'active':''}}">
                            <a href="/hourlyrate"><i class="fas fa-tachometer-alt"></i>Master Hourlyrate</a>
                        </li>
                        <li class="{{Request::is('parkingdata')? 'active':''}}">
                            <a href="/parkingdata"><i class="fa fa-signal"></i>Master ParkingData</a>
                        </li>
                        @endcan
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" id="form-header" action="{{Request::is('member') ? '/member':'' }}">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for data &amp; reports..." />
                                    <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                    </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">{{auth()->user()->name}}</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="{{asset('storage/'. auth()->user()->image)}}" alt="No Image" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">{{auth()->user()->name}}</a>
                                                    </h5>
                                                    <span class="email">{{auth()->user()->email}}</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="/logout">
                                                    <i class="zmdi zmdi-power"></i>Logout
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
              @yield('content')
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{asset('vendor/jquery-3.2.1.min.js')}}"></script>
<!-- Bootstrap JS-->
<script src="{{asset('vendor/bootstrap-4.1/popper.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
<!-- Vendor JS       -->
<script src="{{asset('vendor/slick/slick.min.js')}}">
</script>
<script src="{{asset('vendor/wow/wow.min.js')}}"></script>
<script src="{{asset('vendor/animsition/animsition.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
</script>
<script src="{{asset('vendor/counter-up/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('vendor/counter-up/jquery.counterup.min.js')}}">
</script>
<script src="{{asset('vendor/circle-progress/circle-progress.min.js')}}"></script>
<script src="{{asset('vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
<script src="{{asset('vendor/chartjs/Chart.bundle.min.js')}}"></script>
<script src="{{asset('vendor/select2/select2.min.js')}}">
</script>
<script src="{{asset('js/jquery-ui.js')}}"></script>
<script src="{{asset('js/jquery-ui.min.js')}}"></script>
<!-- Main JS-->
<script src="{{asset('js/script.js')}}"></script>
</html>