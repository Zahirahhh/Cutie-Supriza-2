<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel = "icon" type = "png" href = "admin1.png">
	<title>Decision</title>
<style>
		body {
			  
			  background-image:url("green.png");
			  background-repeat: no-repeat;
			  background-size: 2100px 1100px;
		}
		.container{
					position: relative;
					text-align: center;
					color: white;
				}
			  
		button {
		  border-radius: 4px;
		  background-color:#9A8B4F;
		  border: none;
		  color: ##000000;
		  text-align: center;
		  font-size: 70px;
		  padding: 20px;
		  width: 1200px;
		  transition: all 0.5s;
		  cursor: pointer;
		  margin: 50px;
		  font-family:pencil sharp;
		}

		button span {
		  cursor: pointer;
		  display: inline-block;
		  position: relative;
		  transition: 0.5s;
		  font-weight:bold;
		}

		button span:after {
		  content: '\00bb';
		  position: absolute;
		  opacity: 0;
		  top: 0;
		  right: -20px;
		  transition: 0.5s;
		}

		button:hover span {
		  padding-right: 25px;
		}

		button:hover span:after {
		  opacity: 1;
		  right: 0;
		}
</style>
</head>
<body>
	<br>
	<br>
	<div class="container">
	<br><br><br><br><br><br><br><br>
	<button class="button"><a href="UpdateProfileAdmin.php"><span>Update Profile </span></button>

	<button class="button"><a href="DisplayOrder.php"><span>Display Customer's Order </span></button>
	
	<button class="button"><a href="upTry.php"><span>Update Customer's Order </span></button>

	<button class="button"><a href="loginPageadmin.php"><span>Logout </span></button>
	</div>
</body>
</html>
