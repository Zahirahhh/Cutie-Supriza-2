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
		  font-size : 25px;

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
			border:3px solid white;
			
		}
		table img{
			width:80px;
			height:65px;
		}
		.button{
			font-size:23px;
			border: white;
			background-color: gray;
			text-decoration: none;
			padding:7px 100px;
			color : white;
			text-align : center;
			margin-top: 20px;
			}	
		.button:hover{
			background-color:#94b8b8;
		}
		about{
			font-family:BabyDoll;
		}
		form { 
			display: inline-block;

			background: rgba(0, 0, 0, 0.5);
			border-radius: 25px;
			width:1000px;
			height:800px;
			text-align: left;
			padding:20px;
		}
		form{
			height : 500px;
		}
		#home{
			background-color : white;
		}
		h1{
			text-align : center;
			font-size : 50px;
		}
		#adjust{
			width:250px;
			display:inline-block;
			font-size : 25px;
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
			<!--<img src="box2.jpg" alt="" style="width:100%;height:700px;opacity:0.5;">-->
			<form action="profileConfirm.php" method="get" >
				<hr>
				<h1>YOUR PROFILE</h1>
				<hr><br><br><br>
				<input type="text" name="username" class="button" placeholder = "Enter Your Username" style = "margin-left : 250px;">
				<input type="submit"  id = "search" value="Search" style="color:black"></button><br><br><br><br>
				
			</form>
		</div><br><br><br><br><br>
	<footer id="contact" style = "font-size : 15px;">
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
