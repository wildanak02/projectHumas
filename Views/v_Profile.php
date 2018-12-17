<html>

<head>

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

  <!-- Dropzone CSS -->
  <link rel="stylesheet" href="Assets/dropzone/css/style.css">


</head>

<body class="animsition">
  <div class="page-wrapper">
    <!-- HEADER MOBILE-->
    <header class="header-mobile d-block d-lg-none">
      <div class="header-mobile__bar">
        <div class="container-fluid">
          <div class="header-mobile-inner">
            <a class="logo" href="index.html">
              <img src="Assets/images/logo.png" alt="Logo" />
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
              <a href="?controller=Home&action=home">
                <i class="fas fa-home"></i>Home</a>
              </li>
              <li>
                <a href="?controller=Panel&action=homeAdmin">
                  <i class="fas fa-table"></i>Data User</a>
                </li>
                <li>
                  <a href="?controller=Panel&action=mediaAdmin">
                    <i class="fas fa-folder-open"></i>Media Sharing</a>
                  </li>
                  <li class="has-sub">
                    <a class="js-arrow" href="#">
                      <i class="fas fa-user"></i>Acc</a>
                      <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li class="active">
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
              <img src="Assets/images/logo.png" alt="Logo" />
            </a>
          </div>
          <div class="menu-sidebar__content js-scrollbar1">
            <nav class="navbar-sidebar">
              <ul class="list-unstyled navbar__list">
                <li>
                  <a href="?controller=Home&action=home">
                    <i class="fas fa-home"></i>Home</a>
                  </li>
                  <li >
                    <a href="?controller=Panel&action=homeAdmin">
                      <i class="fas fa-table"></i>Data User</a>
                    </li>
                    <li>
                      <a href="?controller=Panel&action=mediaAdmin">
                        <i class="fas fa-folder-open"></i>Media Sharing</a>
                      </li>
                      <li class="has-sub">
                        <a class="js-arrow" href="#">
                          <i class="fas fa-user"></i>Acc</a>
                          <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                            <li class="active">
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
                        <form  role="form" method="GET" class="form-horizontal">
                          <input type="hidden" name="controller" value="Profile"></input>
                          <input type="hidden" name="action" value="editProfile"></input>

                          <div class="row form-group">
                            <div class="col col-md-3">
                              <label class=" form-control-label">Username</label>
                            </div>
                            <div class="col-12 col-md-9">
                              <input type="text" id="username" value="<?php foreach ($profiles as $profile) {echo $profile->username;}?>" name="username" class="form-control">
                            </div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3">
                              <label class=" form-control-label">Password</label>
                            </div>
                            <div class="col-12 col-md-9">
                              <input type="text" id="password" value="<?php foreach ($profiles as $profile) {echo $profile->password;}?>" name="password" class="form-control">
                            </div>
                          </div>

                          <button type="submit" class="btn btn-primary" >Ubah Data</button>
                        </form>

                      </div>
                      <div class="col-md-12">
                        <br><br><br><br>
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

            <!-- JS Dropzone -->
            <script src="Assets/dropzone/js/jquery-1.11.1.min.js" ></script>
            <script lsrc="Assets/dropzone/js/droply-min.js" ></script>
            <script type="text/javascript">
            $("#myUploader").droply();
            </script>

          </body>

          </html>
