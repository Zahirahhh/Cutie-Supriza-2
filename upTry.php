<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel = "icon" type = "png" href = "admin1.png">
	<title>Administrator Profile</title>
			<style>
			body{
				 background-image:url("peach.png");
				 text-align:center;
				 background-repeat: no-repeat;
				 font-family:pencil sharp;
				 font-weight: bold;
				 font-size:40px;
				 background-size: 2100px 1500px;;
				
			}
			form {
				font-family:pencil sharp;
				font-size:30px;
				display: inline-block;
				margin-left: auto;
				margin-right: auto;
				background:rgb(180, 180, 180,0.5);
				width:1000px;
				height:1280px;
				text-align: left;
				padding:5px;
				font-weight: bold;
				}
				#adjust{
					width:150px;
					display:inline-block;
				}
				
				
			input[type=text] {
			  width: 100%;
			  padding: 10px 15px;
			  margin: 15px 0;
			  box-sizing: border-box;
			  border: none;
			  border-bottom: 4px solid black;
			  font-family:BabyDoll;
			  font-size:30px;
			  background:rgb(180, 180, 180,0.5);
			}
			input[type=password] {
			  width: 100%;
			  padding: 10px 15px;
			  margin: 15px 0;
			  box-sizing: border-box;
			  border: none;
			  border-bottom: 4px solid black;
			  font-family:BabyDoll;
			  font-size: 30px;
			  background:rgb(180, 180, 180,0.5);
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
			</style>
</head>
<body>
		<h1><center>UPDATE CUSTOMER ORDER </center></h1>
		<form action = "updateorderprocess.php" method = "get">
			<fieldset>
				<h3>1. Please fill all information correctly.</h3>
			<fieldset>
				<legend style="font-weight:bold;">before update </legend>
				<!--<div id="adjust">Admin Username:</div>
			<input type ="text" name="adminusername"><br>-->
				<div id="adjust">Number of Order:</div>
			<input type = "password" name="numOrder">
				<!--<div id="adjust">Notes:</div>
			<input type = "password" name="notes">-->
			</fieldset>
				<h3>2. Please fill the new information correctly. </h3>
			<fieldset>
				<legend style="font-weight:bold;">latest update </legend>
				<div id="adjust">Admin Username:</div>
			<input type ="text" name="newadminusername"><br>
				<div id="adjust">Number of Order:</div>
			<input type = "password" name="newnumOrder">
				<div id="adjust">Notes:</div>
			<input type = "password" name="notes">
			</fieldset>
			<br>
			<button type="submit" Value = "Submit" >Submit</button>
			<button type="button"><a href ="AdminChoose.php">Back</a></button>
			
			
		</form>
</body>
</html>