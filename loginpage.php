<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel = "icon" type = "png" href = "giftbox.png">
	<title>Login</title>
	<style>

	body {
	  font-family:pencil sharp;
	  text-align:center;
	  font-size:40px;
	  padding-top:5%;
	  background-image:url("https://i.pinimg.com/originals/eb/2a/8f/eb2a8f4ddfb50c23712a3cd0d5cc2a3a.gif");
	  color:white;
	}
	form { 
		display: inline-block;
		margin-left: auto;
		margin-right: auto;
		background: rgba(0, 0, 0, 0.5);
		border-radius: 25px;
		width:500px;
		height:70w0px;
	}
	.button {
		border: none;
		color: white;
		padding: 15px 32px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 25px;
		margin: 4px 2px;
		cursor: pointer;
		font-family:pencil sharp;
		background-color: #4B6B3C;
	}
	</style>
</head>
<body>
	
	<form action="loginprocess.php" method="post">
	<h1>Login</h1>
		username:<br>
	  <input type="text" name="username" class="button"><br><br>
		password:<br>
	  <input type="password" name="password" class="button"><br>
		<br><br>
	  <input type="submit" name = "login-user" class="button" value="Login" onclick = "loginPage.php"></button>
	  <br><br>
	  <a href="signupPage.php" style = "font-size : 20px;">Click here if you don't have account.</a>
	</form>

</body>
</html>