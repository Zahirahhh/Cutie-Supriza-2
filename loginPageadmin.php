<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel = "icon" type = "png" href = "giftbox.png">
	<title>Admin Log In</title>
	<style>

	body {
	  font-family:pencil sharp;
	  text-align:center;
	  font-size:30px;
	  background-image:url("tropical.png");
	  background-repeat: no-repeat;
	  background-size: 3500px 1100px;
	  color:white;
	}
	form { 
		display: inline-block;
		margin-left: auto;
		margin-right: auto;
		background: rgba(0, 0, 0, 0.5);
		border-radius: 25px;
		width:500px;
		height:780px;
		text-align: left;
		padding:20px;
		margin-top : 100px;
	}
	#adjust{
		width:150px;
		display:inline-block;
		margin-left : 320px;
	}
	.button {
		border: none;
		color: white;
		padding: 15px 32px;
		margin-left : 260px;
		text-align: left;
		text-decoration: none;
		display: inline-block;
		font-size: 25px;
		cursor: pointer;
		font-family:pencil sharp;
		background-color: #E6DEB9;
	}
	</style>
</head>
<body>
	<form action="loginProcessAdmin.php" method="post" style = "width : 700px;">
		<h1><center>Administrator <br>Log In!</center></h1><br><br>
			<div id="adjust">Username :</div>
		  <input type="text" name="username" class="button"><br><br><br>
			<div id="adjust">Password:</div>
		  <input type="password" name="password" class="button"><br><br><br>
			<br>
		  <input type="submit" name = "submit" class="button" value="Log In" style="color:black; margin-left: 300px;" ></button><br><br>
		  <a href = "welcomePage.php" style = "font-size : 20px; padding-left : 230px;">CLICK HERE TO BACK TO THE WELCOME PAGE</a>
		  <br>
	</form>
	<br><br><br>
	<h6><center>Copyright &copy; CutieSupriza.com</center></h6>
</body>
</html>