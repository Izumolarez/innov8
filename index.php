<?php
	define('DOT','.');
	require_once(DOT ."/bootstrap.php");
	$HasPage = false;
		if(isset($_REQUEST['page'])){
		$HasPage = true;
		$page = $_REQUEST['page'];
		include_once(DOT ."/_index/{$page}/{$page}.php");
		}
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <base href="<?= $core->domain; ?>">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php if($HasPage){
						echo $seo['PAGE_TITLE'];
						}else{
							echo 'Home | Innov8';
							}?> </title>
        <!-- fav icon -->
        <link href="assets/images/favicon.png" rel="shortcut icon" type="image/png">

        <!-- Bootstrap -->
        <?= '<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">' ?>
        <!-- animated-css -->
        <link href="assets/css/animate.min.css" rel="stylesheet" type="text/css">
        <!-- font-awesome-css -->
        <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- owl-carrosel-css -->
        <link href="assets/owl-carrosel/owl.carousel.min.css" rel="stylesheet" type="text/css">
        <link href="assets/owl-carrosel/owl.theme.default.min.css" rel="stylesheet" type="text/css">
        <!-- offcanvas-menu-css -->
        <link href="assets/css/offcanvas-menu.css" rel="stylesheet" type="text/css">
        <!-- style-css -->
        <?= '<link href="assets/css/style.css" rel="stylesheet" type="text/css">' ?>

    </head>
    <body class="<?php if($HasPage){
						echo $seo['PAGE_CLASS'];
						}else{
							echo 'homePageOne';
							}?>">
        <!-- start preloader -->
        <div id="preloader">
            <div>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <!-- end preloader -->

        <div id="main-wrapper">
            <div id="box">
                <div class="top-bar hidden-sm hidden-xs">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="left-bar">
                                    <ul>
                                        <li><img src="assets/images/mail.png" alt="">  mail@innov8.com</li>

                                        <li><img src="assets/images/phone.png" alt=""> +1-(182)-871 971</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="right-bar text-right">
                                    <div class="country dropdown inline-block">
                                    <ul class="social-icon inline-block">
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    </ul>
                                        <span></span>
                                    </div>

                           <?php if($isLoggedIn): ?>
                                <span><a href="./exit.php/"><i class="fa fa-sign-out" aria-hidden="true"></i>Sign Out</a></span> 
                           <?php else: ?> 
                                <span><a href="./login.php/"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a></span> 
                           <?php endif; ?> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- top-bar -->
            </div>
            <header class="header-section header-section-one">
                <nav class="navbar navbar-top navbar-inverse">
                    <div class="container">
                        <div class="nav-p">
                            <div class="navbar-wrapper">
                                <div class="navbar-header">
                                    <a class="navbar-brand" href="./">
                                        <img class="caption hidden-sm hidden-xs" src="assets/images/logo.png" alt="image">
                                        <img class="caption-two visible-sm visible-xs" src="assets/images/logo-m.png" alt="image">
                                    </a>
                                </div>

                                <div class="collapse navbar-collapse hidden-sm hidden-xs">
                                    <ul class="nav navbar-nav">
                                        <li><a href="./">Home</a></li>
                                        <li><a href="./pages/about/">About</a></li>
                                        <li><a href="./pages/innov8/">Innov8</a></li>
                                        <li><a href="./pages/faq/">Faq</a></li>
                                        <li><a href="./pages/contact/">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                           <?php if($isLoggedIn): ?> 
                            <div class="nav-right-bar navbar-right hidden-sm hidden-xs">
                                <span><a href="./dashboard.php/">Dashboard</a><i class="fa fa-dashcube" aria-hidden="true"></i></span> 
                            </div> 
                           <?php else: ?>  
                            <div class="nav-right-bar navbar-right hidden-sm hidden-xs">
                                <span><a href="./register.php/">Register</a><i class="fa fa-user-plus" aria-hidden="true"></i></span> 
                            </div> 
                           <?php endif ?>  
                            
                        </div>
                    </div> 
                </nav> 
            </header> 

			<?php if($HasPage): ?>
            
			<section class="banner-section">
                <div class="container">
                    <div class="header-title text-center">
                        <h2 class="title"><?= $seo['CLASS_TITLE'] ?></h2>
                        <span class="sub-title">Home > <span><?= $seo['SUB_TITLE'] ?></span></span>
                    </div> <!-- header-title -->
                </div>
            </section> <!-- banner-section -->
            
			<?php require_once(DOT ."/_index/{$page}/{$page}.phtml"); ?>
			<?php else: ?>
            
            <section class="slider-section">
                <div class="main-slider">
                    <div id="main-slider-carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <div class="slider-one"></div>

                                <div class="content text-center">
                                    <h1 class="large-text wow fadeInDown" data-wow-delay="0.5s" data-wow-duration="0.6s">We care about your <br> business</h1>

                                    <div class="guard">
                                        <p class="small-text wow fadeInDown" data-wow-delay="0.9s">We believe numbers without meaning are useless. Our mission is to become your trusted business <br> advisor. Our Certified Accountants are passionate about your success.</p>
                                    </div>

                                    <div class="link-button wow fadeInUp" data-wow-delay="1.2s">
                                        <a href="./pages/about/" class="btn btn-primary">About us</a>
                                        <a href="./pages/contact/" class="btn btn-default">Contact</a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="slider-two"></div>

                                <div class="content text-right">
                                    <h1 class="large-text wow fadeInDown" data-wow-delay="0.5s" data-wow-duration="0.6s">We care about your <br> business</h1>

                                    <div class="guard">
                                        <p class="small-text wow fadeInDown" data-wow-delay="0.9s">We believe numbers without meaning are useless. Our mission is to become your trusted business <br> advisor. Our Certified Accountants are passionate about your success.</p>
                                    </div>

                                    <div class="link-button wow fadeInUp" data-wow-delay="1.2s">
                                        <a href="./pages/about/" class="btn btn-primary">About us</a>
                                        <a href="./pages/contact/" class="btn btn-default">Contact</a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="slider-three"></div>

                                <div class="content text-left">
                                    <h1 class="large-text wow fadeInDown" data-wow-delay="0.5s" data-wow-duration="0.6s">We care about your <br> business</h1>

                                    <div class="guard">
                                        <p class="small-text wow fadeInDown" data-wow-delay="0.9s">We believe numbers without meaning are useless. Our mission is to become your trusted business <br> advisor. Our Certified Accountants are passionate about your success.</p>
                                    </div>

                                    <div class="link-button wow fadeInUp" data-wow-delay="1.2s">
                                        <a href="#" class="btn btn-primary">About us</a>
                                        <a href="#" class="btn btn-default">Contact</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a class="left carousel-control" href="#main-slider-carousel" role="button" data-slide="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>

                        <a class="right carousel-control" href="#main-slider-carousel" role="button" data-slide="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>  
                </div>
            </section> <!-- slider-section -->

            <section class="counting-section">
                <div class="container text-center">
                    <h2 class="hidden">counting-title</h2>

                    <div class="counting-pusher">
                        <div class="counting-wrapper">
                            <div class="count-description inline-block">
                                <span class="timer">2162</span>
                            </div>
                            <p>Projects</p>
                        </div>  

                        <div class="counting-wrapper">
                            <div class="count-description inline-block">
                                <span class="timer">1629</span>
                            </div>
                            <p>Clients</p>
                        </div>  

                        <div class="counting-wrapper">
                            <div class="count-description inline-block">
                                <span class="timer">918</span>K
                            </div>
                            <p>Stocks</p>
                        </div> 

                        <div class="counting-wrapper">
                            <div class="count-description inline-block">
                                <span class="timer">2519</span>
                            </div>
                            <p>Members</p>
                        </div>  
                    </div> 
                </div>
            </section> <!-- counting-section -->

            <section class="client-section section-padding">
                <div class="container">
                    <div class="title-bar text-center">
                        <h2 class="title">Trusted Partners</h2>
                        <span class="title-border"></span>
                        <p>We deliver true results, focusing on strategic decisions and practical actions tailored to our clients' unique reality. We <br> engage all levels of an organization from day one.</p>
                    </div> <!-- title-bar -->

                    <div class="client-carousel owl-carousel owl-theme">
                        <div class="item"><img src="assets/images/client/client-1.png" alt=""></div>
                        <div class="item"><img src="assets/images/client/client-2.png" alt=""></div>
                        <div class="item"><img src="assets/images/client/client-3.png" alt=""></div>
                        <div class="item"><img src="assets/images/client/client-4.png" alt=""></div>
                    </div> 
                </div>
            </section>
            
		<?php endif; ?>
             
        </div> <!-- main-wrapper -->

        <footer class="footer-section">
            <div class="container">
                <div class="footer-part">
                    <div class="row">
                        <div class="col-sm-6 col-md-3">
                            <div class="footer-wrapper">
                                <span class="footer-logo"><img src="assets/images/footer-logo.png" alt="image"></span>

                                <p>Perspiciatis unde omnis iste natus error sit voluptatem accu santium doloremque.</p>

                                <ul class="time-part">
                                    <li><span>Mon - Fri</span>: 9am - 9pm</li>
                                    <li><span>Sat</span>: 9am - 5pm</li>
                                </ul> 
                            </div> 
                        </div>

                        <div class="col-sm-6 col-md-3">
                            <div class="footer-wrapper">
                                <h3>Recent News</h3>

                                <div class="recent-post">
                                    <div class="caption pull-left"><img src="assets/images/footer/p1.jpg" alt="image"></div>

                                    <div class="content">
                                        <p>UK inflation rate falls in October</p>
                                        <span class="time"><i class="fa fa-clock-o" aria-hidden="true"></i> May 29, 2017</span>
                                    </div>
                                </div> 

                                <div class="recent-post second-post">
                                    <div class="caption pull-left"><img src="assets/images/footer/p1.jpg" alt="image"></div>

                                    <div class="content">
                                        <p>UK inflation rate falls in October</p>
                                        <span class="time"><i class="fa fa-clock-o" aria-hidden="true"></i> May 29, 2017</span>
                                    </div>
                                </div> 
                            </div> 
                        </div>

                        <div class="col-sm-4 col-md-2">
                            <div class="footer-wrapper">
                                <h3>Links</h3>

                                <ul class="page-link">
                                    <li><a href="./">Home</a></li>
                                    <li><a href="./pages/about/">About</a></li>
                                    <li><a href="./pages/innov8/">Inno8</a></li>
                                    <li><a href="./pages/faq/">FAQ</a></li>
                                    <li><a href="./pages/contact/">Contact</a></li>
                                </ul>
                            </div> 
                        </div>

                        <div class="col-sm-8 col-md-4">
                            <div class="footer-wrapper">
                                <h3>Newsletter</h3>

                                <form class="footer-form form-horizontal">
                                    <div class="form-group">
                                        <input class="footerSearchBar form-control" value="email address.." onblur="if(this.value=='')this.value='email address..'" onfocus="if(this.value=='email address..')this.value=''" id="footerSearchBar" name="email" type="email">
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="subscribeBtn"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                                    </div>
                                </form>

                                <h3 class="social-title">Social Media</h3>
                                <ul class="social-media">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div> 
                        </div>
                    </div>
                </div> <!-- footer-one -->
            </div>

            <div class="copyright-section">
                <div class="container">
                    <p class="inline-block">2017 © <span><a href="./">Innov8Canada</a></span> All rights reserved</p>
                    <ul class="pull-right">
                        <li><a href="#">Legal</a></li>
                        <li><a href="#">SItemap</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div> 
        </footer> <!-- footer-section -->

        <!-- Off-Canvas View Only -->
        <span class="menu-toggle navbar visible-xs visible-sm"><i class="fa fa-bars" aria-hidden="true"></i></span>
        <div id="offcanvas-menu" class="visible-xs visible-sm">
            <span class="close-menu"><i class="fa fa-times" aria-hidden="true"></i></span>
            <ul class="menu-wrapper">
                <li><a href="./">Home</a></li>
                <li><a href="./pages/about/">About</a></li>
                <li><a href="./pages/innov8/">Innov8</a></li>
                <li><a href="./pages/faq/">FAQ</a></li>
                <li><a href="./pages/contact/">Contact</a></li>
                <li><?php if($isLoggedIn): ?>
                        <a href="./dashboard.php/">Dashboard</a>
                        <a href="./exit.php/">Sign Out</a>
                     <?php else: ?>
                         <a href="./register.php/">Register</a>
                         <a href="./login.php/">Sign In</a> 
                     <?php endif ?></li>  
            </ul> <!-- menu-wrapper -->  
            
                
        </div>
        <!-- Off-Canvas View Only -->

        <div id="toTop" class="hidden-xs">
            <i class="fa fa-chevron-up"></i>
        </div> <!-- totop -->


        <script src="assets/js/jquery.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.inview.min.js"></script>
        <script src="assets/js/wow.js"></script>
        <script src="assets/js/lightbox.js"></script>
        <script src="assets/owl-carrosel/owl.carousel.min.js"></script>
        <script src="assets/js/script.js"></script>
    </body>
</html>
