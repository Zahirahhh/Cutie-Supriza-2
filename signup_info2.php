<!DOCTYPE html>
<html>
<head><title>Exersice Chapter 12</title>
</head>
<body>
	<h1>Submitted Surveys</h1>
	<?php 
		include "db_connect.php";
		
		$sql = "SELECT * FROM signup";
		
		$sendsql = mysqli_query($connect, $sql);
		
		if($sendsql)
		{
			echo "<table boder ='1' , border = 'black'>
				  <tr>
					<th>Student ID</th>
					<th>Full Name</th>
					<th>Prefered References</th>
					<th>Prefered Local Server</th>
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
			echo "</table>";
		}
		else 
			echo "Query Failed";
	
	?>
</body>
</html>