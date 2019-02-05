<!DOCTYPE html>
<html>
<head>
	<title> User Registration  </title>
	<link rel = "stylesheet" type="text/css" href ="../css/style.css">
</head>
<body style="background-image: url(images/img_bg_6.jpg);">
	
	<div class = "header">
		<h2>Sign Up</h2>
	</div>

	<form method = "POST" action = "URegister.php">

		<div class = "input-group">
			<label>First Name</label>
			<input type = "text" name = "FirstName" required="">
		</div>		
		
		<div class = "input-group">
			<label> Last Name </label>
			<input type = "text" name = "LastName" required="">
		</div>		

		<div class = "input-grup">
			<label> Gender: <br><br></label>
			Male <input type = "radio" name = "Gender" value = "Male">
			Female <input type = "radio" name = "Gender" value = "Female">
		</div>		

		<div class = "input-group">
			<label> Age </label>
			<input type = "number" name = "Age" required="">
		</div>	

		<div class = "input-group">
			<label> Phone </label>
			<input type = "text" name = "PhoneNo" required="">
		</div>	

		<div class = "input-group">
			<label> E-mail </label>
			<input type = "email" name = "Email" required="">
		</div>	

		<div class = "input-group">
			<label> Blood-Group </label>
			<select name="Blood">
				<option value="A+">A+</option>
				<option value="A-">A-</option>
				<option value="B+">B+</option>
				<option value="B-">B-</option>
				<option value="AB+">AB+</option>
				<option value="AB-">AB-</option>
				<option value="O+">O+</option>
				<option value="O-">O-</option>
			</select>
		</div>	

		<div class = "input-group">
			<label> User Id </label>
			<input type = "text" name = "UserID" required="">
		</div>

		<div class = "input-group">
			<label> Password </label>
			<input type = "password" name = "U_Password" required="">
		</div>

		<div class = "input-group">
			<button type ="submit" name ="Register" class="btn">Register</button>
		</div>
	
	</form>
	

</body>
</html>

