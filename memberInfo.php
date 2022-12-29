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
		  background-size : 2200px 1200px;
		  background-repeat : no-repeat;
		  font-size : 30px;
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
			border-collapse: collapse;
			border-spacing: 20px 0px;
			border : 3px solid white;
		}
		th{
			border-radius: 3px 3px 0px 0px;
			border : 3px solid white;
		}
		th,td{
			padding: 10px 40px;
			background:#D4BF88 ;
			text-align:center;
			border:1px solid #D4BF8800;
			border : 3px solid white;
			
		}
		table img{
			width:180px;
			height:165px;
		}
		.button {
			border: none;
			color: white;
			padding: 8px 32px;
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
			height:380px;
			text-align: left;
			padding:20px;
		}
		
		#home{
			background-color : white;
		}
		#adjust{
			width:200px;
			display:inline-block;
			font-size : 25px;
	    }
		#title{
			text-align : center;
		}
		#update{
			float : right;
		}
		h1{
			font-size:50px;
		}
	</style>
</head>
<body>
	
	<header id="home">		
		<img src="logo2.png" alt="" style="width:80px;height:65px;padding-top:5px;" title="CutieSupriza Logo">
		<div style="float:right; padding-right:20px; padding-top:15px;">
			<a href="homepage(newcust).php"><b>Home</a>
		</div>
		
	</header>
	<br><br>
	<section>
	<div class="container">
			<!--<img src="box2.jpg" alt="" style="width:100%;height:700px;opacity:0.5;">-->
			<h1>MEMBERS INFORMATION</h1>
			<form action="" method="get" >
				<table>
					<tr>
						<td>MEMEBER</td>
						<td>INFORMATION</td>
					</tr>
					<tr>
						<td><img src="farisha.jpg"></td>
						<td><ol>Name : Nur Farisha Izati Binti Cik Mazri<br>Student Number : 2018274314<br>Group : CS1105D<br>Email : farishaizzaty@gmail.com</td>
					</tr>
					<tr>
						<td><img src="syadiba.jpg"></td>
						<td>Name : Nur Syadiba Binti Zaimi<br>Student Number : 2018220556<br>Group : CS1105D<br>Email : nsyadibazaimi@gmail.com</td>
					</tr>
					<tr>
						<td><img src="zahirah.jpg"></td>
						<td>Name : Nur Zahirah Hanis Binti Mohd Subhhi<br>Student Number : 2018693166<br>Group : CS1105D<br>Email : hanissubhi09@gmail.com</td>
					</tr>
					<tr>
						<td><img src="najihah.jpg"></td>
						<td>Name : Nur Najihah Binti Che' Samli<br>Student Number : 2018270194<br>Group : CS1105D<br>Email : najihahchesamli@gmail.com</td>
					</tr>
				
				</table>
				<!--<fieldset id = "form1">
					<h2 id = "title">OLD INFORMATION</h2><br><br>
					<div id="adjust">Name:</div>
					<input type="text" name="nama" class="button"><br><br><br><br>
					<div id="adjust">Phone:</div>
					<input type="text" name="phoneNo" class="button"><br><br><br><br>
					<div id="adjust">Username:</div>
					<input type="text" name="username" class="button"><br><br><br><br>
					<div id="adjust">Password:</div>
					<input type="text" name="password" class="button"><br><br><br><br>
				</fieldset>
				
				<fieldset id = "form2">
					<h2 id = "title">NEW INFORMATION</h2><br><br>
					<div id="adjust">New Name:</div>
					<input type="text" name="newname" class="button"><br><br><br>
					<div id="adjust">New Phone:</div>
					<input type="text" name="newphones" class="button"><br><br><br>
					<div id="adjust">New Username:</div>
					<input type="text" name="newuserName" class="button"><br><br><br>
					<div id="adjust">New Password:</div>
					<input type="text" name="newpsw" class="button"><br><br><br>
					
					<input type="submit" class="button" id="update" value="Update" style="color:black"></button>
				</fieldset>-->
				
		    </form>
	</div>
	<br>
	<!--<footer id="contact" style = "font-size:15px; margin-top:10px;">
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
	</footer>-->
</body>
</html>
