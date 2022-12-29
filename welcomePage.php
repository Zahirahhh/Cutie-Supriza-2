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
			backgroun-color : black;
		}
		
		body { 
		  margin: 0;
		  background-image : url("box2.jpg");
		  background-repeat : no-repeat;
		  background-size : 2050px 1000px;
		  
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
			top: 10%;
			left: 50%;
			transform: translate(-50%, -50%);
			font-size:60px;
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
		
		#button1 {
		  background-color: transparent; 
		  border: 3px solid #00b386;
		  color: white;
		  padding: 15px 250px;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		  font-size: 50px;
		  cursor: pointer;
		  margin-left : 20px;
		  margin-top : 200px;
		  font-family:pencil sharp;
		}
		#button2 {
		  background-color: transparent;
		  border: 3px solid #00b386;
		  color: white;
		  padding: 15px 280px;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		  font-size: 50px;
		  cursor: pointer;
		  margin-left : 20px;
		  margin-top : 200px;
		  font-family:pencil sharp;
		}
		about{
			font-family:BabyDoll;
		}
		#contact{
			font-size : 20px;
			margin-top : 780px;
		}
		h1{
			font-size : 80px;
			text-align : center;
			margin-top : 150px;
		}
		
	</style>
</head>
<body>
	<h1 style="color:white;"><b>WELCOME TO CUTIE SUPRIZA</b></h1>
	<div class="container">
		<a href="homepage(newcust).php" class="button" id = "button1"><b>CUSTOMER</b></a><br>
		<a href="loginPageadmin.php" class="button" id = "button2"><b>ADMIN</b></a>
		<!--<button class="button">Green</button>-->
	</div>
	
</body>
</html>
