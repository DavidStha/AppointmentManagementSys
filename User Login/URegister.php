<?php
	include ('UserRegistration.php');
		$con = mysqli_connect('localhost','root', '','projectphp');
	if ($con->connect_error){
		die("Connection Failed:".$con->connect_error);
	}

	session_start();
	$Firstname= $_POST["FirstName"];
	$LastName= $_POST["LastName"];
	$Gender= $_POST["Gender"];
	$Age= $_POST["Age"];
	$Contact= $_POST["PhoneNo"];
	$Email = $_POST["Email"];
	$BloodGroup= $_POST["Blood"];
	$UserID= $_POST["UserID"];
	$U_Password= $_POST["U_Password"];

	$result= $con->query("SELECT * FROM patientinfo WHERE USERID='$UserID'");
	$check = mysqli_num_rows($result);	
	if($check>0){
		echo ("<h4>UserName already exist !!!</h4>");
	}
	else{
		$sql = "INSERT INTO patientinfo (FirstName, LastName,Gender,Age,Contact,Email,BloodGroup,UserID	,Password) VALUES('$Firstname','$LastName', '$Gender', '$Age', '$Contact', '$Email', '$BloodGroup' ,'$UserID', '$U_Password')";
		if(mysqli_query($con,$sql)){
			echo ("Data has been added.");
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
