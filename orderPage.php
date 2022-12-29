<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel = "icon" type = "png" href = "giftbox.png">
	<title>Order Page</title>
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
		#adjust{
			width:150px;
			display:inline-block;
		}
		form{
			font-family:pencil sharp;
			padding-left:550px;
			font-size:30px;
			width:900px;
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
			background-color: #4B6B3C;
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
		
		about{
			font-family:BabyDoll;
		}
	</style>
</head>
<body>
	
	<header id="home">		
		<img src="logo2.png" alt="" style="width:80px;height:65px;padding-top:5px;" title="CutieSupriza Logo">			
		<div style="float:right; padding-right:20px; padding-top:15px;">
			<a href="homepage(regcust).php"><b>Home</a>
			<a href="#contact">Contact Us</a>
			<a href="homepage(newcust).php">Logout</b></a>
		</div>
	</header>
	
	<section>
		<div class="container">
			<img src="https://64.media.tumblr.com/0741e2e8522c397459f8a0f2c8ec483c/72a0358ede84154c-31/s2048x3072/b2354d4ae6e4375dae2237fac38fe1a7885dfc93.gif" alt="" style="width:100%;height:200px;opacity:0.5;">
			<div class="quote">
				<b>"Surprise comes from defying expectations. "</b>
			</div>
		</div>

		<form name = "form1" action="orderDetail.php" method="post"><fieldset>
			<legend>Order Form</legend>
			
			<div id="adjust">Username</div> 
			<input type="text" id="username" name="username" class="button"><br><br>
			
			<div id="adjust">set </div>		
			<select  name = "set" id="set" class="button">
				<option id="setA" value="A">Set A</option>
				<option id="setB" value="B">Set B</option>
				<option id="setC" value="C">Set C</option>
			</select>
			<br><br>
			
			<div id="adjust">Price</div> 
			<input type="radio" id="hargas" name="harga" value="10" > RM 10</input>
			<input type="radio" id="hargas" name="harga" value="20" > RM 20</input>
			<input type="radio" id="hargas" name="harga" value="30" > RM 30</input><br><br>
						
			<div id="adjust"> wish card</div> 
			<input type="text" id="wishcard" name="wishcard" placeholder="*optional" class="button"><br><br>
			
			<div id="adjust"> receiver name</div> 
			<input type="text" id="receiverName" name="receiverName" class="button"><br><br>
			
			<div id="adjust"> receiver address</div> 
			<input type="text" id="receiverAdds" name="receiverAdds" class="button"><br><br>
			
			<div id="adjust"> phone number</div> 
			<input type="text" id="phoneNo" name="phoneNo" class="button"><br><br>
			
			<div id="adjust"> date</div> 
			<input type="date" id="date" name="date" class="button"><br><br>
			
			<div id="adjust"> time</div> 
			<input type="radio" id="specific" name="time" value="specific" >Specific
				<input type="time" id="specific" name="specificTime" class="button">
			<input type="radio" id="anytime" name="time" value="anytime">Anytime<br><br>
			
			<div id="adjust"> want to be known?</div> 
			<input type="radio" id="knownYes" name="known" value="yes" >Yes
			<input type="radio" id="knownNo" name="known" value="no">No<br><br>
			
			<!--<div id="adjust">Add on </div> 
			<input type="checkbox" name="include" id = "include" value="include">Include Polaroid(RM 5)<br><br>-->
			
			<input type="button" value="Display total"  class="button" onclick="displayTotal()">
			
			<input type="submit" id="order" name="order" value="Submit Order" class="button" style="float:right;display:none;"></input>
			
		   <p id = "price" name = "prices" >RM 0.00</p>
			<script>
		
				function displayTotal()
				{	
					var element1 = document.getElementById("price").innerHTML;
					var total = 0;
					var submit = document.getElementById("order");
					submit.style.display="block";
					
					if(document.getElementById("set").value == "A")
					{
							total = total + 10 ;
					}
					if(document.getElementById("set").value == "B")
					{
							total = total + 20 ;
					}
					if(document.getElementById("set").value == "C")
					{
							total = total + 30 ;
					}

					document.getElementById("price").innerHTML = "RM " + total.toFixed(2);
				}
		   </script>
		
		</fieldset></form><br><br>
	
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
