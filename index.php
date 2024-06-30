<?php 
session_start();
require_once "admin/db.php";
?>

<!doctype html>
<html class="no-js" lang="en">


<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> Personal - Portofolio // Daniel Edwardo Manurung </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" type="image/x-icon" style="font-size:24px; font-weight: bold; font-family: Arial;" href="front_end_assets/img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="front_end_assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="front_end_assets/css/animate.min.css">
        <link rel="stylesheet" href="front_end_assets/css/magnific-popup.css">
        <link rel="stylesheet" href="front_end_assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="front_end_assets/css/flaticon.css">
        <link rel="stylesheet" href="front_end_assets/css/slick.css">
        <link rel="stylesheet" href="front_end_assets/css/aos.css">
        <link rel="stylesheet" href="front_end_assets/css/default.css">
        <link rel="stylesheet" href="front_end_assets/css/style.css">
        <link rel="stylesheet" href="front_end_assets/css/responsive.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.1.0/css/boxicons.min.css">
    </head>
    <body class="theme-bg">

        <!-- preloader -->
        <div id="preloader">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                </div>
            </div>
        </div>
        <!-- preloader-end -->

        <!-- header-start -->
        <header>
            <div id="header-sticky" class="transparent-header">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-menu">
                                <nav class="navbar navbar-expand-lg">
                                    <a href="index.php" class="navbar-brand logo-sticky-none"><a href="index.php" style="font-size:24px; font-weight: bold; font-family: Arial;"class="navbar-brand logo-sticky-none">Daniel Portofolio</a>
                                    <a href="index.php" class="navbar-brand s-logo-none"><img style="font-size:24px; font-weight: bold; font-family: Arial;" src="front_end_assets/img/logo/logo.png" alt="Logo"></a>
                                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbarNav">
                                        <span class="navbar-icon"></span>
                                        <span class="navbar-icon"></span>
                                        <span class="navbar-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarNav">
                                        <ul class="navbar-nav ml-auto">
                                            <li class="nav-item active"><a class="nav-link" href="#home">Home</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#skill">Skill</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#artikel">Article</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#portfolio">Portofolio</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                                        </ul>
                                    </div>
                                    <div class="header-btn">
                                        <a href="#" class="off-canvas-menu menu-tigger"><i class="flaticon-menu"></i></a>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- offcanvas-start -->
            <div class="extra-info">
                <div class="close-icon menu-close">
                    <button>
                        <i class="far fa-window-close"></i>
                    </button>
                </div>
                <div class="logo-side mb-30">
                    <a href="index-2.html">
                        <img src="front_end_assets/img/logo/logo.png" alt="" />
                    </a>
                </div>



                 <!--side view and contact information area  -->

                <?php 
                  $information_query = $dbcon->query("SELECT * FROM contact_information");
                  $contact_information = $information_query->fetch_assoc();
                ?>

                <!-- end contact information -->

                <!-- about me query start -->

                <?php 
                  $about_me_query = $dbcon->query("SELECT * FROM about_me");
                  $about_me = $about_me_query -> fetch_assoc();

                ?>

                <!-- about me query end  -->


                <div class="side-info mb-30">
                    <div class="contact-list mb-30">
                        <h4>Office Address</h4>
                        <p><?=$contact_information['address']?></p>
                    </div>
                    <div class="contact-list mb-30">
                        <h4>Phone Number</h4>
                        <p><?=$contact_information['phone']?></p>
                    </div>
                    <div class="contact-list mb-30">
                        <h4>Email Address</h4>
                        <p><?=$contact_information['email']?></p>
                    </div>
                </div>
                <div class="social-icon-right mt-20">
                    <a href="<?=$about_me['fb_link']?>"><i class="fab fa-facebook-f"></i></a>
                    <a href="<?=$about_me['instagram_link']?>"><i class="fab fa-instagram"></i></a>
                    <a href="<?=$about_me['youtube_link']?>"><i class="fab fa-youtube"></i></a>
                    <a href="<?=$about_me['github_link']?>"><i class="fab fa-githubn"></i></a>
                </div>
            </div>
            <div class="offcanvas-overly"></div>
            <!-- offcanvas-end -->
        </header>
        <!-- header-end -->

        <!-- main-area -->
        <main>
              
            <!-- php code for about me -->

           <!-- you can find about me query  in side view part -->

            <!-- banner-area -->
            <section id="home" class="banner-area banner-bg fix">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-7 col-lg-6">
                            <div class="banner-content">
                                <h6 class="wow fadeInUp text-capitalize" data-wow-delay="0.2s";>HALLO!!! Selamat Datang</h6>
                                <h2 style="font-size: 3em;" class="wow fadeInUp text-light" data-wow-delay="0.4s">Saya <?=$about_me['name']?> </h2>
                                <p style="font-size: 2rem; font-weight: bold; font-style: italic;"class="wow fadeInUp" data-wow-delay="0.6s"><?=$about_me['nim']?></p>
                                <p class="wow fadeInUp text-light text-justify" data-wow-delay="0.6s"><?=$about_me['intro']?></p>
                                <div class="banner-social wow fadeInUp" data-wow-delay="0.8s">
                                    <ul>
                                        <li><a href="<?=$about_me['fb_link']?>"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="<?=$about_me['instagram_link']?>"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="<?=$about_me['youtube_link']?>"><i class="fab fa-youtube"></i></a></li>
                                        <li><a href="<?=$about_me['github_link']?>"><i class="fab fa-github"></i></a></li>
                                    </ul>
                                </div>
                                <a href="#" class="btn wow fadeInUp" data-wow-delay="1s">SEE PORTFOLIOS</a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 d-none d-lg-block">
                            <div class="banner-img text-right">
                            <img style="width: 400px; height: auto; border-radius: 1rem; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); margin: 20px;" src="admin/image/profile/<?=$about_me['photo']?>" alt="Profile Photo">
             
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-shape"><img src="front_end_assets/img/shape/dot_circle.png" style="width 100px" class="rotateme" alt="img"></div>
            </section>
            <!-- banner-area-end -->

            <!-- about-area-->
            <section id="about" class="about-area primary-bg pt-120 pb-120">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="about-img">
                                <img src="front_end_assets/img/banner/banner_img.png" title="me-01" alt="me-01">
                            </div>            
                        </div>
                        <div class="col-lg-6 pr-90">
                            <div class="section-title mb-25">
                                <span>Introduction</span>
                                <h2>About Me</h2>
                            </div>
                            <div class="about-content">
                                <p class="wow fadeInUp text-light text-justify"><?=$about_me['details']?></p>
                                <h3>Education:</h3>
                            </div>
                            
                            <!-- Education Item -->
                            <!-- php code for education -->
                            <?php 
                            $education_query = $dbcon->query("SELECT * FROM education_informations");
                            foreach ($education_query as $education) {
                            ?>

                            <div class="education">
                                <div class="year"><?=$education['year']?></div>
                                <div class="line"></div>
                                <div class="location">
                                    <span><?=$education['degree_name']?></span>
                                    <div class="progressWrapper">
                                        <div class="progress">
                                            <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s" data-wow-duration="2s" role="progressbar" style="width: <?=$education['progressbar']?>%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        

                        <?php } 
                        ?>
                            <!-- End Education Item -->

                            <!-- Skill Item -->
            <section id="skill" class="skill-area primary-bg pt-120 pb-120">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 order-lg-2">
                            <div class="about-img">
                                <img src="front_end_assets/img/banner/banner_img2.png" title="me-01" alt="me-01">
                            </div>            
                        </div>
                        <div class="col-lg-6 order-lg-1 pr-90">
                        <div class="section-title mb-40">
                                <span>My</span>
                                <h2>Skill :</h2>
                            </div>

                            <!-- skill Item -->
                            <!-- php code for skill -->
                            <?php 
                            $skill_query = $dbcon->query("SELECT * FROM skill");
                            foreach ($skill_query as $skill) {
                            ?>

                            <div class="skill">
                                    
                                <!-- Icon menggunakan class dari database -->
                                <i style="font-size: 3rem;" class="<?=$skill['icon']?>" style='color:#ffffff' ></i>
                                <div class="location">
                                    <p class="wow fadeInUp text-light">Title: <?=$skill['title']?></p>
                                     <p class="wow fadeInUp text-light">Tingkat Pemahaman: <?=$skill['some_text']?>%</p>


                                      <!-- Menambahkan teks di atas progress bar -->
                                    <div class="progressWrapper">
                                        <div class="progress">
                                            <!-- Progress bar menggunakan nilai dari database -->
                                            <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s" data-wow-duration="2s" role="some_text" style="width: <?=$skill['some_text']?>%;" aria-valuenow="<?=$skill['some_text']?>" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                </div>
            </section>

            <!---Artikel Item-->

            <section id="artikel" class="artikel-area primary-bg pt-120 pb-90">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>Article</span>
                                <h2>My Recent Best Works</h2>
                            </div>
                        </div>
                    </div>

                    
                    <div class="row">

            <!-- php code for my best works -->
                    <?php
                      $my_best_artikel_query = $dbcon->query("SELECT * FROM my_best_artikel ORDER BY id DESC LIMIT 6");
                      foreach($my_best_artikel_query as $row){
                    ?>

                      <div class="col-lg-4 col-md-6 pitem">
                      <div class="speaker-box">
      								<div class="speaker-thumb">
      									<img src="admin/image/my_best_artikel/<?=$row['photo']?>" alt="img" >
      								</div>
      								<div class="speaker-overlay">
      									<span><?=$row['catagory']?></span>
      									<h4><a href="artikel-single.html"><?=$row['works_name']?></a></h4>
      									<a href="artikel-single.html" class="arrow-btn">More information <span></span></a>
      								</div>
      							</div>
                  </div>

                  <!-- foreach end -->
                <?php } ?>

                </div>
        </div>
    </section>

            <!-- about-area-end -->
            <!-- Portfolios-area -->
            <section id="portfolio" class="portfolio-area primary-bg pt-120 pb-90">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>Portfolio Showcase</span>
                                <h2>My Recent Best Works</h2>
                            </div>
                        </div>
                    </div>

                    
                    <div class="row">

            <!-- php code for my best works -->
                    <?php
                      $my_best_works_query = $dbcon->query("SELECT * FROM my_best_works ORDER BY id DESC LIMIT 6");
                      foreach($my_best_works_query as $row){
                    ?>

                      <div class="col-lg-4 col-md-6 pitem">
                      <div class="speaker-box">
      								<div class="speaker-thumb">
      									<img src="admin/image/my_best_works/<?=$row['photo']?>" alt="img" >
      								</div>
      								<div class="speaker-overlay">
      									<span><?=$row['catagory']?></span>
      									<h4><a href="portfolio-single.html"><?=$row['works_name']?></a></h4>
      									<a href="portfolio-single.html" class="arrow-btn">More information <span></span></a>
      								</div>
      							</div>
                  </div>

                  <!-- foreach end -->
                <?php } ?>

                </div>
        </div>
    </section>
            <!-- fact-area-end -->
            <!-- brand-area -->
            <div class="barnd-area pt-100 pb-100">
                <div class="container">
                    <div class="row brand-active">
                        
                      <!-- php code for add logo -->
                      <?php 
                      $logo_query = $dbcon->query("SELECT * FROM logo ORDER BY id DESC");
                      if($logo_query->num_rows>= 6){
                      foreach ($logo_query as $logo) {
                        
                      
                      ?>


                        <div class="col-xl-2">
                            <div class="single-brand ">
                                <img  src="admin/image/logo/<?=$logo['photo']?>" alt="img" width='100'>
                            </div>
                        </div>
                      <?php 
                  } 
                } else{
                    echo "Require six logo";
                }
                  ?>
                        
                    </div>
                </div>
            </div>
            <!-- brand-area-end -->

            <!-- contact-area -->
            <section id="contact" class="contact-area primary-bg pt-120 pb-120">
                <div class="container">
                    <div class="row align-items-center">

                       
               <!-- contact information query in side view part -->
                        

                        <div class="col-lg-6">
                            <div class="section-title mb-20">
                                <span>information</span>
                                <h2>Contact Information</h2>
                            </div>
                            <div class="contact-content">
                                <p><?=$contact_information['small_text']?></p>
                                <h5>OFFICE IN : <span><?=$contact_information['office']?></span></h5>
                                <div class="contact-list">
                                    <ul>
                                        <li><i class="fas fa-map-marker"></i><span>Address :</span><?=$contact_information['address']?></li>
                                        <li><i class="fas fa-headphones"></i><span>Phone :</span><?=$contact_information['phone']?></li>
                                        <li><i class="fas fa-globe-asia"></i><span>e-mail :</span><?=$contact_information['email']?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    <!-- contact information area end -->

                        <div class="col-lg-6">
                            <div class="contact-form">
                                <form action="guest_message.php" method="post">

                                  <!-- message send error  -->

                                  <?php if(isset($_SESSION['guest_message_error'])) { ?>
                                    <div class="alert alert-danger">
                                      <?=$_SESSION['guest_message_error']?>
                                    </div>
                                  <?php }
                                  // unset error message

                                  unset($_SESSION['guest_message_error']);
                                  ?>
                                  <!-- error end -->

                                  <!-- message send success -->

                                  <?php if(isset($_SESSION['message_send'])) { ?>
                                    <div class="alert alert-success">
                                      <?=$_SESSION['message_send']?>
                                    </div>
                                  <?php }
                                  // unset success message

                                  unset($_SESSION['message_send']);
                                  ?>

                                  <!-- end alert -->

                                    <input type="text" placeholder="your name *" name='guest_name'>
                                    <input type="email" placeholder="your email *" name='guest_email'>
                                    <textarea name="guest_message" id="message" placeholder="your message *"></textarea>
                                    <button class="btn">SEND</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-area-end -->

        </main>
        <!-- main-area-end -->

        <!-- footer -->
        <footer>
            <div class="copyright-wrap">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="copyright-text text-center">
                                <p>Copyright© <span>Daniel Edwardo Manurung</span> | All Rights Reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-end -->





		<!-- JS here -->
        <script src="front_end_assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="front_end_assets/js/popper.min.js"></script>
        <script src="front_end_assets/js/bootstrap.min.js"></script>
        <script src="front_end_assets/js/isotope.pkgd.min.js"></script>
        <script src="front_end_assets/js/one-page-nav-min.js"></script>
        <script src="front_end_assets/js/slick.min.js"></script>
        <script src="front_end_assets/js/ajax-form.js"></script>
        <script src="front_end_assets/js/wow.min.js"></script>
        <script src="front_end_assets/js/aos.js"></script>
        <script src="front_end_assets/js/jquery.waypoints.min.js"></script>
        <script src="front_end_assets/js/jquery.counterup.min.js"></script>
        <script src="front_end_assets/js/jquery.scrollUp.min.js"></script>
        <script src="front_end_assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="front_end_assets/js/jquery.magnific-popup.min.js"></script>
        <script src="front_end_assets/js/plugins.js"></script>
        <script src="front_end_assets/js/main.js"></script>
    </body>

</html>
