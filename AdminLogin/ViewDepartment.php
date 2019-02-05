<html>
<head>
		<link rel = "stylesheet" type="text/css" href ="../css/View.css">
			<link rel = "stylesheet" type="text/css" href ="../css/ANavMenu.css">

	</head>
<body style="background-image: url(images/img_bg_2.jpg);">
	<div class="navbar">
		  <a href="a_dash.php" style="border: 1px dashed white; padding: 15px 15px 15px 15px;">Dashboard</a>
		 </div>
		 <br><br><br>
		<h3 style="padding-left: 580px;" > DEPARTMENT INFO </h3>
		<div class = 'content'>

<?php 

	$con = mysqli_connect('localhost','root', '','projectphp');

    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

    $sql = "SELECT * FROM departmentinfo" ;
    $result = mysqli_query($con,$sql);

    echo "<table width='100%' id='view' >";
    echo "<tr> 
	    	<th>ID_Dep</th> 
	    	<th>Department</th> 
	    </tr>";
    while($row = mysqli_fetch_array($result)){
    	//if($row ==1) continue;
    	//else{	
		   echo 	"<tr>" .
		      		"<td>" . $row['IDDep'] . "</td>" .
		      		"<td>" . $row['Department'] .  "</td>" .
	      		"</tr>";
	      	
      	//}
    }
    echo "<br />";

    mysqli_close($con);
    echo"</table>";
?>
</div>
</body>
</html>