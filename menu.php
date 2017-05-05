<?php 
session_start();
if(!isset($_SESSION["ID"]))
		{
			header('Location:login.php');
		}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="navbar.css">
	<link rel="stylesheet" type="text/css" href="menu.css">
	<link rel="stylesheet" type="text/css" href="footer.css">
	<script type="text/javascript">
		
	</script>
	<style>
				#hey:hover #options{
					display:block;
				}
				#hey,#hey a{
					text-align:left;
				}
				#options{
					background-color:rgba(0,0,0,0.5);
					margin-top:29px;
					display:none;
				}
				#options li{
					margin-left:0px;
				}
				#options li>a{
					margin-left:0px;
					text-align:left;
				}
			</style>
</head>
<body>
<div class="wrap">
		<?php include("navbar.php")?>
		<?php include("submit.php")?>
		<div id="box">
		<?php 
		if(isset($_REQUEST["rest"]))
		$restaurant = $_REQUEST["rest"];
		else if(isset($_GET["reschoice"]))
			$restaurant=$_GET["reschoice"];
		echo $restaurant;
		$ref="\"submitorder.php?rest=" . $restaurant . "\"";
		//echo $ref;
		?>
		
		<form name="myform" action=<?php echo $ref; ?> method="POST">
		<table cellspacing="10px">
			<tr>
				<th>Menu Item</th>
				<th>Price</th>
				<th>Add</th>
			</tr>
		<?php 
			
			$conn = mysqli_connect("localhost","root","","food");
			$query = "select * from items where restaurant = '$restaurant';";
			$result = mysqli_query($conn,$query);
			$i=0;
				while ($show = mysqli_fetch_array($result)){
							$name="item".$i;
							$i++;
							echo "<tr><td id=\"a1\">" . $show["item"] . "</td><td>" . $show["price"] . "</td><td><input type=\"number\" name=\"{$name}\" value=\"0\" onclick=\"add1()\"></input></td></tr>";
							}
							echo "</table>";
		 ?>
<!--	<div id="box">
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

		-->
		<input type="submit" value="submit"/><br /><br />
		</form> 
	</div> 
</div>
				<div id="footer" style="position:absolute;top:755px;left:0px;">
				<?php include("footer.php")?>
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
								<td><a href="about.php"><img id="fb"/></a></td>
								<td><a href="about.php"><img id="twitter"/></a></td>
								<td><a href="about.php"><img id="youtube"/></a></td>
							</tr>
						</table>
						</div>
					</div>
				</div>
</body>
</html>