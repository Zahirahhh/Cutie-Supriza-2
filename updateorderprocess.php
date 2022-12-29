<?php 
	include "db_connect.php";	
					
	$numOrder = $_GET["numOrder"];
	$newadminusername = $_GET["newadminusername"];
	$newnumorder = $_GET["newnumOrder"];
	$newnotes = $_GET["notes"];
					
	$sql = "UPDATE cust_order 
			SET Number = '$newnumorder' , Admin_username = '$newadminusername' , Notes = '$newnotes'
			WHERE Number = '$numOrder' ";
						
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