<?php 
	include "db_connect.php";	
						
	$username = $_GET["username"];
	$password = $_GET["password"];
	$newusername = $_GET["newusername"];
	$newpassword = $_GET["newpassword"];
					
	$sql = "UPDATE admin 
			SET Admin_username = '$newusername' , Password = '$newpassword'
			WHERE Admin_username = '$username' and Password = '$password' ";
			
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