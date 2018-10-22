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
    <title>Data</title>

    <!-- Fontfaces CSS-->
    <link href="Assets/data/css/font-face.css" rel="stylesheet" media="all">
    <link href="Assets/data/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="Assets/data/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="Assets/data/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="Assets/data/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="Assets/data/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="Assets/data/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="Assets/data/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="Assets/data/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="Assets/data/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="Assets/data/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="Assets/data/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="Assets/data/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="Assets/data/images/icon/logo.png" alt="CoolAdmin" />
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
                      <li class="active">
                          <a href="?controller=Home&action=home">
                              <i class="fas fa-home"></i>Home</a>
                      </li>
                        <li class="active">
                            <a href="table.html">
                                <i class="fas fa-table"></i>Data User</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-user"></i>Acc</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="login.html">Profile</a>
                                </li>
                                <li>
                                    <a href="logout.php">Logout</a>
                                </li>
                            </ul>
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
                    <img src="Assets/data/images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                      <li class="active">
                          <a href="?controller=Home&action=home">
                              <i class="fas fa-home"></i>Home</a>
                      </li>
                        <li class="active">
                            <a href="table.html">
                                <i class="fas fa-table"></i>Data User</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-user"></i>Acc</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="login.html">Profile</a>
                                </li>
                                <li>
                                    <a href="logout.php">Logout</a>
                                </li>
                            </ul>
                        </li>
                            </ul>
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

                            <div class="header-button">

                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">


                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>date</th>
                                                <th>type</th>
                                                <th>description</th>
                                                <th>status</th>
                                                <th>price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>2018-09-29 05:57</td>
                                                <td>Mobile</td>
                                                <td>iPhone X 64Gb Grey</td>
                                                <td class="process">Processed</td>
                                                <td>$999.00</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-28 01:22</td>
                                                <td>Mobile</td>
                                                <td>Samsung S8 Black</td>
                                                <td class="process">Processed</td>
                                                <td>$756.00</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-27 02:12</td>
                                                <td>Game</td>
                                                <td>Game Console Controller</td>
                                                <td class="denied">Denied</td>
                                                <td>$22.00</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-26 23:06</td>
                                                <td>Mobile</td>
                                                <td>iPhone X 256Gb Black</td>
                                                <td class="denied">Denied</td>
                                                <td>$1199.00</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-25 19:03</td>
                                                <td>Accessories</td>
                                                <td>USB 3.0 Cable</td>
                                                <td class="process">Processed</td>
                                                <td>$10.00</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-29 05:57</td>
                                                <td>Accesories</td>
                                                <td>Smartwatch 4.0 LTE Wifi</td>
                                                <td class="denied">Denied</td>
                                                <td>$199.00</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-24 19:10</td>
                                                <td>Camera</td>
                                                <td>Camera C430W 4k</td>
                                                <td class="process">Processed</td>
                                                <td>$699.00</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-22 00:43</td>
                                                <td>Computer</td>
                                                <td>Macbook Pro Retina 2017</td>
                                                <td class="process">Processed</td>
                                                <td>$10.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
                            </div>


                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="Assets/data/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="Assets/data/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="Assets/data/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="Assets/data/vendor/slick/slick.min.js">
    </script>
    <script src="Assets/data/vendor/wow/wow.min.js"></script>
    <script src="Assets/data/vendor/animsition/animsition.min.js"></script>
    <script src="Assets/data/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="Assets/data/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="Assets/data/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="Assets/data/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="Assets/data/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="Assets/data/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="Assets/data/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="Assets/data/js/main.js"></script>

</body>

</html>
