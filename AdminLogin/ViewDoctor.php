<html>
<head>
	<link rel = "stylesheet" type="text/css" href ="../css/Search.css">
	<link rel = "stylesheet" type="text/css" href ="../css/view.css">
	<link rel = "stylesheet" type="text/css" href ="../css/ANavMenu.css">

	</head>
	<body style="background-image: url(images/img_bg_2.jpg);">
		<div class="navbar">
		<a href="a_dash.php" style="border: 1px dashed white; padding: 15px 15px 15px 15px;">Dashboard</a>
		</div>
		<br><br><br>
		<h3 style="padding-left: 580px;" > PATIENT INFO </h3>

		<form action="ViewDoctor1.php" method="post">
		<div class="box">
			<div class="container-1" ;>
		      <span class="icon"><i class="fa fa-search"></i></span>
		      <input type="search" id="search" placeholder="Search..." name = "doctor"/>
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

		<table>
		<?php 
		$con = mysqli_connect('localhost','root', '','projectphp');
	    $sql = "SELECT * FROM doctor_info" ;
	    $result = mysqli_query($con,$sql);

	    echo "<tr>"
		    	."<th>" ."UserID" ."</th>" 
		    	."<th>" ."Id" ."</th>" 
		    	."<th>"."Name"."</th>" 
		    	."<th>"."Speciality"."</th>" 
		    	."<th>"."Department"."</th>" 
		    	."<th>"."Phone"."</th>" 
		    	 
		    ."</tr>";
	    while($row = mysqli_fetch_array($result)){
	    	// if($row ==1) continue;
	    	// else{	
				    echo 	"<tr>" .
				    		"<td>" . $row['User_id'] . "</td>" . 
				      		"<td>" . $row['ID_Doc'] . "</td>" .
				      		"<td>" . $row['Name'] . "</td>" .
				      		"<td>" . $row['Speciality'] .  "</td>" .
				      		"<td>" . $row['Department'] . "</td>" .
				      		"<td>" . $row['Phone'] , "</td>" . 
				      		
			      		"</tr>";
			      
		      	// }
		      }
		      	echo "<br />";
		    mysqli_close($con);
		?>
		</table>

		</body>
