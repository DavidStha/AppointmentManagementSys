<html>
<head>
	<title>DELETE DOCTOR INFO </title>
	<link rel = "stylesheet" type="text/css" href ="../css/Search.css">
	<link rel = "stylesheet" type="text/css" href ="../css/view.css">
	<link rel = "stylesheet" type="text/css" href ="../css/ANavMenu.css">

</head>

<body style="background-image: url(images/img_bg_2.jpg);">


<div class="navbar">
		  <a href="a_dash.php" style="border: 1px dashed white; padding: 15px 15px 15px 15px;">Dashboard</a>
		 </div>
		 <br><br><br>
		<h3 style="padding-left: 580px;" > DELETE DOCTOR </h3>
		<div class = 'content'>


<form action="DeleteDoctor.php" method="post">
<div class="box">
  <div class="container-1" ;>
      <span class="icon"><i class="fa fa-search"></i></span>
      <input type="search" id="search" placeholder="Search..." name = "Doctor"/>
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
<div style="padding-left: 140px;">
<?php
	if(isset($_POST['submit'])=="search"){
	$search_value=$_POST['Doctor'];

	$con = mysqli_connect('localhost','root', '','projectphp');
	$result = $con->query("SELECT * FROM doctor_info WHERE Name LIKE '%$search_value%'");
	$check = mysqli_num_rows($result);
	
	echo "<table border = '1' width = '80%'>";

	if($check>0){
		while($rows=$result->fetch_assoc()){
			$id=$rows['User_id'];
			echo"<tr>" .
				"<td>" . $rows['ID_Doc'] . "</td>" . 
		      	"<td>" . $rows['Name'] . "</td>" .
		      	"<td>" . $rows['Department'] . "</td>". 
		      	"<td>" ."<a href='DeleteDoctor1.php?op=$id'>" ."delete"."</a>" ."</td>";				
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
</div>
</body>