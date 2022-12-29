<?php 
					include "db_connect.php";	
					
					$username = $_GET["username"];
				
					$sql = "SELECT * from signup WHERE username = '$username'";
					
					$sendsql = mysqli_query($connect, $sql);
				
					if($sendsql)
					{
						if(mysqli_num_rows($sendsql) > 0)
						{
							echo "<script>alert('Your searching is successful!')</script>";
							echo "<br><br>";
							echo "<table boder ='1' , border = 'black', style='font-size : 30px; margin : auto;'>
							  <tr>
								<th>Name</th>
								<th>Phone Number</th>
								<th>Username</th>
								<th>Password</th>
							  </tr>";
							foreach ($sendsql as $row)
							{
								echo "<tr>";
									echo "<td>" . $row["Name"] . "</td>";
									echo "<td>" . $row["PhoneNum"] . "</td>";
									echo "<td>" . $row["Username"] . "</td>";
									echo "<td>" . $row["Password"] . "</td>";
								echo "</tr>"; 
							}
		
							echo "</table><br><br>";
							echo "<button style = 'font-size : 20px; margin-left : 1000px;'><a href = 'profile.php'>Back</a></button>";
						}
						else 
							echo "<script>alert('That person's doesn't exist!')</script>";
					}
					else 
						echo "Query Failed!";
			  ?>