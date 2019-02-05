<?php
	include ('contact.php');
		$con = mysqli_connect('localhost','root', '','projectphp');
	if ($con->connect_error){
		die("Connection Failed:".$con->connect_error);
	}

	session_start();
	$Name= $_POST["Name"];
	$Message= $_POST["Message"];
	$userid=$_SESSION["userid"];

	
		$sql = "INSERT INTO feedbackinfo (UserID, Name,Feedback) VALUES('$userid','$Name', '$Message')";
		if(mysqli_query($con,$sql)){
			echo ("Message sent.");
		} 	

?>

