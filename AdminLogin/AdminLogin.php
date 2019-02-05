<!DOCTYPE html>
<html>
<head>
	<title> Admin Login  </title>
	<link rel = "stylesheet" type="text/css" href ="../css/style.css">
</head>
<body>
	<div class = "header">
		<h2>Admin Login</h2>
	</div>

	<form method = "post" action = "login.php">

		<div class = "input-group">
			<label> Username </label>
			<input type = "text" name = "Username">
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

