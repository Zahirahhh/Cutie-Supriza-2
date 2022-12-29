<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<?php 
		include "db_connect.php";
		
		$fName = $_GET["username"];
		
		$sql = "DELETE FROM cust_order 
				WHERE username = '$fName'";
		
		$sendsql = mysqli_query($connect, $sql);
	
		if($sendsql)
		{
			if(mysqli_affected_rows($connect) == 0)
			{
				echo "<script>alert('Your delete is not successful!')</script>";
			}
			else 
				echo "<script>alert('Your delete is successful!')</script>";
			
		}
		else 
			echo "Query Failed!";
	?>
</body>
</html>