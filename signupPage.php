<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel = "icon" type = "png" href = "giftbox.png">
	<title>Sign Up</title>
	<style>

	body {
	  font-family:pencil sharp;
	  text-align:center;
	  font-size:40px;
	  background-image:url("https://i.pinimg.com/originals/eb/2a/8f/eb2a8f4ddfb50c23712a3cd0d5cc2a3a.gif");
	  background-repeat: no-repeat;
	  background-size: 2100px; 1300px;;
	  color:white;
	}
	form { 
		display: inline-block;
		background: rgba(0, 0, 0, 0.5);
		border-radius: 25px;
		width:830px;
		height:820px;
		text-align: left;
		padding:20px;
		margin-top : 60px;
		padding-left : 50px;
		
	}
	#adjust{
		width:250px;
		display:inline-block;
	}
	.button {
		border: none;
		color: white;
		padding: 15px 32px;
		text-align: left;
		text-decoration: none;
		display: inline-block;
		font-size: 25px;
		margin: 4px 2px;
		cursor: pointer;
		font-family:pencil sharp;
		background-color: #E6DEB9;
		
		
	}
	</style>
</head>
<body>
	<form action="signup_info.php" method="post">
		<h1><center>Easy Sign Up!</center></h1>
			<div id="adjust">name:</div>
		  <input type="text" name="name" class="button"><br><br>
			<div id="adjust">phone no:</div>
		  <input type="text" name="phoneNo" class="button"><br><br>
			<div id="adjust">username:</div>
		  <input type="text" name="username" class="button"><br><br>
			<div id="adjust">password:</div>
		  <input type="password" name="password" class="button"><br>
			<br>
		  <input type="submit" class="button" value="Sign Up" style="color:black; margin-left : 350px;" ></button>
		  <br><br>
			<a href="loginpage.php"style="font-size:25px; padding-left:250px;">Click here if you have an account.<a>
	</form>
	<br><br><br>
	<h6><center>Copyright &copy; CutieSupriza.com</center></h6>
</body>
</html>