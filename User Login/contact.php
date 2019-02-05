<?php session_start(); ?>

<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>FIND A DOCTOR</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="colorlib-loader"></div>
	
	<div id="page">
	<nav class="colorlib-nav" role="navigation">
		<div class="top-menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="top">
							<div class="row">
								<div class="col-md-6">
									<div id="colorlib-logo"><a href="index.php">FIND<span> A DOCTOR</span></a></div>
								</div>
								<?php
								// echo $_SESSION['userid'];
									if(isset($_SESSION["userid"]))
										{ ?>
											<div class="form-group text-center">
											<a href="signout.php"><input type="submit" value="SignOut" class="btn btn-primary"></a>
										</div>
										
							<?php	} else { ?>


								<div class="form-group text-center">
											<a href="UserRegistration.php"><input type="submit" value="Register" class="btn btn-primary"></a>
											<a href="UserLogin.php"><input type="submit" value="Login" class="btn btn-primary"></a>
										</div>
							<?php }; ?>			
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="menu-wrap">
				<div class="container">
					<div class="row">
						<div class="col-xs-8">
							<div class="menu-1">
								<ul>
									<li><a href="index.php">Home</a></li>
									<li><a href="services.php">Services</a></li>
									<li><a href="departments.php">Departments</a></li>
									<li><a href="blog.php">Blog</a></li>
									<li class="active"><a href="contact.php">Contact</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</nav>
	
	<aside id="colorlib-hero" class="breadcrumbs">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image: url(images/img_bg_6.jpg);">
		   		<div class="overlay"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 col-md-pull-2 slider-text">
			   				<div class="slider-text-inner">
			   					<h1>Get in <strong>touch</strong></h1>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>

	<div id="colorlib-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-12 animate-box">
					<h2>Contact Information</h2>
					<div class="row contact-info-wrap">
						<div class="col-md-3">
							<p><span><i class="icon-location"></i></span> 198 West 21th Street, <br> Suite 721 New York NY 10016</p>
						</div>
						<div class="col-md-3">
							<p><span><i class="icon-phone"></i></span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
						</div>
						<div class="col-md-3">
							<p><span><i class="icon-mail"></i></span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
						</div>
						<div class="col-md-3">
							<p><span><i class="icon-globe-outline"></i></span> <a href="#">yoursite.com</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-12 animate-box">
					<div class="row">
						<div class="col-md-6">
							<h2>Get In Touch</h2>
							<form action="ufeedback.php">
								<div class="row form-group">
									<div class="col-md-6">
										<label for="Name">Name</label>
										<input type="text" id="fname" class="form-control mb" placeholder="Your firstname">
									</div>
								</div>


								<div class="row form-group">
									<div class="col-md-12">
										<label for="message">Message</label>
										<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea>
									</div>
								</div>
								<div class="form-group text-center">
									<input type="submit" value="Send Message" class="btn btn-primary">
								</div>
							</form>
						</div>
					</div>		
				</div>
			</div>
		</div>
	</div>


	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Sticky Kit -->
	<script src="js/sticky-kit.min.js"></script>
	<!-- Google Map -->
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

