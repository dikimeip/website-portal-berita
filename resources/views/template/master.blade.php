<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Ok</title>

    <!-- Fontfaces CSS-->
    <link href="{{asset('css/font-face.css')}}" rel="stylesheet" media="all">
     <link href= "{{asset('DataTables/DataTables-1.10.20/css/jquery.dataTables.css')}}"  rel="stylesheet">
    <link href=" {{asset('vendor/font-awesome-4.7/css/font-awesome.min.css')}} " rel="stylesheet" media="all">
    <link href=" {{asset('vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href=" {{asset('vendor/mdi-font/css/material-design-iconic-font.min.css')}}"rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href=" {{asset('vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">
   
    <link href="{{asset('vendor/wow/animate.css')}} " rel="stylesheet" media="all">
    <link href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}} " rel="stylesheet" media="all">
    <link href="{{asset('vendor/slick/slick.css')}} " rel="stylesheet" media="all">
    <link href="{{asset('vendor/select2/select2.min.css')}} " rel="stylesheet" media="all">
    <link href="{{asset('vendor/perfect-scrollbar/perfect-scrollbar.css')}} " rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('css/theme.css')}} " rel="stylesheet" media="all">

</head>

<body>
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
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-chart-bar"></i>Charts</a>
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
                    <img src="{{asset('images/icon/logo.png')}}" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a href="">
                                <i class="fas fa-chart-bar"></i>Dasboard</a>
                        </li>
                         <li>
                            <a href="">
                                <i class="fas fa-chart-bar"></i>Berita</a>
                        </li>
                        <li>
                            <a href="{{route('user.kategori')}}">
                                <i class="fas fa-chart-bar"></i>Kategori</a>
                        </li>
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
                            <form class="form-header" action="" method="POST">
                            </form>
                            <div class="header-button">
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">john doe</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="#">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
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
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                   @yield('isi')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="{{asset('vendor/jquery-3.2.1.min.js')}} "></script>
    <!-- Bootstrap JS-->
    <script src="{{asset('vendor/bootstrap-4.1/popper.min.js')}} "></script>
    <script src="{{asset('vendor/bootstrap-4.1/bootstrap.min.js')}} "></script>
    <!--  Vendor JS       -->
    <script src="{{asset('vendor/slick/slick.min.js')}} ">
    </script>
    <script src="{{asset('vendor/wow/wow.min.js')}} "></script>
    <script src="{{asset('vendor/animsition/animsition.min.js')}} "></script>
    <script src="{{asset('vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}} ">
    </script>
    <script src="{{asset('vendor/counter-up/jquery.waypoints.min.js')}} "></script>
    <script src="{{asset('vendor/counter-up/jquery.counterup.min.js')}} ">
    </script>
    <script src="{{asset('vendor/circle-progress/circle-progress.min.js')}} "></script>
    <script src="{{asset('vendor/perfect-scrollbar/perfect-scrollbar.js')}} "></script>
    <script src="{{asset('vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('vendor/select2/select2.min.js')}} ">
    </script>

    <!-- Main JS-->
    <script src="{{asset('DataTables/DataTables-1.10.20/js/jquery.dataTables.js')}} "></script>
    <script src="{{asset('js/main.js')}} "></script>
    <script>
        $(document).ready( function () {
            $('#table_id').DataTable();
        });
     </script>

</body>

</html>
<!-- end document-->