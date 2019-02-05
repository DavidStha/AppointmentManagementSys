<!DOCTYPE html>
<html>
<head>
	<title> Adding Doctor  </title>
	<link rel = "stylesheet" type="text/css" href ="../css/style.css">
	<link rel = "stylesheet" type="text/css" href ="../css/view.css">
	<link rel = "stylesheet" type="text/css" href ="../css/ANavMenu.css">
</head>
<body style="background-image: url(images/img_bg_2.jpg);">

	<div class="navbar">
		  <a href="a_dash.php" style="border: 1px dashed white; padding: 15px 15px 15px 15px;">Dashboard</a>
		 </div>
		 <br><br><br>
		 <br>
		<h3 style="padding-left: 580px;" > ADD DOCTOR </h3>
		<br>

	<form method = "POST" action = "ADoctor1.php">

		<div class = "input-group">
			<label>Name</label>
			<input type = "text" name = "Name">
		</div>		
		
		<div class = "input-group">
			<label>Speciality</label>
			<input type = "text" name = "Speciality">
		</div>		

		<div class = "input-group">
			<label>Department<br></label>
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
			<label>Phone</label>
			<input type = "number" name = "Phone">
		</div>	

		<div class = "input-group">
			<label>User_id</label>
			<input type = "text" name = "User_id">
		</div>	

		<div class = "input-group">
			<label>Password</label>
			<input type = "text" name = "Password">
		</div>	

		<div class = "input-group">
			<button type ="submit" name ="Register" class="btn">Register</button>
		</div>
	
	</form>
	

</body>
</html>

