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
									<li class="active"><a href="index.php">Home</a></li>
									<li><a href="services.php">Services</a></li>
									<li><a href="departments.php">Departments</a></li>
									<li><a href="blog.php">Blog</a></li>
									<li><a href="contact.php">Contact</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</nav>
	
	<aside id="colorlib-hero">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image: url(images/img_bg_6.jpg);">
		   		<div class="overlay"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 col-md-pull-2 slider-text">
			   				<div class="slider-text-inner">
			   					<h1>Your Health <strong>is always <br>in the first place</strong></h1>
									<p><a class="btn btn-primary btn-lg btn-learn" href="UserAppointment.php">Make an Appointment</a></p>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(images/img_bg_5.jpg);">
		   		<div class="overlay"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 col-md-pull-2 slider-text">
			   				<div class="slider-text-inner">
			   					<h1>We help you <strong>to find the best doctor around you</strong></h1>
									<p><a class="btn btn-primary btn-lg btn-learn" href="UserAppointment.php">Make an Appointment</a></p>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(images/img_bg_1.jpg);">
		   		<div class="overlay"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 col-md-pull-2 slider-text">
			   				<div class="slider-text-inner">
			   					<h1>Multiple<strong> Service</strong> Facility</h1>
									<p><a class="btn btn-primary btn-lg btn-learn" href="UserAppointment.php">Make an Appointment</a></p>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(images/img_bg_2.jpg);">
		   		<div class="overlay"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 col-md-pull-2 slider-text">
			   				<div class="slider-text-inner">
			   					<h1>Helping to improve <strong>quality stimulate</strong> innovation</h1>
									<p><a class="btn btn-primary btn-lg btn-learn" href="UserAppointment.php">Make an Appointment</a></p>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>		   	
		  	</ul>
	  	</div>
	</aside>


	<div id="colorlib-services">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="services-flex">
						<div class="one-fifth no-border-bottom animate-box">
							<div class="services">
								<span class="icon">
									<i class="flaticon-hospital"></i>
								</span>
								<div class="desc">
									<h3><a href="services.php">Search the required doctor</a></h3>
								</div>
							</div>
						</div>
						<div class="one-fifth no-border-bottom animate-box">
							<div class="services">
								<span class="icon">
									<i class="flaticon-healthy-1"></i>
								</span>
								<div class="desc">
									<h3><a href="#">Home medical appointments</a></h3>
								</div>
							</div>
						</div>
						<div class="one-fifth no-border-bottom animate-box">
							<div class="services">
								<span class="icon">
									<i class="flaticon-stethoscope"></i>
								</span>
								<div class="desc">
									<h3><a href="#">Doctor Information</a></h3>
								</div>
							</div>
						</div>
						<div class="one-forth animate-box">
							<div class="head">
								<h2>Comprehensive services for our patients</h2>
							</div>
						</div>
					</div>
					<div class="services-no-flex">
						<div class="one-fifth animate-box">
							<div class="services">
								<span class="icon">
									<i class="flaticon-blood-donation"></i>
								</span>
								<div class="desc">
									<h3><a href="#">Long term medical care in a hospital</a></h3>
								</div>
							</div>
						</div>

						<div class="services-wrap-flex">
							<div class="one-fifth services-img animate-box" style="background-image: url(images/services-1.jpg);">
								<div class="services">
									<div class="desc">
										<span>Mission</span>
										<h3><a href="#">The correct diagnosis is half the battle</a></h3>
									</div>
								</div>
							</div>
							<div class="one-half">
								<div class="one-full-flex">
									<div class="one-fifth services-img animate-box" style="background-image: url(images/services-2.jpg);">
										<div class="services">
											<div class="desc">
												<span>Vision</span>
												<h3><a href="#">We refund 50% of the cost of medicines</a></h3>
											</div>
										</div>
									</div>
									<div class="one-fifth animate-box">
										<div class="services">
											<span class="icon">
												<i class="flaticon-radiation"></i>
											</span>
											<div class="desc">
												<h3><a href="#">General Doctor Info</a></h3>
											</div>
										</div>
									</div>
								</div>
								<div class="one-full-flex animate-box">
									<div class="services-desc">
									</div>
								</div>
							</div>
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
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

