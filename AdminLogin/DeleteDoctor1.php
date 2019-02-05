<html>
<head>
	<link rel = "stylesheet" type="text/css" href ="../css/Alert.css">
	<link rel = "stylesheet" type="text/css" href ="../css/view.css">
	<link rel = "stylesheet" type="text/css" href ="../css/ANavMenu.css">
</head>
<body style="background-image: url(images/img_bg_2.jpg);">

		  <a href="a_dash.php" style="border: 1px dashed white; padding: 15px 15px 15px 15px;">Dashboard</a>
		 </div>
		 <br><br><br>
		<h3 style="padding-left: 580px;" > DELETE DOCTOR  </h3>
		

<?php
	$con = mysqli_connect('localhost','root', '','projectphp');
	$id = $_GET['op'];
	$delete = "DELETE FROM doctor_info WHERE User_id ='$id'";
	mysqli_query($con,$delete);
	echo"
			<div class='alertgreen'> 
			<strong><h4>DOCTOR INFO DELETED !!!</h4></strong>
			</div>";		
?>
</body>
</html>

