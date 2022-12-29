<?php
		include "db_connect.php";
		
		$username = $_POST["username"];
		$set = $_POST["set"];
		$wishCard = $_POST["wishcard"];
		$recName = $_POST["receiverName"];
		$recAdds = $_POST["receiverAdds"];
		$phoneNo = $_POST["phoneNo"];
		$date = $_POST["date"];
		$time = $_POST["time"];
		$known = $_POST["known"];
		//$totalPrice = $_POST["total"];
		
		$sql = "INSERT INTO pesanan (username,gift,wishCard,receiverName,receiverAdds,phoneNum,date,time,known)
				VALUES ('$username','$set','$wishCard','$recName','$recAdds','$phoneNo','$date','$time','$known')";
				
		$sendsql = mysqli_query($connect,$sql);
		
		if($sendsql)
		{
			echo "ORDER SUCCESS!!";
		}
		else
			echo "failed";
?>
<?php
					include "db_connect.php";
					
					$username = $_POST["username"];
					$sql = "SELECT * FROM pesanan WHERE username = '$username' ";
					
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
								<th>Total Price</th>
							  </tr>";
						foreach ($sendsql as $row)
						{
							echo "<tr>";
								echo "<td>" . $row["username"] . "</td>";
								echo "<td>" . $row["receiverName"] . "</td>";
								echo "<td>" . $row["receiverAdds"] . "</td>";
								echo "<td>" . $row["date"] . "</td>";
								echo "<td>" . $row["time"] . "</td>";
								echo "<td>" . $row["totalPrice"] . "</td>";
							echo "</tr>"; 
						}
						echo "</table>";
					}
					else 
						echo "Query Failed";
				?>