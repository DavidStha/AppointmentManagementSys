<html>
<head>
	<link rel = "stylesheet" type="text/css" href ="../css/Alert.css">
	<link rel = "stylesheet" type="text/css" href ="../css/view.css">
	<link rel = "stylesheet" type="text/css" href ="../css/ANavMenu.css">
	</head>
<body>
	<div class="navbar">
		  <a href="a_dash.php" style="border: 1px dashed white; padding: 15px 15px 15px 15px;">Dashboard</a>
		 </div>
		 <br><br><br>
		<h3 style="padding-left: 580px;" > FEEDBACK DELETED </h3>
<?php
	$con = mysqli_connect('localhost','root', '','projectphp');
	$id = $_GET['op'];
	$delete = "DELETE FROM feedbackinfo WHERE UserId ='$id'";
	mysqli_query($con,$delete);
	echo"
			<div class='alertgreen'> 
			<strong><h4>FEEDBACK MESSAGE INFO DELETED !!!</h4></strong>
			</div>";		
?>
</body>
</html>