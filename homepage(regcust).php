<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel = "icon" type = "png" href = "giftbox.png">
	<title>Homepage</title>
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
		  font-size : 25px;
		}

		header {
		  padding: 0px 10px;
		  font-family:pencil sharp;
		  font-size : 25px;
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
			border:1px solid #D4BF8800;
			
		}
		table img{
			width:80px;
			height:65px;
		}
		.button{
			font-size:30px;
			color:black;
			border: none;
			background-color: transparent;
			text-decoration: none;
			padding:5px;
			}	
		.button:hover{
			background-color:yellow;
		}
		about{
			font-family:BabyDoll;
		}
		#contact{
			font-size : 20px;
		}
	</style>
</head>
<body>
	
	<header id="home">		
		<img src="logo2.png" alt="" style="width:80px;height:65px;padding-top:5px;" title="CutieSupriza Logo">			
		<div style="float:right; padding-right:20px; padding-top:15px;">
			<a href="profile.php"><b>Profile</a>
			<a href="#product">Product</a>
			<a href="#contact">Contact Us</a>
			<a href="welcomePage.php">Logout</b></a>
		</div>
	</header>
	
	<section>
		<div class="container">
			<img src="box2.jpg" alt="" style="width:100%;height:700px;opacity:0.5;">
			<div class="quote">
				<b>"Wait long enough, and people will surprise and impress you."</b>
			</div>
		</div>
		<div id="product">
				<table>
					<h1><center>🍬 Table of Price</center></h1>
					<tr>
						<th style="background-color:#2d5b6b">Set A..</th>
						<th style="background-color:#7b7d2a">Set B</th>
						<th style="background-color:#8D4A43">Set C</th>
					</tr>
					<tr>
						<td><sup>RM</sup><font size="40">10.00</font></td>
						<td><sup>RM</sup><font size="40">20.00</font></td>
						<td><sup>RM</sup><font size="40">30.00</font></td>
					</tr>
					<tr>
						<td>Choclate<br><img src="choc.png"></td>
						<td>Flower<br><img src="flower3.png"></td>
						<td>Choclate<br><img src="choc.png"></td>
					</tr>
					<tr>
						<td>Wish Card<br><img src="card.png"></td>
						<td>Wish Card<br><img src="card.png"></td>
						<td>Flower<br><img src="flower3.png"></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>Wish Card<br><img src="card.png"></td>
					</tr>
					<tr class="SignUpbutton">
						<td><a href="orderPage.php" class="button">Order now!</td>
						<td><a href="orderPage.php" class="button">Order now!</td>
						<td><a href="orderPage.php" class="button">Order now!</td>
					</tr>
				</table>
		</div>
		<div id="about">
			<h1 ><center>About Us</center></h1>
			<p style="font-family:BabyDoll;text-align:center;padding:30px;">
				Our company was name CS Enterprise. CS stand for Cutie Supriza, thus word comes from Romanian
				language or in English it means suprise box. This company will sell the surprise boxthat have 
				many things in every box that customer can order from our website. The main idea of our
				business is to sell suprise box. We also provide suprise box delivery service know as 'Suprise 
				Delivery' to customer without knowing who is giving.
				</p>
		</div>
		<div class="partner">
			<h1 style="font-family:pencil sharp;font-size:40px;">
				<center>Owned by Us:</center></h1>
			<img src="farisha.jpg" alt=" " style="margin-left:360px;"title="Nur Farisha Izati - Manager">
			<img src="syadiba.jpg" alt=" " style="margin-left:15px;" title="Nur Syadiba - Database Developer">
			<img src="zahirah.jpg" alt=" " style="margin-left:15px;" title="Nur Zahirah Hanis - Web Developer 1">
			<img src="najihah.jpg" alt=" " style="margin-left:15px;" title="Nur Najihah - Web Developer 2">
			
		</div>
	</section>
	
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
