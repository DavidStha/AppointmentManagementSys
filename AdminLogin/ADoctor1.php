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
		<h3 style="padding-left: 580px;" > ADD DOCTOR </h3>
<?php
	include ('AddDoctor.php');
		$con = mysqli_connect('localhost','root', '','projectphp');
	if ($con->connect_error){
		die("Connection Failed:".$con->connect_error);
	}

	//session_start();
	$Name= $_POST["Name"];
	$Speciality= $_POST["Speciality"];
	$Department= $_POST["Department"];
	$Phone= $_POST["Phone"];
	$User_id= $_POST["User_id"];
	$Password = $_POST["Password"];

	$result= $con->query("SELECT * FROM doctor_info WHERE Name='$Name' AND Phone = '$Phone'");
	// $result2= $con->query("SELECT * FROM doctor_info WHERE ID_Doc='$ID_Doc'");

	$check = mysqli_num_rows($result);	
	// $check2 = mysqli_num_rows($result2);	
	
	if($check>0){
		echo"
			<div class='alertred'> 
			<strong><h4>Doctor already in database. !!!</h4></strong>
			</div>";
	}
	// elseif($check2>0){
	// echo ("<h4>ID is already assigned. !!!</h4>");
	// }
	
	else{
		$sql = "INSERT INTO doctor_info (Name, Speciality,Department,Phone,User_id,Password) VALUES('$Name','$Speciality', '$Department', '$Phone', '$User_id', '$Password')";
		if(mysqli_query($con,$sql)){
			echo"
			<div class='alertgreen' style='position:fixed;width:100%'> 
			<strong><h4>DATA IS ADDED !!!</h4></strong>
			</div>";	
		} 	
	}

	// $result=$con->query("SELECT * FROM admininfo WHERE Admin_Name='$username' and Admin_Password='$pasword' ");
	// $check=mysqli_num_rows($result);
	// if($check>0){
	// 	header("Location:a_dash.php");
	// }
	// else{
	// 	$error="USERNAME or PASSWORD INVALID";
	// 	echo ($error);
	// }

?>
</body>
</html>