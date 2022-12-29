<?php
	include "db_connect.php";
	
	$fName = $_POST["name"];
	$phoneNum = $_POST["phoneNo"];
	$username = $_POST["username"];
	$password = $_POST["password"];
	
	$sql = "INSERT INTO signup ( Name , PhoneNum , Username , Password)
	        VALUES ( '$fName' , '$phoneNum', '$username', '$password')"; 
		
	$sendsql = mysqli_query($connect, $sql);
	
	
	
	if($sendsql)
	{
		echo "<script>alert('Thank You for sign up!')</script>";
		header("location:../Cutie Supriza 3/loginPage.php");
	}
	else 
		echo "Query Failed!";
?>


	<!--<?php 
		include "db_connect.php";
		
		$sql = "SELECT * FROM signup";
		
		$sendsql = mysqli_query($connect, $sql);
		
		if($sendsql)
		{
			echo "<table boder ='1' , border = 'black'>
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
			echo "</table>";
		}
		else 
			echo "Query Failed";
	
	?>-->