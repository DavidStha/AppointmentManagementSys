<html>
<head>
	<link rel = "stylesheet" type="text/css" href ="../css/Alert.css">
	<link rel = "stylesheet" type="text/css" href ="../css/view.css">
	<link rel = "stylesheet" type="text/css" href ="../css/ANavMenu.css">
</head>
<?php
	$con = mysqli_connect('localhost','root', '','projectphp');
	session_start();
	$userid=$_SESSION["userid"];
	$department = $_POST['Department'];
	$date1 = $_POST['Date1'];

	$result = $con->query("SELECT * from doctor_info WHERE Department = '$department'");
	echo "<table border = '1' width = '30%'>";
	// $check=mysqli_num_rows($result);
	// echo $check;
	while ($rows= $result->fetch_assoc()) {
		$tempdoctor = $rows['ID_Doc'];
		$tempdepartment = $rows['Department'];
		$tempdname = $rows['Name'];
		$result2 = $con->query("SELECT * FROM appointmentinfo WHERE ID_Doc = '$tempdoctor' AND Date1 = '$date1'");
		$check = mysqli_num_rows($result2);
		if($check<=5)
		{ 
			echo"<tr>" .
				"<td>" . $rows['Name'] . "</td>" . 
		      	"<td>" . $rows['Department'] . "</td>" .
		      	"<td>" . $rows['Speciality'] . "</td>". 
		      	"<td>" ."<a href='UAppointment1.php?did=$tempdoctor&dn=$tempdname&dd=$tempdepartment&date=$date1'>" ."Appoint"."</a>" ."</td>";
		}
		else{
			echo "APPOITIMENT PACKED";
		}
	}


?>
</html>