<!DOCTYPE html>
<html>
<head>
	<title> User Feedback  </title>
	<link rel = "stylesheet" type="text/css" href ="../css/style.css">
</head>
<body>
	<div class = "header">
		<h2>FEEDBACK TAB</h2>
	</div>



	<form method = "POST" action = "UFeedback.php">

		<div class = "input-group">
			<label>Name</label>
			<input type = 'text' name = 'Name'>
		</div>			

		<div class = "input-group">
			<label>Message</label>
			<input type = "text" name = "Message"  size="20">
		</div>		

		
		<div class = "input-group">
			<button type ="submit" name ="Submit" class="btn">Submit</button>
		</div>
	
	</form>
</body>
</html>

