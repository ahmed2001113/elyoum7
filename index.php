<?php
include 'inc/conn.php';
?>
<!doctype html>
<html lang="zxx" class="theme-light">
<head>
    <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS --> 
        <link rel="stylesheet" href="default/assets/css/bootstrap.min.css">
        <!-- Animate CSS --> 
        <link rel="stylesheet" href="default/assets/css/animate.min.css">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="default/assets/css/meanmenu.css">
        <!-- Boxicons CSS -->
        <link rel="stylesheet" href="default/assets/css/boxicons.min.css">
        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="default/assets/css/owl.carousel.min.css">
        <!-- Owl Carousel Default CSS -->
        <link rel="stylesheet" href="default/assets/css/owl.theme.default.min.css">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="default/assets/css/magnific-popup.min.css">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="default/assets/css/nice-select.min.css">
        <!-- Style CSS -->
        <link rel="stylesheet" href="default/assets/css/style.css">
        <!-- Dark CSS -->
        <link rel="stylesheet" href="default/assets/css/dark.css">
        <!-- Responsive CSS -->
		<link rel="stylesheet" href="default/assets/css/responsive.css">
		<title>Depan - News Magazine HTML Template</title>
        <link rel="icon" type="image/png" href="default/assets/img/favicon.png">
  <link rel="stylesheet" href="main.css">
    
<style>
  .meanmenu-reveal{
        display: none;
    }
    .buy-now-btn{
    display: none;
 }
 .im2{
    width: 100%;
    height: 500px;
 }
</style>
</head>

    <body>
        <!-- Start Preloader -->
        <div class="preloader">
            <div class="loader">
                <div class="wrapper">
                    <div class="circle circle-1"></div>
                    <div class="circle circle-1a"></div>
                    <div class="circle circle-2"></div>
                    <div class="circle circle-3"></div>
                </div>
                <span>Loading...</span>
            </div>
        </div>
        <!-- End Preloader -->

        <!-- Start Top Header Area -->
        <div class="top-header-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <ul class="top-header-social">
                            <li>
                                <a href="#" class="facebook" >
                                    <i class='bx bxl-facebook'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="pinterest" >
                                    <i class='bx bxl-instagram'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="pinterest" >
                                    <i class='bx bxl-linkedin'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="twitter" >
                                    <i class='bx bxl-twitter'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="linkedin" >
                                    <i class='bx bxl-youtube'></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-6">
                        <ul class="top-header-others">
                            <li>
                                <div class="languages-list">
                                    <select>
                                        <option value="1">English</option>
                                        <option value="2">العربيّة</option>
                                        <option value="3">Deutsch</option>
                                        <option value="3">Português</option>
                                        <option value="3">简体中文</option>
                                    </select>
                                </div>
                            </li>
  </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Top Header Area -->
        <!-- Start Navbar Area -->
        <div class="navbar-area">
            <div class="main-responsive-nav">
                <div class="container">
                    <div class="navbar navbar-expand-md navbar-light">
                            <a href="#">
                                <img src="default/assets/img/logo-1.png" class="black-logo" alt="image">
                                <img src="default/assets/img/logo-3.png" class="white-logo" alt="image">
                            </a>
                            <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                           </ul>
  </div>
                            <div class="others-options d-flex align-items-center">
                                <div class="option-item">
                                <a href="login.php" class="black-logo kj" >ADMIN</a>
                                <a href="login.php" class="white-logo kj" >ADMIN</a>
                            </div>
                        </div>
                        </div>    
                    </div>
                </div>
            </div>
            <div class="main-navbar">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a href="#">
                            <img src="default/assets/img/logo-1.png" class="black-logo" alt="image">
                            <img src="default/assets/img/logo-3.png" class="white-logo" alt="image">
                        </a>
                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                           </ul>
                            <div class="others-options d-flex align-items-center">
                                <div class="option-item">
                                <a href="login.php" class="black-logo kj" >ADMIN</a>
                                <a href="login.php" class="white-logo kj" >ADMIN</a>
                            </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->
        <!-- Start Main News Slider Area -->
        <section class="main-news-slider-area">
            <div class="container-fluid">
                <div class="main-news-slides owl-carousel owl-theme">
                    <?php
                    $q="SELECT * FROM post where type='image' ";
                    $reselt=$conn->query($q);
                    foreach($reselt as $r){?>
                    <div class="news-slider-item imggg">
                        <a href="#">
                            <img src="<?= $r['image']?>" class="imgg" alt="image">
                        </a>
                        <div class="slider-content">
                            <div  class="tag"><?= $r['title']?></div>
                            <h3>
                                <a href="single.php?id=<?=$r['id']?>"><?= $r['description']?></a>
                            </h3>
                            <span><a href="single.php?id=<?=$r['id']?>"><?= $r['author']?><?= $r['date']?></a> </span>
                        </div>
                    </div>
                  <?php } ?>
                </div>
            </div>
        </section>
        <!-- End Main News Slider Area -->
        <!-- Start Default News Area -->
        <section class="default-news-area">
            <div class="container">
                <div class="most-popular-news">
                    <div class="section-title"> 
                        <h2>Most popular</h2> 
                    </div>
                    <div class="row">
                    <?php
                    $q="SELECT * FROM post where type='image' and category='popular'" ;
                    $reselt=$conn->query($q);
                    foreach($reselt as $r){?>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-most-popular-news">
                                <div class="popular-news-image">
                                    <a href="#">
                                        <img src="<?=$r['image']?>" class="im2" alt="image">
                                    </a>
                                </div>                                
                                <div class="popular-news-content">
                                    <span><?=$r['title']?></span>
                                    <h3>
                                        <a href="#"><?=$r['description']?></a>
                                    </h3>
                                    <p><a href="#">Patricia</a> / <?=$r['date']?></p>
                                </div>
                            </div>
                        </div>
                        <?php }?>
                    </div>
                </div>

                <div class="video-news">
                    <div class="section-title"> 
                        <h2>Top video</h2> 
                    </div>
                    <div class="video-slides owl-carousel owl-theme">
                    <?php
                    $q="SELECT * FROM post WHERE type='video' ";
                    $reselt=$conn->query($q);
                    foreach($reselt as $r){?>
                    <div class="video-item">
                            <div class="video-news-image">
                                    <video src="<?= $r['image']?>" class="im2" controls alt="video" >
                            </div>
                            <div class="video-news-content">
                            <h3><?= $r['description']?></h3>
                                <span><?= $r['date']?></span>
                            </div>
                        </div> 
<?php } ?>                   
                    </div>
                </div>
                <div class="politics-news">
                    <div class="section-title"> 
                        <h2>Sports</h2> 
                    </div>
                    <div class="row">
                    <?php
                    $q="SELECT * FROM post WHERE type='image' and category='sports' ";
                    $reselt=$conn->query($q);
                    foreach($reselt as $r){?>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-politics-news">
                                <div class="politics-news-image">
                                        <img src="<?= $r['image']?>" class="im2" alt="image"> 
                                </div>      
                                <div class="politics-news-content">
                                    <span>Sports</span>
                                    <h3><?= $r['description']?></h3>
                                    <p><?= $r['author']?> <?= $r['date']?></p>
                                </div>
                            </div>
                        </div>
<?php }?>
                    </div>
                </div>

                <div class="business-news">
                    <div class="section-title"> 
                        <h2>Business</h2> 
                    </div>
                    <div class="row">
                    <?php
                    $q="SELECT * FROM post WHERE type='image' and category='business' ";
                    $reselt=$conn->query($q);
                    foreach($reselt as $r){?>
                    <div class="col-lg-4 col-md-6">
                            <div class="single-business-news">
                                <div class="business-news-image">
                                <img src="<?= $r['image']?>" class="im2" alt="image">
                    </div>
                                <div class="business-news-content">
                                <span>Business</span>
                                    <h3><?= $r['description']?></h3>
                                    <p><?= $r['author']?> <?= $r['date']?></p>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>

                <div class="culture-news">
                    <div class="section-title"> 
                        <h2>Culture</h2> 
                    </div>
                    <div class="row">
                    <?php
                    $q="SELECT * FROM post WHERE type='image' and category='culture' ";
                    $reselt=$conn->query($q);
                    foreach($reselt as $r){?>
                        <div class="col-lg-6">
                            <div class="single-culture-news">
                                <div class="culture-news-image">
                                <img src="<?= $r['image']?>" class="im2" alt="image">    
                            </div>
                                <div class="culture-news-content">
                                <span>Culture</span>
                                    <h3><?= $r['description']?></h3>
                                    <p><?= $r['author']?> <?= $r['date']?></p>
                            </div>
                            </div>
                        </div>
<?php } ?>
                    </div>
                </div>

                <div class="tech-news">
                    <div class="section-title"> 
                        <h2>Technology</h2> 
                    </div>
                    <div class="row">
                    <?php
                    $q="SELECT * FROM post WHERE type='image' and category='technology' ";
                    $reselt=$conn->query($q);
                    foreach($reselt as $r){?>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-tech-news-box">
                            <img src="<?= $r['image']?>" class="im2" alt="image">    
                                <div class="tech-news-content">
                                <span>Technology</span>
                                    <h3><?= $r['description']?></h3>
                                    <p><?= $r['author']?> <?= $r['date']?></p>
                            </div>
                            </div>
                        </div>
<?php } ?>
                    </div>
                </div>

                <div class="sports-news">
                    <div class="section-title"> 
                        <h2>Health</h2> 
                    </div>
                    <div class="row">
                    <?php
                    $q="SELECT * FROM post WHERE type='image' and category='health' ";
                    $reselt=$conn->query($q);
                    foreach($reselt as $r){?>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-sports-news-box">
                                <div class="sports-news-image">
                                <img src="<?= $r['image']?>" class="im2" alt="image">    
                                </div>                                
                                <div class="sports-news-content">
                                <span>Health</span>
                                    <h3><?= $r['description']?></h3>
                                    <p><?= $r['author']?> <?= $r['date']?></p>
                            </div>
                            </div>
                        </div>
<?php } ?>
                    </div>
                </div>


            </div>
        </section>
        <!-- End Default News Area -->
        
        <!-- Start Footer Area -->
        <section class="footer-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="single-footer-widget">
                            <a href="#">
                                <img src="default/assets/img/logo-3.png" alt="image">
                            </a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <ul class="social">
                                <li>
                                    <a href="#" class="facebook" >
                                        <i class='bx bxl-facebook'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="twitter" >
                                        <i class='bx bxl-instagram'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="pinterest" >
                                        <i class='bx bxl-linkedin'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="linkedin" >
                                        <i class='bx bxl-twitter'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="linkedin" >
                                        <i class='bx bxl-youtube'></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-footer-widget">
                            <h2>Subscribe</h2>
                            <div class="widget-subscribe-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <form class="newsletter-form">
                                    <input type="email" class="input-newsletter" placeholder="Enter your email" name="EMAIL" required>
                                    <button type="submit">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Footer Area -->
        <div class="dark-version">
            <label id="switch" class="switch">
                <input type="checkbox" onchange="toggleTheme()" id="slider">
                <span class="slider round"></span>
            </label>
        </div>
        <div class="go-top active">
            <i class="bx bx-up-arrow-alt"></i>
        </div>
        <!-- Jquery Slim JS -->
        <script src="default/assets/js/jquery.min.js"></script>
        <!-- Popper JS -->
        <script src="default/assets/js/popper.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="default/assets/js/bootstrap.min.js"></script>
        <!-- Meanmenu JS -->
        <script src="default/assets/js/jquery.meanmenu.js"></script>
        <!-- Owl Carousel JS -->
        <script src="default/assets/js/owl.carousel.min.js"></script>
        <!-- Magnific Popup JS -->
        <script src="default/assets/js/jquery.magnific-popup.min.js"></script>
        <!-- Nice Select JS -->
        <script src="default/assets/js/nice-select.min.js"></script>
        <!-- Ajaxchimp JS -->
		<script src="default/assets/js/jquery.ajaxchimp.min.js"></script>
		<!-- Form Validator JS -->
		<script src="default/assets/js/form-validator.min.js"></script>
		<!-- Contact JS -->
        <script src="default/assets/js/contact-form-script.js"></script>
        <!-- Wow JS -->
        <script src="default/assets/js/wow.min.js"></script>
        <!-- Custom JS -->
        <script src="default/assets/js/main.js"></script>
    </body>
</html>