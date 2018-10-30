<!DOCTYPE html>
<html lang="en">
   <head>
     <!-- Bootstrap CSS -->
     <link href="assets/css/bootstrap.min.css" rel="stylesheet">
     <!-- Animate CSS -->
     <link href="assets/vendors/animate/animate.css" rel="stylesheet">
     <!-- Icon CSS-->
     <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css">
     <!-- Owlcarousel CSS-->
     <link rel="stylesheet" type="text/css" href="assets/vendors/owl_carousel/owl.carousel.css" media="all">
     <!--Template Styles CSS-->
     <link rel="stylesheet" type="text/css" href="assets/css/style.css" media="all" />
     <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="assets/css/main.css">


</head>
   <body id="top">
      <div class="bg-grediunt">
         <div class="bg-banner-img ">
            <div class="overlay-all ">
               <!-- Header_Area -->
               <!-- header
                  ================================================== -->
               <header class="s-header">
                  <div class="header-logo">
                     
                  </div>
                  <div class="header-middle">
                    <a class="navbar-brand logo-biss" href="index.html"> <img src="assets/images/logo.png">  </a>
                  </div>
                  <!-- end header-logo -->
                  <nav class="header-nav">
                     <a href="#0" class="header-nav__close" title="close"><span>Close</span></a>
                     <div class="header-nav__content">
                        <h3>Si-HAP </h3>
                        <ul class="header-nav__list">
                          <?php if(isset($_SESSION['login'])){ ?>
                           <li class="current"><a class=""  href="?controllers=Home&action=home" >Home</a></li>
                           <li><a class=""  href="?controller=Mydata&action=home" >My Data</a></li>
													 <li><a class=""  href="jemberkab.go.id" >Jemberkab.go.id</a></li>
                           <li><a class=""  href="logout.php" >Logout</a></li>
                         <?php echo $_SESSION['login']; }
                         else {?>
                           <li class="current"><a class=""  href="?controllers=Home&action=home" >Home</a></li>
                           <li><a class=""  href="?controller=Login&action=home" >Login</a></li>
													 <li><a class=""  href="jemberkab.go.id" >Jemberkab.go.id</a></li>
                         <?php } ?>

                        </ul>
                        <ul class="header-nav__social">
                           <li>
                              <a href="" target="_blank"><i  class="fa fa-facebook-square fa-3x social"></i></a>
                           </li>
                           <li>
                              <a href="" target="_blank"><i  class="fa fa-twitter-square fa-3x social"></i></a>
                           </li>
                           <li>
                              <a href="" target="_blank"><i  class="fa fa-instagram fa-3x social"></i></a>
                           </li>

                        </ul>
                     </div>
                     <!-- end header-nav__content -->
                  </nav>
                  <!-- end header-nav -->
                  <a class="header-menu-toggle" href="#0">
                  <span class="header-menu-icon"></span>
                  </a>
               </header>
               <!-- end s-header -->
               <!-- End Header_Area -->
               <!-- #banner start -->
               <section id="banner" class=" mb-90">
                  <div class="container " style="margin-bottom: 15em;">
                     <div class="row">
                        <!-- #banner-text start -->
                        <div class="fill">
                          
                        </div>
                        <!--
                        <div id="banner-text" class="middler text-c  ">
                           <h1 class="wow fadeInUp main-h middler" data-wow-delay="0.2s" >Si-hap </h1>
                           <p class="banner-text wow fadeInUp main-h3" data-wow-delay="0.8s">Sistem Informasi Humas <br>Kabupaten Jember</p>

                        </div>
                        -->
                        <div class="middler">
                          <h1 class="wow fadeInUp main-h" data-wow-delay="0.2s">Si-HAP</h1>
                          <p class="banner-text wow fadeInUp main-h3" data-wow-delay="0.8s" style="color: black; text-decoration: bold;">Sistem Informasi Humas <br>Kabupaten Jember</p>

                        </div>
                        </div>
                        <!-- /#banner-text End -->
                     </div>
                  
               </section>
               <div class="container-fluid p0 banner-shap-img">
               </div>
            </div>
         </div>
         <!-- /#banner end -->
         <!--#Our banner-shap- Area -->
         <!--#EndOur banner-shap- Area -->
         <!-- #About Us Area start -->
         <!-- <div  id="about"  class=" py-70 pb_90">
            <div class="container About-right-bg-img ">
               <div class="row text-left  ">
                  <div class="col-md-7">
                     <div class="about_left_text wow fadeInUp">
                        <h1>ABOUT Si-HAP     </h1>
                        <p>Lorem Ipsum is simply dummy text of the printing and type <br>setting industry.  </p>
                        <div class="top-about wow fadeInRight wow fadeInUp">
                           <a id="#services"  href="#services" class="btn btn-default btn_text_cap btn_bg_f button_py_12   wow fadeInUp  js-scroll-trigger" data-wow-delay=" 0.5s" href="#"><span class="skew_14">Just Do it ! </span></a>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-5">
                  </div>
               </div>
            </div>
         </div> -->
         <!-- #About Us Area End -->
<!--

<section class="banner full">
        <article>
          <img src="Assets/images/part2/slide01.jpg" alt=""/>
          <div class="inner">
            <header>
              <p>A free responsive web site template by <a href="https://templated.co">TEMPLATED</a></p>
              <h2>Hielo</h2>
            </header>
          </div>
        </article>
        <article>
          <img src="Assets/images/part2/slide02.jpg" alt="" />
          <div class="inner">
            <header>
              <p>Lorem ipsum dolor sit amet nullam feugiat</p>
              <h2>Magna etiam</h2>
            </header>
          </div>
        </article>
        <article>
          <img src="Assets/images/part2/slide03.jpg"  alt="" />
          <div class="inner">
            <header>
              <p>Sed cursus aliuam veroeros lorem ipsum nullam</p>
              <h2>Tempus dolor</h2>
            </header>
          </div>
        </article>
        <article>
          <img src="Assets/images/part2/slide04.jpg"  alt="" />
          <div class="inner">
            <header>
              <p>Adipiscing lorem ipsum feugiat sed phasellus consequat</p>
              <h2>Etiam feugiat</h2>
            </header>
          </div>
        </article>
        <article>
          <img src="Assets/images/part2/slide05.jpg"  alt="" />
          <div class="inner">
            <header>
              <p>Ipsum dolor sed magna veroeros lorem ipsum</p>
              <h2>Lorem adipiscing</h2>
            </header>
          </div>
        </article>
      </section>
        -->
      <section id="two" class="wrapper style3">
        <div class="inner">
          <header class="align-center">
            <p>Si-Hap adalah sistem informasi humas yang berfungsi sebagai media sharing antara humas,protokol, dan wartawan</p>
            <h2>Si-Hap <br>Sistem Informasi Humas Kabupaten Jember</h2>
          </header>
        </div>
      </section>

      <section id="three" class="wrapper style2">
        <div class="inner">
          <header class="align-center">
            <p class="special">Beberapa Fitur Si-Hap</p>
            <h2>Arahkan Mouse Pada Gambar</h2>
          </header>
          <div class="gallery">
            <div>
              <div class="image fit zoom">
                <a href="https://www.jemberfashioncarnaval.com/"><img src="Assets/images/part2/JFC.png" alt="" /></a>
                <p class="special" style="text-align: center;">Jember Fashion Carnaval</p>
              </div>
            </div>
            <div>
              <div class="image fit zoom">
                <a href="https://jemberkab.go.id/"><img src="Assets/images/part2/pemkab.png" alt="" /></a>
                <p class="special" style="text-align: center;">Website Pemkab</p>
              </div>
            </div>
            <div>
              <div class="image fit">
                <a href="#"><img src="Assets/images/part2/pic03.jpg" alt="" /></a>
              </div>
            </div>
            <div>
              <div class="image fit">
                <a href="#"><img src="Assets/images/part2/pic04.jpg" alt="" /></a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <footer id="footer">
        <div class="container">
          <ul class="icons">
            <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
            <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
            <li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
          </ul>
        </div>
        <div class="copyright">
          &copy; Untitled. All rights reserved.
        </div>
      </footer>


      <!-- jQuery JS -->
      <script src="assets/js/jquery-1.12.0.min.js"></script>

      <!-- Bootstrap JS -->
      <script src="assets/js/bootstrap.min.js"></script>
      <!-- Animate JS -->
      <script src="assets/vendors/animate/wow.min.js"></script>
      <script src="assets/vendors/sidebar/main.js"></script>

      <!-- Theme JS -->
      <script src="assets/js/theme.min.js"></script>

      <!--JS part 2-->
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/jquery.scrollex.min.js"></script>
      <script src="assets/js/skel.min.js"></script>
      <script src="assets/js/util.js"></script>
      <script src="assets/js/main.js"></script>

   </body>
</html>
