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