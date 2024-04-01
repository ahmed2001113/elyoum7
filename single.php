<?php 
include 'inc/conn.php';
 $id=$_GET['id'];
?>
<!doctype html>
<html lang="zxx" class="theme-light">
<!-- Mirrored from templates.nvytheme.com/depan/default/news-details-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Mar 2022 18:25:09 GMT -->
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
 .buy-now-btn{
    display: none;
 }
.im1{
width: 100%;
height: 1000px;
}

</style>
    </head>

    <body>
        
        <!-- Start Preloader -->
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

        <!-- Start Page Banner -->
        <div class="page-title-area">
            <div class="container">
                <div class="page-title-content">
                    <h2>News details</h2>
                    <ul>
                        <li><h2><a href="index.php">Home</a></h2></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Page Banner -->
        <!-- Start News Details Area -->
        <section class="news-details-area ptb-50">
            <div class="container">
                <div class="row">
                <?php 
                $q="SELECT * FROM post WHERE id = $id";
                $singlepost=$conn->query($q);
                foreach($singlepost as $s){ 
                ?>                    
                <div class="col-lg-12 col-md-12">
                        <div class="blog-details-desc">
                            <div class="article-image">
                                <img src="<?= $s['image']?>" class="im1" alt="image">
                            </div>
                            <div class="article-content">
                                <span><a href="#"><?=$s['author']?></a> / <?=$s['date']?></span>
                                <h3><?=$s['title']?></h3>
                                <p><?=$s['description']?></p>
                            </div>
                            <div class="article-footer">
                                <div class="article-share">
                                    <ul class="social">
                                        <li><span>Share:</span></li>
                                        <li>
                                            <a href="#" >
                                                <i class='bx bxl-facebook'></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" >
                                                <i class='bx bxl-twitter'></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" >
                                                <i class='bx bxl-instagram'></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="comments-area">
                            <?php
                               $q="SELECT * FROM comments where postid=$id ";
                               $commment=$conn->query($q);
                                $counn = $commment->num_rows;?>    
                                <h3 class="comments-title"> <?= $counn ?> Comments</h3>
                                <?php
                               $q="SELECT * FROM comments where postid=$id ";
                               $commment=$conn->query($q);
                               foreach($commment as $m){ ?>    
                                <ol class="comment-list">
                                    <li class="comment">
                                        <div class="comment-body">
                                            <footer class="comment-meta">
                                                <div class="comment-author vcard">
                                                    <b class="fn">
                                                    <?= $m['name']?>
                                                    </b>
                                                </div>
                                                <div class="comment-metadata">
                                                        <span> <?= $m['date']?> </span>
                                                </div>
                                            </footer>
                                            <div class="comment-content">
                                                <p><?= $m['comment']?>
                                                </p>
                                            </div>
                                            <div class="reply">
                                                <a href="deletcom.php?comid=<?=$m['comid']?>&id=<?=$s['id']?>" class="comment-reply-link">Delete</a>
                                            </div>
                                        </div>
                                        <?php }?>
                                <div class="comment-respond">
                                    <h3 class="comment-reply-title">Leave a Reply</h3>
                                    <form class="comment-form" action="addcomment.php" method="post" >
                                        <p class="comment-notes">
                                            <span id="email-notes">Your email address will not be published.</span>
                                            Required fields are marked 
                                        </p>
                                        <input type="hidden" name="postid" value="<?= $id?>">
                                        <input type="hidden" name="id" value="<?= $id?>">
                                        <p class="comment-form-author">
                                            <label>Name</label>
                                            <input type="text" id="author" placeholder="Your Name*" name="name" required="required">
                                        </p>
                                        <p class="comment-form-comment">
                                            <label>Comment</label>
                                            <textarea name="comment" id="comment" cols="45" placeholder="Your Comment..." rows="5" maxlength="65525" required="required"></textarea>
                                        </p>
                                        <p class="form-submit">
                                            <input type="submit" name="supmit" id="submit" class="submit">
                                        </p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Start News Details Area -->
        
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
                                    <a href="#" class="facebook">
                                        <i class='bx bxl-facebook'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="twitter">
                                        <i class='bx bxl-instagram'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="pinterest">
                                        <i class='bx bxl-linkedin'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="linkedin">
                                        <i class='bx bxl-twitter'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="linkedin">
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
                <?php } ?>
                </div>
            </div>
        </section>
        <!-- End Footer Area -->
        <!-- dark version -->
        <div class="dark-version">
            <label id="switch" class="switch">
                <input type="checkbox" onchange="toggleTheme()" id="slider">
                <span class="slider round"></span>
            </label>
        </div>
        <!-- dark version -->
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
<!-- Mirrored from templates.envytheme.com/depan/default/news-details-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Mar 2022 18:25:10 GMT -->
</html>