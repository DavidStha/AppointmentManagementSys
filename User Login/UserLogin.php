<!DOCTYPE html>
<html>
<head>
	<title> User Login  </title>
	<link rel = "stylesheet" type="text/css" href ="../css/style.css">
</head>
<body style="background-image: url(images/img_bg_6.jpg);">
	<div class = "header">
		<h2>User Login</h2>
	</div>

	<form method = "post" action = "Ulogin.php">

		<div class = "input-group">
			<label>UserID</label>
			<input type = "text" name = "UserID">
		</div>		
		
		<div class = "input-group">
			<label> Password </label>
			<input type = "password" name = "Password">
		</div>		

		<div class = "input-group">
			<button type ="submit" name ="Login" class="btn">Login</button>
		</div>
		
	</form>
	

</body>
</html>

