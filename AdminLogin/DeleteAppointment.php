<html>
<head>
	<title>DELETE APPOINTMENT INFO </title>
	<link rel = "stylesheet" type="text/css" href ="../css/Search.css">
	<link rel = "stylesheet" type="text/css" href ="../css/view.css">
	<link rel = "stylesheet" type="text/css" href ="../css/ANavMenu.css">
<style>

</style>
</head>

<body style="background-image: url(images/img_bg_5.jpg);">
	<div class="navbar">
		  <a href="a_dash.php" style="border: 1px dashed white; padding: 15px 15px 15px 15px;">Dashboard</a>
		 </div>
		 <br><br><br>
		<h3 style="padding-left: 580px;" > DELETE APPOINTMENT </h3>
		<div class = 'content'>
	<br>
<form action="DeleteAppointment.php" method="post">
<div class="box">
  <div class="container-1" ;>
      <span class="icon"><i class="fa fa-search"></i></span>
      <input type="search" id="search" placeholder="Search..." name = "UserID"/>
      <input type="submit" name="submit" value="search" style = '  background-color: #4CAF50;
		  border: none;
		  color: white;
		  padding: 15px 32px;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		  font-size: 16px;
		  margin: 4px 2px;
		  cursor: pointer;'>
  </div>
</div>
</form>
<br>
</br>
</br>

<?php
	if(isset($_POST['submit'])=="search"){
	$search_value=$_POST['UserID'];

	$con = mysqli_connect('localhost','root', '','projectphp');
	$result = $con->query("SELECT * FROM appointmentinfo WHERE UserID LIKE '$search_value'" );
	$check = mysqli_num_rows($result);
	
	echo "<table border = '1' width = '100%'>";

	if($check>0){
		while($rows=$result->fetch_assoc()){
			$id=$rows['UserID'];
			echo"<tr>" .
				"<td>" . $rows['UserID'] . "</td>" . 
		      	"<td>" . $rows['DepName'] . "</td>" .
		      	"<td>" . $rows['Doc_Name'] . "</td>".
		      	"<td>" . $rows['Date1'] . "</td>". 
		      	"<td>" ."<a href='DeleteAppointment1.php?op=$id'>" ."delete"."</a>" ."</td></tr>";				
			
		}
	}
	else{
		echo"
			<div class='alertred'> 
			<strong><h4>FILE NOT FOUND !!!</h4></strong>
			</div>";	
	}
}
?>

</body>
</html>