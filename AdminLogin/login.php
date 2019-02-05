<?php
	include ('AdminLogin.php');
	$con = mysqli_connect('localhost','root', '','projectphp');
	session_start();
	$username=$_POST['Username'];
	$password=$_POST['Password'];
	$result=$con->query("SELECT * FROM admininfo WHERE Admin_Name='$username' and Admin_Password='$password' ");
	$check=mysqli_num_rows($result);
	if($check>0){
		header("Location:a_dash.php");
	}
	else{
		$error="USERNAME or PASSWORD INVALID";
		echo ($error);
	}

?>
