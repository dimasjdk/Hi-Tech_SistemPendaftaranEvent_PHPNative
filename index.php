<!doctype html>
<html lang="en">

<!-- Mirrored from jthemes.org/html/genius-course/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Oct 2018 03:46:07 GMT -->
<head>
	<meta name="viewport" charset="UTF-8" content="width=device-width, initial-scale=1.0">
	<title>Hitech 1.0</title>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<link rel="stylesheet" href="assets/css/fontawesome-all.css">
	<link rel="stylesheet" href="assets/css/flaticon.css">
	<link rel="stylesheet" type="text/css" href="assets/css/meanmenu.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/video.min.css">
	<link rel="stylesheet" href="assets/css/animate.min.css">
	<link rel="stylesheet" href="assets/css/lightbox.css">
	<link rel="stylesheet" href="assets/css/progess.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
	<link rel="icon" href="assets/img/logo/favicon.png" type="image/png" sizes="16x16">


</head>

<body style="background-image: url(assets/img/banner/bg.png);">

	<div id="preloader"></div>


	<!-- Start of Header section
		============================================= -->
		<header>
			<div id="main-menu"  class="main-menu-container menu-bg-overlay">
				<div  class="main-menu">
					<div class="container">
						<div class="navbar-default">
							<div class="navbar-header float-left">
								<a class="navbar-brand text-uppercase" href="/hi-tech"><img src="assets/img/logo/favicon.png" alt="logo" style="max-width: 14%">
								<span style="font-size: 13pt; color: white;"><b>HI-TECHNOLOGY 1.0</b></span></a>
								
							</div>

							<!-- /.navbar-header -->
							
							<!-- Collect the nav links, forms, and other content for toggling -->
							<nav class="navbar-menu float-right">
								<div class="nav-menu ul-li">
									<ul>
										<li class="menu-item-has-children ul-li-block">
											<li><a href="?halaman=home">Home</a>
										</li>
										<li class="menu-item-has-children ul-li-block">
											<a href="#!"> Events</a>
											<ul class="sub-menu">
												<li><a href="?halaman=workshop">Workshop</a></li>
												<li><a href="?halaman=talkshow">Talkshow</a></li>
											</ul>
										</li>
										<li class="menu-item-has-children ul-li-block">
											<a href="#!"> Competitions</a>
											<ul class="sub-menu">
												<li><a href="?halaman=hackathon">Mini Hackhaton</a></li>
												<li><a href="?halaman=sf">Software Fair</a></li>
											</ul>
										</li>
										<li><a href="?halaman=about">About</a></li>
										<li><a href="?halaman=timeline">Timeline</a></li>
										<li><a href="registrasi.php">Registrasi</a></li>
									</ul>
								</div>
							</nav>

							<div class="mobile-menu">
								<div class="logo"><a href="?halaman=home"><img src="assets/img/logo/logo.png" alt="Logo"></a></div>
								<nav>
									<ul>
										<li><a href="?halaman=home">Home</a>
										</li>
										<li><a href="#!">Events</a>
											<ul>
												<li><a href="?halaman=workshop">Workshop</a></li>
												<li><a href="?halaman=talkshow">Talkshow</a></li>
											</ul>
										</li>
										<li><a href="#!">Competitions</a>
											<ul>
												<li><a href="?halaman=hackathon">Mini Hackhaton</a></li>
												<li><a href="?halaman=sf">Software Fair</a></li>
											</ul>
										</li>
										<li><a href="?halaman=about">About</a></li>
										<li><a href="?halaman=timeline">Timeline</a></li>
										<li><a href="registrasi.php">Registrasi</a></li>
									</ul>
								</nav>
							</div>
					</div>
				</div>
			</div>
		</div>
		</header>
 	<!-- Start of Header section
 		============================================= -->



 	<?php
 	error_reporting(E_ALL^(E_NOTICE|E_WARNING));
 	switch ($_GET['halaman']) {
 		case 'workshop':
 			include "workshop.php";
 			break;
 		case 'talkshow':
 			include "talkshow.php";
 			break;
 		case 'hackathon':
 			include "hackhaton.php";
 			break;
 		case 'sf':
 			include "sf.php";
 			break;
 		case 'about':
 			include "about.php";
 			break;
 		case 'timeline':
 			include "timeline.php";
 			break;
 		
 		default:
 			include "home.php";
 			break;
 	}

 	?>


	


	<!-- Start Of scound contact section
		============================================= -->
		<section id="contact_secound" class="contact_secound_section backgroud-style">
			<div class="container">
				<div class="contact_secound_content">
					<div class="row">
						<div class="col-md-4">
							<div class="contact-left-content">
								<div class="section-title  mb45 headline text-left">
									<h3 style="text-align: center;"><span>Sponsor</span></h3>
								</div>

								<div class="contact-address" style="text-align: center;">
									<div class="contact-address-details">
										
									</div>

									
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="contact-left-content">
								<div class="section-title  mb45 headline text-left">
									<h3 style="text-align: center;"><span>Visit Our Media</span></h3>
								</div>
								<div class="contact-address" align="center">
									<div class="footer-social ul-li">
										<ul>
											<li><a href="www.facebook.com/globalenglish"><i class="fab fa-facebook-f"></i></a></li>
											<li><a href="www.twitter.com/globalenglish"><i class="fab fa-twitter"></i></a></li>
											<li><a href="gmail.com"><i class="fab fa-google-plus-g"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="contact-left-content">
								<div class="section-title  mb45 headline text-left">
									<h3 style="text-align: center;"><span>Media Partner</span></h3>
								</div>

								<div class="contact-address" style="text-align: center;">
									<div class="contact-address-details">
										<img src="assets/img/sponsor/semarangku.png" style="width: 20%">
										&nbsp; &nbsp;
										<img src="assets/img/sponsor/tekno.jpg" style="width: 20%">
										&nbsp; &nbsp;
										<img src="assets/img/sponsor/sandec.png" style="width: 35%">
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			&nbsp;


			<div class="footer_2 backgroud-style">
				<div class="container">
					<div class="copy-right-menu">
						<div class="row">
							<div class="col-md-5">
								<div class="copy-right-text">
                    				<p> ©2019 - Made with <i class="fa fa-heart"></i> by HMTI UDINUS</p>
								</div>
							</div>
							
							<div class="col-md-4">
								<div class="copy-right-menu-item float-right ul-li">
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	<!-- ENd Of scound contact section
		============================================= -->





		<!-- For Js Library -->
		<script src="assets/js/jquery-2.1.4.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/owl.carousel.min.js"></script>
		<script src="assets/js/jarallax.js"></script>
		<script src="assets/js/jquery.magnific-popup.min.js"></script>
		<script src="assets/js/lightbox.js"></script>
		<script src="assets/js/jquery.meanmenu.js"></script>
		<script src="assets/js/scrollreveal.min.js"></script>
		<script src="assets/js/jquery.counterup.min.js"></script>
		<script src="assets/js/waypoints.min.js"></script>
		<script src="assets/js/jquery-ui.js"></script>
		<script src="assets/js/gmap3.min.js"></script>
		<script src="assets/js/switch.js"></script>
		<script src="http://maps.google.com/maps/api/js?key=AIzaSyC61_QVqt9LAhwFdlQmsNwi5aUJy9B2SyA"></script>

		<script src="assets/js/script.js"></script>
	</body>
	
<!-- Mirrored from jthemes.org/html/genius-course/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Oct 2018 03:47:14 GMT -->
</html>