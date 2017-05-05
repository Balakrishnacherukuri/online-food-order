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
	<link rel="stylesheet" type="text/css" href="submitorder.css">
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
				#waris>tr>td{
					padding: 5px;
				}
				#options li>a{
					margin-left:0px;
					text-align:left;
				}
			</style>
</head>
<body>
			<?php include("navbar.php")?>
			<div class="wrap">
			<div id="box">
				<?php echo "<br/><b>Your order is</b>
				<br/>
				<table id=\"waris\"><tr><th>Item</th><th>Quantity</th><th>Amount</th></tr>";
				$restaurant = $_REQUEST["rest"];
				$conn = mysqli_connect("localhost","root","","food");
				$query = "select * from items where restaurant = '$restaurant';";
				$item = array(0,0,0,0,0);
				$result = mysqli_query($conn,$query);
				$i=0;
				$amount=0;
					while ($show = mysqli_fetch_array($result)){

							$item[$i]=$_POST["item".$i];
							if($item[$i]>0)
							{
							echo "<tr><td>" . $show["item"]."</td><td>".$item[$i]."</td><td>" . $item[$i]*$show["price"]."</td></tr>";
							$amnt=$item[$i]*$show["price"];
							$sql = "insert into orders values(null,'{$_SESSION["ID"]}','{$restaurant}','{$show["item"]}',{$item[$i]},{$amnt});";
							mysqli_query($conn,$sql);
							$amount+=$item[$i]*$show["price"];
							}
							$i++;
							//echo $_POST["item".$i++];
							}
						echo "<tr><th colspan=\"2\">Total amount</th><th>".$amount."</th></tr></table>";
							//print_r($item);
				?>
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