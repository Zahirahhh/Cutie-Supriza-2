<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel = "icon" type = "png" href = "giftbox.png">
	<title>Order Display</title>
	
<style>
		body{
			font-size : 25px;
		}
		table1{
			margin-left : 200px;
		}
		button {
				border: none;
				color: black;
				padding: 15px 32px;
				text-align: left;
				text-decoration: none;
				display: inline-block;
				font-size: 30px;
				margin: 4px 2px;
				cursor: pointer;
				font-weight:bold;
				font-family:pencil sharp;
				background-color: #E6DEB9;
				
			}
		.button{
			font-size:23px;
			border: white;
			background-color: gray;
			text-decoration: none;
			padding:10px 450px;
			color : white;
			text-align : center;
			margin-top: 20px;
		
			}	
		.button:hover{
			background-color:#94b8b8;
	
		}
		
		#search{
			padding : 8px 30px;
			background-color : #94b8b8;
			margin-top : 200px;
			font-size : 25px;
			color : white;

		}
</style>
</head>
				<body background="background.png";>
				<button type="button"><a href ="AdminChoose.php">Back</a></button>
				
				<form action = "displayOrderprocess.php" method = "get">
					<input type="text" name="username" class="button" placeholder = "Enter Customer Username" style = "margin-left : 250px;">
					<input type="submit"  id = "search" value="Search" style="color:black"></button><br><br><br><br>
				</form>
				<?php
					include "db_connect.php";
					
			
					$sql = "SELECT * FROM cust_order";
					
					$sendsql = mysqli_query($connect, $sql);
					
					if($sendsql)
					{
						echo "<table boder ='1' , border = 'black', style = 'margin-left : 160px; margin-top : 20px;'>
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
						echo "</table>";
					}
					else 
						echo "Query Failed";
				?>
</body>
</html>