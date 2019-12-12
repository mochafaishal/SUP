<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{  asset('/images/icon/garuda.jpg')  }}">

    <!-- Title Page-->
    <title>@yield('title')</title>

    <!-- Fontfaces CSS-->
    <link href="{{ asset('/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ asset('/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">
 

    <!-- Vendor CSS-->
    <link href="{{ asset('/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ asset('/css/theme.css')}}" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo.png" alt="Sistem Utilitas Peswat" />
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
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="index.html">Dashboard 1</a>
                                </li>
                                <li>
                                    <a href="index2.html">Dashboard 2</a>
                                </li>
                                <li>
                                    <a href="index3.html">Dashboard 3</a>
                                </li>
                                <li>
                                    <a href="index4.html">Dashboard 4</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="button.html">Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.html">Typography</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="" alt="Sistem Utilitas Pesawat" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                    @if (Auth::check() && Auth::user()->role == 'manager')
                        <li class="{{ request()->is('home') ? 'active' : '' }}">
                            <a class="js-arrow" href="{{ url('/home') }}">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li class="{{ request()->is('user') ? 'active' : '' }}">
                            <a href="{{ url('/user') }}">
                                <i class="fas fa-user"></i>User</a>
                        </li>
                        <li class="{{ request()->is('maintenance') ? 'active' : '' }}">
                            <a href="{{ url('/maintenance') }}">
                                <i class="fas fa-calendar"></i>Maintenance</a>
                        </li>
                        <li class="{{ request()->is('angine') ? 'active' : '' }}">
                            <a href="{{ url('/engine') }}">
                                <i class="fas fa-cog"></i>Engine</a>
                        </li>
                      
                        <li class="{{ request()->is('aircraft-list') ? 'active' : '' }}">
                            <a href="{{ url('/aircraft-list') }}">
                                <i class="fas fa-plane"></i>Aircraft List</a>
                        </li>
                        <li class="{{ request()->is('maintenance-reserve') ? 'active' : '' }}">
                            <a href="{{ url('/maintenance-reserve') }}">
                                <i class="far fa-pencil-square-o"></i>Maintenance Reserve</a>
                        </li>
                        <li class="{{ request()->is('aircraft-utilization') ? 'active' : '' }}">
                            <a href="{{ url('/aircraft-utilization') }}">
                                <i class="fas fa-cogs"></i>Aircraft Utilization</a>
                        </li>
                    @endif
                    
                    @if (Auth::check() && Auth::user()->role == 'admin')
                    <li class="{{ request()->is('home') ? 'active' : '' }}">
                            <a class="js-arrow" href="{{ url('/home') }}">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li class="{{ request()->is('user') ? 'active' : '' }}">
                            <a href="{{ url('/user') }}">
                                <i class="fas fa-user"></i>User</a>
                        </li>
                        
                        <li class="{{ request()->is('maintenance') ? 'active' : '' }}">
                            <a href="{{ url('/maintenance') }}">
                                <i class="fas fa-calendar"></i>Maintenance</a>
                        </li>
                        <li class="{{ request()->is('angine') ? 'active' : '' }}">
                            <a href="{{ url('/engine') }}">
                                <i class="fas fa-cog"></i>Engine</a>
                        </li>
                      
                        <li class="{{ request()->is('aircraft-list') ? 'active' : '' }}">
                            <a href="{{ url('/aircraft-list') }}">
                                <i class="fas fa-plane"></i>Aircraft List</a>
                        </li>
                        <li class="{{ request()->is('maintenance-reserve') ? 'active' : '' }}">
                            <a href="{{ url('/maintenance-reserve') }}">
                                <i class="far fa-pencil-square-o"></i>Maintenance Reserve</a>
                        </li>
                        <li class="{{ request()->is('aircraft-utilization') ? 'active' : '' }}">
                            <a href="{{ url('/aircraft-utilization') }}">
                                <i class="fas fa-cogs"></i>Aircraft Utilization</a>
                        </li>

                        @endif  

                    @if (Auth::check() && Auth::user()->role == 'user')
                    <li class="{{ request()->is('home') ? 'active' : '' }}">
                            <a class="js-arrow" href="{{ url('/home') }}">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                       
                        <li class="{{ request()->is('maintenance') ? 'active' : '' }}">
                            <a href="{{ url('/maintenance') }}">
                                <i class="fas fa-calendar"></i>Maintenance</a>
                        </li>
                        <li class="{{ request()->is('angine') ? 'active' : '' }}">
                            <a href="{{ url('/engine') }}">
                                <i class="fas fa-cog"></i>Engine</a>
                        </li>
                      
                        <li class="{{ request()->is('aircraft-list') ? 'active' : '' }}">
                            <a href="{{ url('/aircraft-list') }}">
                                <i class="fas fa-plane"></i>Aircraft List</a>
                        </li>
                        <li class="{{ request()->is('maintenance-reserve') ? 'active' : '' }}">
                            <a href="{{ url('/maintenance-reserve') }}">
                                <i class="far fa-pencil-square-o"></i>Maintenance Reserve</a>
                        </li>
                        <li class="{{ request()->is('aircraft-utilization') ? 'active' : '' }}">
                            <a href="{{ url('/aircraft-utilization') }}">
                                <i class="fas fa-cogs"></i>Aircraft Utilization</a>
                        </li>

                       @endif 


                        <!-- <li class="{{ request()->is('seraching') ? 'active' : '' }}">
                            <a href="{{ url('/searching') }}">
                                <i class="fab fa-searchengin"></i>Searching and Filter</a>
                        </li> -->

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
                            <!-- <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form> -->
                            <!-- <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <span class="quantity">1</span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <p>You have 2 news message</p>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                                </div>
                                                <div class="content">
                                                    <h6>Michelle Moreno</h6>
                                                    <p>Have sent a photo</p>
                                                    <span class="time">3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Diane Myers" />
                                                </div>
                                                <div class="content">
                                                    <h6>Diane Myers</h6>
                                                    <p>You are now connected on message</p>
                                                    <span class="time">Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="mess__footer">
                                                <a href="#">View all messages</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-email"></i>
                                        <span class="quantity">1</span>
                                        <div class="email-dropdown js-dropdown">
                                            <div class="email__title">
                                                <p>You have 3 New Emails</p>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, 3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, April 12,,2018</span>
                                                </div>
                                            </div>
                                            <div class="email__footer">
                                                <a href="#">See all emails</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a email notification</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Your account has been blocked</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a new file</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="account-wrap col-md-12 text-right">
                                    <div class="account-item clearfix js-item-menu ">
                                
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">{{ Auth::user()->name }}</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown text-left">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/avatar.png" alt={{ Auth::user()->name }} />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">{{ Auth::user()->name }}</a>
                                                    </h5>
                                                    <span class="email">{{ Auth::user()->email }}</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="/profile/{{ Auth::user()->id }}">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                               
                                        
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="{{ route('logout') }}"  onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>

                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                              @csrf
                                                    </form>
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

    <!-- Jquery JS-->
    <script src="{{URL::asset('/vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{URL::asset('/vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{URL::asset('/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <!-- Vendor JS       -->
    <script src="{{URL::asset('/vendor/slick/slick.min.js')}}">
    </script>
    <script src="{{URL::asset('/vendor/wow/wow.min.js')}}"></script>
    <script src="{{URL::asset('/vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{URL::asset('/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
    </script>
    <script src="{{URL::asset('/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{URL::asset('/vendor/counter-up/jquery.counterup.min.js')}}">
    </script>
    <script src="{{URL::asset('/vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{URL::asset('/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{URL::asset('/vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="{{URL::asset('/vendor/select2/select2.min.js')}}">
    </script>

    <!-- Main JS-->
    <script src="{{URL::asset('/js/main.js')}}"></script>

</body>

</html>
<!-- end document-->
