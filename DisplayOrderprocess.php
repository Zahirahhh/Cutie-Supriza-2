<?php 
	include "db_connect.php";	
					
	$username = $_GET["username"];
				
	$sql = "SELECT * from cust_order WHERE username = '$username'";
					
	$sendsql = mysqli_query($connect, $sql);
				
	if($sendsql)
	{
	   if(mysqli_num_rows($sendsql) > 0)
		{
		   echo "<table boder ='1' , border = 'black', style = 'margin-left : 200px; margin-top : 250px; font-size : 25px; background-color:yellow;'>
			<tr>
				<th>Number Order</th>
				<th>Username</th>
				<th>Set</th>
				<th>Wish Card</th>
				<th>Receiver Name</th>
				<th>Receiver Address</th>
				<th>Phone Number</th>
				<th>Date</th>
				<th>Time</th>
				<th>Known</th>
				<th>Total Price</th>
				<th>Staff Username</th>
				<th>Notes</th>
								
			</tr>";
						 
			foreach ($sendsql as $row)
			{
				echo "<tr>";
					echo "<td>" . $row["Number"] . "</td>";
					echo "<td>" . $row["username"] . "</td>";
					echo "<td>" . $row["gift"] . "</td>";
					echo "<td>" . $row["wishCard"] . "</td>";
					echo "<td>" . $row["receiverName"] . "</td>";
					echo "<td>" . $row["receiverAdds"] . "</td>";
					echo "<td>" . $row["phoneNum"] . "</td>";
					echo "<td>" . $row["date"] . "</td>";
					echo "<td>" . $row["time"] . "</td>";
					echo "<td>" . $row["known"] . "</td>";
					echo "<td>" . $row["totalPrice"] . "</td>";
					echo "<td>" . $row["Admin_username"] . "</td>";
					echo "<td>" . $row["Notes"] . "</td>";
				echo "</tr>"; 
			}
			echo "</table><br><br><br>";
			echo "<button style = 'font-size : 20px; margin-left : 1000px;'><a href = 'DisplayOrder.php'>Back</a></button>";
		}
		else 
			echo "<script>alert('That person's doesn't exist!')</script>";
	}
	else 
		echo "Query Failed";
?>