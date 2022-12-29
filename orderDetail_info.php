<?php
					include "db_connect.php";
					
					$sql = "SELECT * FROM pesanan";
					
					$sendsql = mysqli_query($connect, $sql);
					
					if($sendsql)
					{
						echo "<table boder ='1' , border = 'black'>
							  <tr>
								<th>Username</th>
								<th>Receiver Name</th>
								<th>Receiver Address</th>
								<th>Date</th>
								<th>Time</th>
							  </tr>";
						foreach ($sendsql as $row)
						{
							echo "<tr>";
								echo "<td>" . $row["username"] . "</td>";
								echo "<td>" . $row["receiverName"] . "</td>";
								echo "<td>" . $row["receiverAdds"] . "</td>";
								echo "<td>" . $row["date"] . "</td>";
								echo "<td>" . $row["time"] . "</td>";
							echo "</tr>"; 
						}
						echo "</table>";
					}
					else 
						echo "Query Failed";
				?>