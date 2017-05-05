<!DOCTYPE html>
<html>
		<head>
			<title>Food-a-Door</title>

			<link rel="stylesheet" type="text/css" href="navbar.css"></link>
			<link rel="stylesheet" type="text/css" href="signform.css"></link>
			<link rel="stylesheet" type="text/css" href="footer.css"></link>
				<style type="text/css">
				body {
					background-image: url("food/bruschetta.jpg");
				}
				.middlebox {
					top: 30%;
				}
				</style>
				<script type="text/javascript">
					function validate() {
					var pass_exp = /^[a-zA-Z0-9!@$%^*]{8,20}$/;
					var emai_exp = /^[A-Za-z0-9.]{1,}[@]{1}[A-Za-z0-9.]{1,}[.A-Za-z0-9]{4}$/;
					var usename = document.forms["mform"]["username"];
					var pass = document.forms["mform"]["password1"];
					var emails = document.forms["mform"]["e-mail"];
					if(usename.value == null || usename.value == "")
					{
					alert("enter the username");
					}
					if(pass.value == null || pass.value == "")
					{
					alert("enter the password");
					}
					if(emails.value == null || emails.value == "")
					{
					alert("enter the email address");
					}
					if(!emai_exp.test(emails.value))
					{
						alert("wrong email format");	
					}
					if(!pass_exp.test(pass.value))
					{
					alert("password incorrect or short(should contain only 6-16 characters)");
					}

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
						<a href="homepage.html"><img src="restaurants lists/fooddoorlogo.png" width="250px" height="71.76px"/></a>
						<div class="nav-right">	
						<ul>
							<li><a href="about.html">About Us</a></li>
							<li><a href="signup.html">Sign Up</a></li>
							<li><a href="#">Login</a></li>
						</ul>
						</div>
					</nav>
				</div>
			<!--	<div id="rect">	-->
					
				
				<div class="middlebox">
				<br><br>
						<h1>LogIn</h1>
						<div id="myform">
						<form name="mform" method="post" onsubmit="validate()">
							<table>
							<!--	<tr>
									<td><label for="username">*Username</label></td>
									<td><input type="text" id="username" name="username" placeholder="username"></td>
								</tr> -->
								<tr>
									<td><label for="e-mail">*E-mail</label></td>
									<td><input type="text" id="e-mail" name="e-mail" placeholder="email"></td>
								</tr>
								<tr>
									<td><label for="password1">*Password</label></td>
									<td><input type="password"  id="password1" name="password1" placeholder="password"></td>
								</tr>
								<tr>
									<td colspan="2" id="upbutton"><input type="submit" value="Take me in" id="signup"></td>
								</tr>
								<tr>
								<td></td>
								</tr>
								<tr>
								<td colspan="2" >*required field.</td>
								</tr>
							</table>	
				</form>
			<p class="textt"><a href="">Forgot your password?</a></p>
			<p class="textt"><a href="signup.html">SignUp</a></p>
				</div>
			</div>

		</div>
		<div id="footer"style="position:relative;top:600px;">
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
							<td><a href="aboutus.html"><img id="fb"/></a></td>
							<td><a href="aboutus.html"><img id="twitter"/></a></td>
							<td><a href="aboutus.html"><img id="youtube"/></a></td>
						</tr>
					</table>
					</div>
				</div>
			</div>
		</body>
</html>


<!--aarthy.sl@outlook.com--> 