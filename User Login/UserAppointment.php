<!DOCTYPE html>
<html>
<head>
	<title> User Appointment  </title>
	<link rel = "stylesheet" type="text/css" href ="../css/style.css">
	<link rel = "stylesheet" type="text/css" href ="../css/Alert.css">
	<link rel = "stylesheet" type="text/css" href ="../css/view.css">
	<link rel = "stylesheet" type="text/css" href ="../css/ANavMenu.css">







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

</head>
<body>
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
	<div class = "header">
		<h2>APPOINMENT SEARCH</h2>
	</div>



	<form method = "POST" action = "uaappointment.php">

		<div class = "input-group">
			<label>Department</label>
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

		<div class = "input-group">
			<label> Date</label>
			<input type = "date" name = "Date1"  size="20">
		</div>		

		
		<div class = "input-group">
			<button type ="submit" name ="Appoint" class="btn">Appoint</button>
		</div>
	
	</form>




	

</body>
</html>

