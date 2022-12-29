<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<?php 
		include "db_connect.php";	
						
		$fName = $_GET["nama"];
		$phoneNum = $_GET["phoneNo"];
		$username = $_GET["username"];
		$password = $_GET["password"];
		$newfName = $_GET["newname"];
		$newphoneNum = $_GET["newphones"];
		$newusername = $_GET["newuserName"];
		$newpassword = $_GET["newpsw"];
					
		$sql = "UPDATE signup 
				SET Name = '$newfName', phoneNum = '$newphoneNum' , Username = '$newusername' , Password = '$newpassword'
				WHERE Name = '$fName' ";
						
		$sendsql = mysqli_query($connect, $sql);
					
		if($sendsql)
		{
			if(mysqli_affected_rows($connect) == 0)
				echo "<script>alert('Your update is not successful!')</script>";
			else 
				echo "<script>alert('Your update is successful!')</script>";
		}
		else 
			echo "Query Failed!";
	?>
</body>
</html>