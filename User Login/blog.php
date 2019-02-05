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
									<div id="colorlib-logo"><a href="index.html">FIND<span> A DOCTOR</span></a></div>
								</div>
								<div class="col-md-3">
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
									<li class="active"><a href="blog.php">Blog</a></li>
									<li><a href="contact.php">Contact</a></li>
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
			   					<h1>Read Our <strong>Blog</strong></h1>
									
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>

	<div id="colorlib-blog">
		<div class="container">
			<div class="row">
				<div class="col-md-4 animate-box">
					<div class="blog-entry">
						<a href="blog.html" class="blog-img" style="background-image: url(images/blog-1.jpg);">
						</a>
						<div class="desc">
							<h3><a href="blog.html">Vegan Diet Improves Health</a></h3>
							<p>A key factor in the development of these — and other — metabolic conditions is diet...</p>
							<p><a href="VeganDietImprovesHealth.php">Read more <i class="icon-arrow-right3"></i></a></p>
						</div>
					</div>
				</div>
				<div class="col-md-4 animate-box">
					<div class="blog-entry">
						<a href="blog.html" class="blog-img" style="background-image: url(images/blog-2.jpg);">
						</a>
						<div class="desc">
							<p class="date">
								<span><a href="#">Admin</a></span>
								<span>June 8 2017</span>
								<span><a href="#">4 <i class="icon-speech-bubble"></i></a></span>
							</p>
							<h3><a href="blog.html">live better get to know your medical technology</a></h3>
							<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
							<p><a href="#">Read more <i class="icon-arrow-right3"></i></a></p>
						</div>
					</div>
				</div>
				<div class="col-md-4 animate-box">
					<div class="blog-entry">
						<a href="blog.html" class="blog-img" style="background-image: url(images/blog-3.jpg);">
						</a>
						<div class="desc">
							<p class="date">
								<span><a href="#">Admin</a></span>
								<span>June 8 2017</span>
								<span><a href="#">4 <i class="icon-speech-bubble"></i></a></span>
							</p>
							<h3><a href="blog.html">Eating apple is the source of energy</a></h3>
							<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
							<p><a href="#">Read more <i class="icon-arrow-right3"></i></a></p>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4 animate-box">
					<div class="blog-entry">
						<a href="blog.html" class="blog-img" style="background-image: url(images/blog-4.jpg);">
						</a>
						<div class="desc">
							<p class="date">
								<span><a href="#">Admin</a></span>
								<span>June 8 2017</span>
								<span><a href="#">4 <i class="icon-speech-bubble"></i></a></span>
							</p>
							<h3><a href="blog.html">Here's why yoga is best for your health</a></h3>
							<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
							<p><a href="#">Read more <i class="icon-arrow-right3"></i></a></p>
						</div>
					</div>
				</div>
				<div class="col-md-4 animate-box">
					<div class="blog-entry">
						<a href="blog.html" class="blog-img" style="background-image: url(images/blog-5.jpg);">
						</a>
						<div class="desc">
							<p class="date">
								<span><a href="#">Admin</a></span>
								<span>June 8 2017</span>
								<span><a href="#">4 <i class="icon-speech-bubble"></i></a></span>
							</p>
							<h3><a href="blog.html">live better get to know your medical technology</a></h3>
							<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
							<p><a href="#">Read more <i class="icon-arrow-right3"></i></a></p>
						</div>
					</div>
				</div>
				<div class="col-md-4 animate-box">
					<div class="blog-entry">
						<a href="blog.html" class="blog-img" style="background-image: url(images/blog-6.jpg);">
						</a>
						<div class="desc">
							<p class="date">
								<span><a href="#">Admin</a></span>
								<span>June 8 2017</span>
								<span><a href="#">4 <i class="icon-speech-bubble"></i></a></span>
							</p>
							<h3><a href="blog.html">Eating apple is the source of energy</a></h3>
							<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
							<p><a href="#">Read more <i class="icon-arrow-right3"></i></a></p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="block-27">
	               <ul>
	                	<li><a href="#">&lt;</a></li>
	                	<li class="active"><span>1</span></li>
	               	<li><a href="#">2</a></li>
	                	<li><a href="#">3</a></li>
	                	<li><a href="#">4</a></li>
	                  <li><a href="#">5</a></li>
	                  <li><a href="#">&gt;</a></li>
	               </ul>
	            </div>
				</div>
			</div>
		</div>
	</div>

	<footer id="colorlib-footer" role="contentinfo">
		<div class="overlay"></div>
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-3 colorlib-widget">
						<h3>Head Office</h3>
						<ul class="colorlib-footer-links">
							<li>291 South 21th Street, <br> Suite 721 New York NY 10016</li>
							<li><a href="tel://1234567920"><i class="icon-phone"></i> + 1235 2355 98</a></li>
							<li><a href="mailto:info@yoursite.com"><i class="icon-mail"></i> info@yoursite.com</a></li>
							<li><a href="http://luxehotel.com"><i class="icon-location4"></i> yourwebsite.com</a></li>
							<li>Mon-Thu: 9:30 – 21:00</li>
							<li>Fri: 6:00 – 21:00</li>
							<li>Sat: 10:00 – 15:00</li>
						</ul>
					</div>
					<div class="col-md-2 colorlib-widget">
						<h3>Departments</h3>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="#">Neurology</a></li>
								<li><a href="#">Traumotology</a></li>
								<li><a href="#">Gynaecology</a></li>
								<li><a href="#">Nephrology</a></li>
								<li><a href="#">Cardiology</a></li>
								<li><a href="#">Pulmonary</a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-2 colorlib-widget">
						<h3>Useful Links</h3>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="#">Home</a></li>
								<li><a href="#">Departments</a></li>
								<li><a href="#">Services</a></li>
								<li><a href="#">Blog</a></li>
								<li><a href="#">Contact</a></li>
							</ul>
						</p>
					</div>

				
				<div class="col-md-3 colorlib-widget">
					<h3>Make an Appointment</h3>
					<form class="contact-form">
						<div class="form-group">
							<label for="name" class="sr-only">Name</label>
							<input type="name" class="form-control" id="name" placeholder="Name">
						</div>
						<div class="form-group">
							<label for="email" class="sr-only">Email</label>
							<input type="email" class="form-control" id="email" placeholder="Email">
						</div>
						<div class="form-group">
							<label for="message" class="sr-only">Message</label>
							<textarea class="form-control" id="message" rows="3" placeholder="Message"></textarea>
						</div>
						<div class="form-group">
							<input type="submit" id="btn-submit" class="btn btn-primary btn-send-message btn-md" value="Send Message">
						</div>
					</form>
				</div>
			</div>
		</div>
	</footer>
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

