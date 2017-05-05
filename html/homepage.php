<!DOCTYPE html>
<html>
		<head>
			<title>Food-a-Door</title>
			<link rel="stylesheet" type="text/css" href="navbar.css"></link>
			<link rel="stylesheet" type="text/css" href="footer.css"></link>
			<link rel="stylesheet" type="text/css" href="homecss.css"></link>	
			<script type="text/javascript">
				function load() {
					window.location.href = "menu.html";
				}
			</script>
		</head>
		<body>
		<div id="slider">
				<img id="backimage" src="food/desert.jpg" alt="sorry cant show" />
			<div id="resform">
					<form id="myform">
					<div>
						<!-- type="" id="reschoice" placeholder="Choose the restaurant"/> -->
						<select id="reschoice"> 
							<option value="priya">Earth Plate</option>
							<option value="hundred">Hundreds Heritage</option>
							<option value="velkitchen">Vellore Kitchen</option>
							<option value="lava cakes">Lava Cakes</option>
							<option value="salim">Salim Punjabi dhaba</option>
							<option value="flo">Flo</option>
							<option value="chandni">Chandni Chowk</option>
							<option value="valley">Valley junction</option>
						</select>
					</div>
					<div>
						<input type="button" id="search" value="Search" onclick="load()"></input>
					</div>
					</form>
					</div>	
				<div id="slidercaption">
					<h1 id="captionquote">Pizza?ChickenTikkaMasala? Yes!Please</h1>
				</div>	
			</div> 
			<div class="wrap">
				<div class="navwrap">
					<nav id="navi-bar">
						<div class="nav-left">
						<ul>
							<li><a href="">Review</a></li>
							<li><a href="restaurants.html">Order</a></li>
							<li><a href="homepage.html">Home</a></li>
						</ul>
						</div>
						<a href="homepage.html"><img  id="logo" src="restaurants lists/fooddoorlogo.png" width="250px" height="71.76px"/></a>
						<div class="nav-right">	
						<ul>
							<li><a href="about.html">About Us</a></li>
							<li><a href="signup.html">Sign Up</a></li>
							<li><a href="login.html">Login</a></li>
						</ul>
						</div>
					</nav>
				</div>
			<div id="work">
				<h1>How it works</h1>
				<table id="hiw" align="center">
					<tr id="icons">
						<td><img src="order.png" class="icon"></td>
						<td><img src="prepare.png" class="icon"></td>
						<td><img src="delivery1.png" class="icon"></td>
					</tr>
					<tr id="head">
						<td>Order</td>
						<td>Prepare</td>
						<td>Deliver</td>
					</tr>
					<tr id="detail">
						<td>
							The ordering platforms feature a clean and contemporary design for a quick & seamless ordering, tracking and payment experience.
						</td>
						<td>
							Food is prepared as soon as you press the order button. Proper hygine and cleanliness is maintained in our kitchens.
						</td>
						<td>
							Our delevering is engineered to keep the food fresh, hot and easy to consume. Our delivery bags maintain food integrity through the delivery cycle.
						</td>
					</tr>
				</table>
			</div><br>
			<div id="footer">
				<div id="form">
						<p>Sign up for special offers</p>
						<form>
							<input type="email" class="button" name="email" required placeholder="Email"/></br>
							<input type="tel" class="button" name="contact" required placeholder="Contact number"/></br>
							<input style="width:242px;" type="submit" class="button" id="submit" name=submit" value="Send me treat"/>
						</form>
				</div>
				<div class="knowus">
						<p>Get to know us</p>
						<ul class="list">
							<li><a href="#">About food-a-door</a></li>
							<li><a href="#">Our app</a></li>
							<li><a href="#">Reviews and rating</a></li>
							<li><a href="#">Contact us</a></li>
						</ul>
				</div>
				<div class="knowus">
						<p>Partner with us</p>
						<ul class="list">
							<li><a href="#">For restaurants</a></li>
							<li><a href="#">For delivery services</a></li>
							<li><a href="#">For corporate accounts</a></li>
							<li><a href="#">For digital marketing</a></li>
						</ul>
				</div>
				<div id="lastrow">
					<div style="position:relative;left:-600px;">
					<p style="color:white;font-size:1.1em;font-family:sans-serif;position:relative;left:-8px;">Connect with us</p>
					<table>
						<tr>
							<td><a href="about.html"><img id="fb"/></a></td>
							<td><a href="about.html"><img id="twitter"/></a></td>
							<td><a href="about.html"><img id="youtube"/></a></td>
						</tr>
					</table>
					</div>
				</div>
			</div>
		</div>
		</body>
</html>


<!--aarthy.sl@outlook.com-->