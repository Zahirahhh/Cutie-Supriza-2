<?php 
	
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$dbname ="project";
	
	$connect = mysqli_connect($hostname, $username, $password, $dbname)
			   OR DIE("Connection Failed");
?>