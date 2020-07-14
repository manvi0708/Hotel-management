<!DOCTYPE html>
<html>
<head>
	<title>Home (Hotel Management)</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet"  href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet"  href="bootstrap/js/bootstrap.min.js">
	<script type="text/javascript" src="jquery/jquery.js"></script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#btn').click(function(){
				$('#nav').slideToggle();
			});
		});
	</script>

</head>
<body>
	<div id="full">
		<div style="background-image: url('img/index1.jpg'); background-size: cover; object-fit: contain; width:100%;height:550px; ">
		<div id="header">
			<div id="logo">
				<h1><font color="white">My Project</font></h1>
			</div>
			<div><button id="btn" class="glyphicon glyphicon-menu-hamburger btn btn-info"></button></div>
			<div id="nav">
				<ul>
					<li><a style="color: white;font-size: 20px;" href="index.php">Home</a></li>
					<li><a style="color: white;font-size: 20px" href="contect.php">Contact Us</a></li>
					<li><a style="color: white;font-size: 20px" href="bms.php">BOOK</a></li>
					<li><a style="color: white;font-size: 20px" href="#">Our Hotel</a></li>
					<li><a style="color: white;font-size: 20px" href="#">Help</a></li>
				</ul>
			</div>
		</div>
		<div id="banner">
			
		</div>
	</div>
	</div>
	<div id="f1">
		<form action="r1.php" method="get">
		<center><table>
			<tr>
				<th style="color: white" width="20%" height="50px"><center>Destination</center></th>
				<th style="color: white" width="20%" height="50px"><center>Check In Date</center></th>
				<th style="color: white" width="20%" height="50px"><center>Check Out Date</center></th>
				<th style="color: white" width="20%" height="50px"><center>Room</center></th>
				<td rowspan="2"><input style="background-color: orange; color: white; border-radius:25px; border: none; height: 40px; width: 100px;" type="submit" value="Check" name="sub"></td>
			</tr>
			<tr>
				<td width="20%" height="50px"><center><input style="padding: 10px 10px; margin: 8px 0; border: 2px solid #ccc border-radius:4px;" type="text" name="d1" placeholder="Enter Destination"></td>
				<td width="20%" height="50px"><center><input style="padding: 10px 10px; margin: 8px 0; border: 2px solid #ccc border-radius:4px;" type="date" name="ci"></center></td>
				<td width="20%" height="50px"><center><input style="padding: 10px 10px; margin: 8px 0; border: 2px solid #ccc border-radius:4px;" type="date" name="co"></center></td>
				<td width="20%" height="50px">
					<center><select style="padding: 10px 10px; margin:8px 0; display: inline-block; border:1px solid #ccc; border-radius: 4px; box-sizing: border-box;" name="room">
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
					</select></center>
				</td>
			</tr>
		</table></center>
	</form>
	</div>
	<div id="welcome">
		<h1 align="center" style="color: red">Welcome To My Project</h1>
		<center><font size="4">
			Quintessentially Indian in its fabric, Taj Hotels Palaces Resorts Safaris is recognized the world over for delivering a unique flavour of hospitality that offers<br>
world-class refinement while remaining deeply rooted in its local heritage. With over 100 hotels in 62 locations, Taj offers guests the refined luxury of <br>
heritage, the effortlessly efficient service and amenities and a local experience with the assurance of quality.<br>
		</font>
<h2 style="color: red;">Our Brands</h2>
	</center>
	</div>
	<div id="g1">
		<div id="one"><img src="img/g1.jpg" width="100%">
<center>
	<h2>Taj</h2><br>
	Spanning world-renowned landmarks, modern business<br>
hotels, idyllic beach resorts, authentic Rajput palaces and<br>
rustic safari lodges, each Taj hotel reinterprets the tradition of<br>
hospitality in a refreshingly modern way to create unique<br>
experiences and lifelong memories.<br>
<font color="red">More</font>
</center>
		</div>
		<div id="two"><img src="img/g2.jpg" width="100%">
<center><h2>VIVANTA</h2>
<font color="red">HOTEL AND RESTRAUNT</font><br>
Work hard and play hard. Relax and energize. Ideate and<br>
confer. Evolve and transform. Revel in a spirit that presents<br>
the normal with an unexpected twist. Stylish and<br>
sophisticated, Vivanta by Taj delivers experiences with<br>
imagination, energy and efficiency.<br>
<font color="red">More</font>
</center>
		</div>
		<div id="three"><img src="img/g3.jpg" width="100%">
<center><h2>GATEWAY</h2>
<font color="red">HOTEL AND REStRAUNT</font><br>
The Gateway Hotels and Resorts are designed for the modern<br>
traveller. Which is why we have a 24X7 attitude across<br>
services like dining and fitness. So when you feel like a quick<br>
bite at 1 am or a heart pumping jog at 4 am, weÃ¢â‚¬â„¢ve got you<br>
covered<br>
<font color="red">More</font>
</center>
		</div>
	</div>
  </div>
</body>

</html>