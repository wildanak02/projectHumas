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
            <li>
              <a href="?controller=Home&action=home">
                <i class="fas fa-home"></i>Home</a>
              </li>
              <li class="active">
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
                <li>
                  <a href="?controller=Home&action=home">
                    <i class="fas fa-home"></i>Home</a>
                  </li>
                  <li class="active">
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

                  </div>
                </div>
              </header>
              <!-- END HEADER DESKTOP-->


              <!-- MAIN CONTENT-->
              <div class="main-content">
                <div class="section__content section__content--p30">
                  <div class="container-fluid">
                    <button type="button" data-toggle="modal" data-target="#tambahuser" class="btn btn-success mb-1">Tambah Data</button>
                    <br><br>
                    <div class="row">



                      <div class="col-md-12">
                        <!-- DATA TABLE-->
                        <div class="table-responsive m-b-40">
                          <table class="table table-borderless table-striped table-earning">
                            <thead>
                              <tr>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Level</th>
                                <th></th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php foreach ($users as $user) {
                                if ($user->level==1){
                                  $user->level='Admin';
                                }
                                elseif ($user->level==2){
                                  $user->level='Superuser';
                                }
                                else {
                                  $user->level='User';
                                }
                                ?>

                                <tr>
                                  <td><?php echo $user->username; ?></td>
                                  <td><?php echo $user->password; ?></td>
                                  <td><?php echo $user->level; ?></td>
                                  <td>
                                    <button href="#editUser" role="button" data-toggle="modal" data-id="<?php echo $user->idUser; ?>" data-username="<?php echo $user->username; ?>" data-password="<?php echo $user->password; ?>" data-level="<?php echo $user->level; ?>" class="btn btn-primary open-editUser">Edit</button>
                                    &nbsp;&nbsp;
                                    <button href="#hapusUser" role="button" data-toggle="modal" data-id="<?php echo $user->idUser; ?>" class="btn btn-danger open-hapusUser">Hapus</button>
                                  </td>
                                </tr>

                              <?php }?>
                            </tbody>
                          </table>
                        </div>
                      </div>
                      <!-- END DATA TABLE-->
                      <div class="col-md-12">
                        <br><br><br><br>
                      </div>


                    </div>
                  </div>
                </div>
              </div>

              <!-- modal tambahUser -->
              <div class="modal fade" id="tambahuser" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="mediumModalLabel">Tambah Data</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form  role="form" method="POST" class="form-horizontal">

                        <div class="row form-group">
                          <div class="col col-md-3">
                            <label for="hf-email" class=" form-control-label">Username</label>
                          </div>
                          <div class="col-12 col-md-9">
                            <input type="text" name="username" class="form-control">
                          </div>
                        </div>
                        <div class="row form-group">
                          <div class="col col-md-3">
                            <label for="hf-password" class=" form-control-label">Password</label>
                          </div>
                          <div class="col-12 col-md-9">
                            <input type="password" name="password" class="form-control">
                          </div>
                        </div>
                        <div class="row form-group">
                          <div class="col col-md-3">
                            <label for="selectSm" class=" form-control-label">Level</label>
                          </div>
                          <div class="col-12 col-md-9">
                            <select name="level" id="SelectLm" class="form-control-sm form-control">
                              <option value="1">Admin</option>
                              <option value="2">Superuser</option>
                              <option value="3">User</option>
                            </select>
                          </div>
                        </div>

                        <input type="hidden" name="controller" value="Panel"></input>
                        <input type="hidden" name="action" value="tambahUser"></input>

                        <button type="submit" class="btn btn-primary" >Simpan</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end modal tambahUser -->


              <!-- modal edituser -->
              <div class="modal fade" id="editUser" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="mediumModalLabel">Edit Data</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form  role="form" method="POST" class="form-horizontal">
                        <div class="row form-group">
                          <div class="col col-md-3">
                            <label for="hf-email" class=" form-control-label">Username</label>
                          </div>
                          <div class="col-12 col-md-9">
                            <input type="text" id="username" value="" name="username" class="form-control">
                          </div>
                        </div>
                        <div class="row form-group">
                          <div class="col col-md-3">
                            <label for="hf-password" class=" form-control-label">Password</label>
                          </div>
                          <div class="col-12 col-md-9">
                            <input type="text" id="password" value="" name="password" class="form-control">
                          </div>
                        </div>
                        <div class="row form-group">
                          <div class="col col-md-3">
                            <label for="selectSm" class=" form-control-label">Level</label>
                          </div>
                          <div class="col-12 col-md-9">
                            <select name="level" id="level" class="form-control-sm form-control">
                              <option value="1">Admin</option>
                              <option value="2">Superuser</option>
                              <option value="3">User</option>
                            </select>
                          </div>
                        </div>

                        <input type="hidden" id="idUser" value="" name="idUser" class="form-control">
                        <input type="hidden" name="controller" value="Panel"></input>
                        <input type="hidden" name="action" value="editUser"></input>

                        <button type="submit" class="btn btn-primary" >Simpan</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end modal edituser -->

              <!-- modal edituser -->
              <div class="modal fade" id="hapusUser" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="mediumModalLabel">Hapus Data</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form  role="form" method="POST" class="form-horizontal">

                        <p>Yakin ingin menghapus?</p><br><br>

                        <input type="hidden" id="idUser" value="" name="idUser" class="form-control">
                        <input type="hidden" name="controller" value="Panel"></input>
                        <input type="hidden" name="action" value="hapusUser"></input>

                        <button type="submit" class="btn btn-danger">Hapus</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end modal edituser -->

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

            <script type="text/javascript">

            $(document).on("click", ".open-editUser", function ()
            {

              var idUser = $(this).data('id');
              var username = $(this).data('username');
              var password = $(this).data('password');
              var level = $(this).data('level');

              if (level=='Admin') {
                level='1';
              }
              else if (level=='Superuser') {
                level='2';
              }
              else {
                level='3';
              }

              $("#editUser .modal-body #idUser").val(idUser);
              $("#editUser .modal-body #username").val(username);
              $("#editUser .modal-body #password").val(password);
              $("#editUser .modal-body #level").val(level).selected;
            });

            $(document).on("click", ".open-hapusUser", function ()
            {

              var idUser = $(this).data('id');

              $("#hapusUser .modal-body #idUser").val(idUser);
            });
            </script>
          </body>

          </html>
