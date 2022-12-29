<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel = "icon" type = "png" href = "giftbox.png">
	<title>CutieSupriza</title>
	<style>
		
		html{
			scroll-behavior:smooth;
		}
		.container{
			position: relative;
			text-align: center;
			color: white;
		}
		
		body { 
		  margin: 0;
		  background-image : url("box2.jpg");
		  background-size : 2100px 1200px;
		  background-repeat : no-repeat;
		  font-size : 35px;
		}

		header {
		  padding: 0px 10px;
		  font-family:pencil sharp;
		}

		header a {
		  float: left;
		  color: black;
		  text-align: center;
		  padding: 12px;
		  text-decoration: none;
		  font-size: 18px; 
		  line-height: 25px;
		  border-radius: 4px;
		}

		header a:hover {
		  background-color:#263E31;
		  color: white;
		  transition: 0.3s;
		}
		
		.quote{
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			font-size:40px;
			color:black;
			font-family:pencil sharp;
		}
		
		.partner img{
			opacity:1.0;
			width:300px;
			height1:100px;
		}
		.partner img:hover{
			transition: transform .6s;
			transform: scale(1.1);
		}
		
		footer{
			color:white;
			clear:both;
			padding:10px;
			background-color:#946D46;
			text-align:center;
			font-size:10px;
			margin-top : 270px;
		}
		footer a{
			text-decoration:none;
			color:white;
		}
		h1{
			font-family:pencil sharp;
			font-size:40px;
		}
		.Video{
			margin-left: auto;
			margin-right: auto;
			display: block;
			width:1280px;
			height:720px;
			border: 10px solid #946D46;
		}
		table{
			margin-left: auto;
			margin-right: auto;
			font-family:BabyDoll;
			border-collapse: separate;
			border-spacing: 30px 0px;
		}
		th{
			border-radius: 3px 3px 0px 0px;
		}
		th,td{
			padding: 10px 40px;
			background:#D4BF88 ;
			text-align:center;
			border:1px solid #D4BF8800;
			
		}
		table img{
			width:80px;
			height:65px;
		}
		.button {
			border: none;
			color: white;
			padding: 10px 50px;
			text-align: left;
			text-decoration: none;
			display: inline-block;
			font-size: 25px;
			margin: 4px 2px;
			cursor: pointer;
			font-family:pencil sharp;
			background-color: #E6DEB9;
		}
		.button:hover{
			background-color:#94b8b8;
		}
		about{
			font-family:BabyDoll;
		}
		fieldset { 
			display: inline-block;

			background: rgba(0, 0, 0, 0.5);
			border-radius: 25px;
			width:600px;
			height:580px;
			text-align: left;
			padding:20px;
		}
		#home{
			background-color : white;
		}
		#adjust{
			width:150px;
			display:inline-block;
			font-size : 25px;
	    }
		#delete{
			float : right;
			margin-right : 690px;
		}
		h1{
			font-size : 80px;
		}
		#search{
			padding : 8px 30px;
			background-color : #94b8b8;
			margin-top : 20px;
			font-size : 25px;
			color : white;
		}
	</style>
</head>
<body>
	
	<header id="home">		
		<img src="logo2.png" alt="" style="width:80px;height:65px;padding-top:5px;" title="CutieSupriza Logo">
		
		<div style="float:right; padding-right:20px; padding-top:15px;">
			<a href="Editprofile.php"><b>Update Profile</a>
			<a href="Deleteorder.php">Delete Order</a>
			<a href="homepage(regcust).php">Home</b></a>
		</div>
	</header>
	<br><br>
	<section>
	<div class="container">
		<h1>DELETE ORDER</h1><br><br><br>
		<form action="deleteConfirm.php" method="get" >
	
			<input type="text" name="username" class="button" placeholder = "Enter Your Username" style = "margin-left : 20px; font-size:35px"><br><br>
	
			<input type="submit" class="button" id="delete" value="Confirm" style="color:black; margin-right : 930px;"></button>
			
		</form>
	</div>
	<br>
	<footer id="contact">
		<center><p><b>Get to Know Us at:</b></p></center>
		<p>
			<a href="https://www.facebook.com/">
				<img src="facebook.png" alt="" style="width:30px;height:30px"></a>
			
			<a href="https://www.instagram.com/">
				<img src="insta.png" alt="" style="width:30px;height:27px;margin-left:15px;"></a>
			
			<a href="https://twitter.com/?lang=en">
				<img src="twitter.png" alt="" style="width:30px;height:30px;margin-left:15px;"></a>
			<br><br>
			
			<a href="mailto:CutieSupriza@gmail.com"><i>● CutieSupriza@gmail.com ●</i></a>
			<a href="https://wa.link/zewpip"> +60152933762 ●</a>
		</p>

		Copyright &copy; CutieSupriza.com
	</footer>
</body>
</html>
