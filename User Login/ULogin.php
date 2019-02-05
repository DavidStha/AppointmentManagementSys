<?php
	include ('Homepage.php');
	$con = mysqli_connect('localhost','root', '','projectphp');
	session_start();
	$userid=$_POST['UserID'];
	$password=$_POST['Password'];
	$result=$con->query("SELECT * FROM patientinfo WHERE UserID='$userid' and Password='$password' ");
	$check=mysqli_num_rows($result);
	if($check>0){
		$_SESSION["userid"] = $userid;
		header("Location:index.php");
	}
	else{
		$error="USERNAME or PASSWORD INVALID";
		echo ($error);
	}

?>
