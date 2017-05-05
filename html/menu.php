<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="navbar.css">
	<link rel="stylesheet" type="text/css" href="menu.css">
	<link rel="stylesheet" type="text/css" href="footer.css">
	<script type="text/javascript">
		function show(x)
		{
			document.getElementById('order').innerHTML=x;
		}
		function add1() {
			var parent = document.getElementById('a1');
			//alert(parent.innerHTML);
			show(parent.innerHTML);
		}
		function add2() {
			var parent = document.getElementById('a2');
			show(parent.innerHTML);
		}
		function add3() {
			var parent = document.getElementById('a3');
			show(parent.innerHTML);
		}
		function add4() {
			var parent = document.getElementById('a4');
			show(parent.innerHTML);
		}
		function add5() {
			var parent = document.getElementById('a5');
			show(parent.innerHTML);
		}
		function add6() {
			var parent = document.getElementById('a6');
			show(parent.innerHTML);
		}
		function add7() {
			var parent = document.getElementById('a7');
			show(parent.innerHTML);
		}
		function add8() {
			var parent = document.getElementById('a8');
			show(parent.innerHTML);
		}
		function add9() {
			var parent = document.getElementById('a9');
			show(parent.innerHTML);
		}
		function add10() {
			var parent = document.getElementById('a10');
			show(parent.innerHTML);
		}
	</script>
</head>
<body>
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
	<div id="box">
		<table cellspacing="10px">
			<tr>
			<th>Menu Item</th>
			<th>Price</th>
			<th>Add</th>
			</tr>
			<tr>
				<td colspan="3">Starters</td>
			</tr>
			<tr>
				<td id="a1">Chicken Lollipop</td>
				<td>65</td>
				<td><input type="number" value="order" onclick="add1()" ></input></td>
			</tr>
			<tr>
				<td id="a2" >Chicken Tikka</td>
				<td>65</td>
				<td><input type="number" value="order" onclick="add2()"></input></td>
			</tr>
			<tr>
				<td id="a3">Paneer Tikka</td>
				<td>65</td>
				<td><input type="number" value="order" onclick="add3()"></input></td>
			</tr>
			<tr>
				<td id="a4">harali kabab</td>
				<td>65</td>
				<td><input type="number" value="order" onclick="add4()" id="but"></input></td>
			</tr>
			<tr>
				<td id="a5">Drum of heaven</td>
				<td>65</td>
				<td><input type="number" value="order" onclick="add5()" id="but"></input></td>
			</tr>
			<tr>
				<td colspan="3">Soups</td>
			</tr>
			<tr>
				<td id="a6">Chicken Lung Fung</td>
				<td>65</td>
				<td><input type="number" value="order" onclick="add6()"></input></td>
			</tr>
			<tr>
				<td id="a7">Veg Lung Fung</td>
				<td>65</td>
				<td><input type="number" value="order" onclick="add7()"></input></td>
			</tr>
			<tr>
				<td id="a8">Tomato</td>
				<td>65</td>
				<td><input type="number" value="order" onclick="add8()"></input></td>
			</tr>
			<tr>
				<td id="a9">Hot n Sour</td>
				<td>65</td>
				<td><input type="number" value="order" onclick="add9()"></input></td>
			</tr>
			<tr>
				<td id="a10">Sweet Corn</td>
				<td>65</td>
				<td><input type="number" value="order" onclick="add10()" ></input></td>
			</tr>	
	</table>
		<br><br><br>
		<textarea id="order" width="500px" height="500px"></textarea> 
	</div>
</div>
				<div id="footer" style="position:absolute;top:755px;left:0px;">
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
</body>
</html>