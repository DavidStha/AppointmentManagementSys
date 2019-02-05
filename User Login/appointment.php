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
	

<br><br><br>

        <div class="col-lg-4">
        </div>
        <div class="col-lg-4" style="border: 2px solid #ABB6B8;">
        	<br><br>
        	<h3> <br>Make a Appointment:<br></h3><br>
		<form method = "POST" action = "uaappointment.php">

		<div class = "input-group">
			<label>Department :<span style="padding-right: 20px;"></span></label>
			<select name= 'Department'>
				  <option value="Anesthesia">Anesthesia</option>
				  <option value="Cardiology">Cardiology</option>
				  <option value="Dental">Dental</option>
				  <option value="Diabetes & Enodcrinology">Diabetes & Enodcrinology</option>
				  <option value="Emergency">Emergency</option>
				  <option value="General Surgery">General Surgery</option>
				  <option value="Gynecology & Obstretrics">Gynecology & Obstretrics</option>
				  <option value="Head & Neck Surgery">Head & Neck Surgery</option>
				  <option value="Nephrology">Nephrology</option>
				  <option value="Neuro Surgery">Neuro Surgery</option>
				  <option value="Neurology">Neurology</option>
				  <option value="Oncology">Oncology</option>
				  <option value="Ophthalmology(EYE)">Ophthalmology(EYE)</option>
				  <option value="Orthopaedic">Orthopaedic</option>
				  <option value="Paeditric Oncology">Paeditric Oncology</option>
				  <option value="Pathology">Pathology</option>
				  <option value="Paeditrics">Paeditrics</option>
				  <option value="Physiotherapy">Physiotherapy</option>
				  <option value="Plastic Surgery">Plastic Surgery</option>
				  <option value="Psychiatry">Psychiatry</option>
				  <option value="Pulmonology & Sleep Medicine">Pulmonology & Sleep Medicine</option>
				  <option value="Radiology & Imaging">Radiology & Imaging</option>
				  <option value="Spine Surgery">Spine Surgery</option>
				  <option value="Urology">Urology</option>


			</select>
		</div>			
<br>
		<div class = "input-group">
			<label> Date :<span style="padding-right: 80px;"></span></</label>
			<input type = "date" name = "Date1"  size="20">
		</div>		

		<br>
		<div class = "input-group">
			<button type ="submit" name ="Appoint" class="btn">Appoint</button>
		</div>
	
	</form>
	<br>
</div>
<div class="col-lg-4">
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

