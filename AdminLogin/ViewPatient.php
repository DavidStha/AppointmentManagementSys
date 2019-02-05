<html>
<head>
	<link rel = "stylesheet" type="text/css" href ="../css/view.css">
	<link rel = "stylesheet" type="text/css" href ="../css/ANavMenu.css">
	
</head>

<body style="background-image: url(images/img_bg_2.jpg);">

		<div class="navbar">
		  <a href="a_dash.php" style="border: 1px dashed white; padding: 15px 15px 15px 15px;">Dashboard</a>
		 </div>
		 <br><br><br>
		<h3 style="padding-left: 580px;" > PATIENT INFO </h3>
		<div class = 'content'>
<?php 

	$con = mysqli_connect('localhost','root', '','projectphp');

    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

    $sql = "SELECT * FROM patientinfo" ;
    $result = mysqli_query($con,$sql);

    echo "<table id='view' width = '100%'>";
    echo "<tr>
	    	<th>UserID</th> 
	    	<th>FirstName</th> 
	    	<th>LastName</th> 
	    	<th>Gender</th> 
	    	<th>Age</th> 
	    	<th>Contact</th> 
	    	<th>Email</th> 
	    	<th>BloodGroup</th>  
	    </tr>";
    while($row = mysqli_fetch_array($result)){
    	// if($row ==1) continue;
    	// else{	
		    echo 	"<tr>" .
		    		"<td>" . $row['UserID'] . "</td>" . 
		      		"<td>" . $row['FirstName'] . "</td>" .
		      		"<td>" . $row['LastName'] . "</td>" .
		      		"<td>" . $row['Gender'] .  "</td>" .
		      		"<td>" . $row['Age'] . "</td>" .
		      		"<td>" . $row['Contact'] , "</td>" . 
		      		"<td>" . $row['Email'] . "</td> " .
		      		"<td>" . $row['BloodGroup'] . "</td>" .
	      		"</tr>";
      	// }
    }
   	echo "<br />";

    mysqli_close($con);
?>
</body>