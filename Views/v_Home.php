<html class="no-js" lang="en">

<head>

  <!-- CSS
  ================================================== -->
  <link rel="stylesheet" href="Assets/home/css/base.css">
  <link rel="stylesheet" href="Assets/home/css/vendor.css">
  <link rel="stylesheet" href="Assets/home/css/main.css">

  <!-- script
  ================================================== -->
  <script src="Assets/home/js/modernizr.js"></script>
  <script src="Assets/home/js/pace.min.js"></script>

  <!-- favicons
  ================================================== -->
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="icon" href="favicon.ico" type="image/x-icon">

</head>

<body id="top">

  <!-- header
  ================================================== -->
  <header class="s-header">

    <div class="header-logo">
      <a class="site-logo" href="index.html">
        <img src="Assets/images/logo.png" alt="Homepage">
      </a>
    </div>

    <nav class="header-nav">

      <a href="#" class="header-nav__close" title="close"><span>Close</span></a>

      <div class="header-nav__content">
        <h3>Navigation</h3>

        <ul class="header-nav__list">
          <?php if(isset($_SESSION['login'])){ ?>
            <li class="current"><a class=""  href="index.php" title="home">Home</a></li>
            <?php if ($_SESSION['login']=='admin'){ ?>
              <li><a class=""  href="?controller=Panel&action=homeAdmin" >My Panel</a></li>
            <?php }elseif ($_SESSION['login']=='superuser') { ?>
              <li><a class=""  href="?controller=Panel&action=homeSuper" >My Panel</a></li>
            <?php } else { ?>
              <li><a class=""  href="?controller=Panel&action=homeUser" >My Panel</a></li>
            <?php } ?>
            <li><a class=""  href="https://jemberkab.go.id" >Jemberkab.go.id</a></li>
            <li><a class=""  href="logout.php" >Logout</a></li>
          <?php }
          else {?>
            <li class="current"><a class="smoothscroll"  href="index.php" >Home</a></li>
            <li><a class=""  href="?controller=Login&action=home" >Login</a></li>
            <li><a class=""  href="https://jemberkab.go.id" >Jemberkab.go.id</a></li>
          <?php } ?>
        </ul>

        <ul class="header-nav__social">
          <li>
            <a href="https://www.facebook.com/jemberkab/"><i class="fa fa-facebook"></i></a>
          </li>
          <li>
            <a href="https://twitter.com/humas_jember"><i class="fa fa-twitter"></i></a>
          </li>
          <li>
            <a href="https://www.instagram.com/humas_jember"><i class="fa fa-instagram"></i></a>
          </li>
        </ul>

      </div> <!-- end header-nav__content -->

    </nav>  <!-- end header-nav -->

    <a class="header-menu-toggle" href="">
      <span class="header-menu-text">Menu</span>
      <span class="header-menu-icon"></span>
    </a>

  </header> <!-- end s-header -->


  <!-- home
  ================================================== -->
  <section id="home" class="s-home target-section" data-parallax="scroll" data-image-src="Assets/images/hero-bg.jpg" data-natural-width=3000 data-natural-height=2000 data-position-y=center>

    <div class="overlay"></div>
    <div class="shadow-overlay"></div>

    <div class="home-content">

      <div class="row home-content__main">

        <h3>Selamat Datang di SiMas</h3>

        <h1>
          Sistem Informasi <br>
          Humas dan Protokol <br>
          Pemerintah Kabupaten Jember
        </h1>


</div>

<div class="home-content__scroll">
  <a href="#about" class="scroll-link smoothscroll">
    <span>Scroll Down</span>
  </a>
</div>

<div class="home-content__line"></div>

</div> <!-- end home-content -->


<ul class="home-social">
  <li>
    <a href="https://www.facebook.com/jemberkab/"><i class="fa fa-facebook" aria-hidden="true"></i><span>Facebook</span></a>
  </li>
  <li>
    <a href="https://twitter.com/humas_jember"><i class="fa fa-twitter" aria-hidden="true"></i><span>Twiiter</span></a>
  </li>
  <li>
    <a href="https://www.instagram.com/humas_jember"><i class="fa fa-instagram" aria-hidden="true"></i><span>Instagram</span></a>
  </li>
</ul>
<!-- end home-social -->

</section> <!-- end s-home -->


<!-- about
================================================== -->
<section id='about' class="s-about">

  <div class="row section-header has-bottom-sep" data-aos="fade-up">
    <div class="col-full">
      <h3 class="subhead subhead--dark">Apakah itu</h3>
      <h1 class="display-1 display-1--light">SiMas?</h1>
    </div>
  </div> <!-- end section-header -->

  <div class="row about-desc" data-aos="fade-up">
    <div class="col-full">
      <p>
        Simas adalah Sistem Informasi dengan fitur Media Sharing, Pendataan Pers, dimana Website ini dapat digunakan untuk upload dan download file-file dokumentasi kegiatan maupun dokumen lainnya, juga untuk pendataan anggota pers yang bekerjasama dengan bagian Humas Pemerintahan Kabupaten Jember
      </p>
    </div>
  </div> <!-- end about-desc -->
</section> <!-- end s-about -->


        <!-- preloader
        ================================================== -->
        <div id="preloader">
          <div id="loader">
            <div class="line-scale-pulse-out">
              <div></div>
              <div></div>
              <div></div>
              <div></div>
              <div></div>
            </div>
          </div>
        </div>

        <div class="go-top">
            <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon-arrow-up" aria-hidden="true"></i></a>
        </div>

        <!-- Java Script
        ================================================== -->
        <script src="Assets/home/js/jquery-3.2.1.min.js"></script>
        <script src="Assets/home/js/plugins.js"></script>
        <script src="Assets/home/js/main.js"></script>

      </body>

      </html>
