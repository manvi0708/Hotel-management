<!DOCTYPE html>
<html>
<head>
	<title>BMS</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">

	
	
</head>
<body>
	<div id="full">
		<div  style="background-image: url('img/bms.jpg');background-size: 100% 710px; width: 100%; height: 710px">
		<div id="header">
			<div id="logo">
				<h1><font color="white">My Project</font></h1>
			</div>
			<div id="cl"><input type="button" name="btn" id="btn"></div>
			<div id="nav">
				<ul id="a1">
					<li><a style="color: white;font-size: 20px;"  href="index.php">Home</a></li>
					<li><a style="color: white;font-size: 20px;" href="contect.php">Contact Us</a></li>
					<li><a style="color: white;font-size: 15px;" href="bms.php">BOOK MY STAY</a></li>
					<li><a style="color: white;font-size: 20px;" href="#">Our Hotel</a></li>
					<li><a style="color: white;font-size: 20px;" href="#">Help</a></li>
				</ul>
			</div>
		</div>
		<div id="banner"></div>
	<center>
	<div style="background:rgba(0,0,0,.5); width: 80%;">
		
		<table>
			<tr>
				<th width="20%" height="50px" style="color: white;"><b>Destination</b></th>
				<th width="20%" height="50px" style="color: white;"><b>Check In Date</b> </th>
				<th width="20%" height="50px" style="color: white;"><b>Check Out Date</b></th>
				<th width="20%" height="50px" style="color: white;"><b>Room</b></th>
				<td rowspan="2"><input style="background-color:blue; color: white; border-radius:25px; border: none; height: 40px; width: 100px;" type="submit" name="sub" value="Check"></td>
			</tr>
			<tr>
				<td width="20%" height="50px"><center><input style="padding: 5px 5px; margin: 8px 0; border: 2px solid #ccc; border-radius:4px; color:black;" type="text" name="dest" placeholder="Enter Destination"></center></td>
				<td width="20%" height="50px"><center><input style="padding: 5px 5px; margin: 8px 0; border: 2px solid #ccc; border-radius:4px; color:black;" type="date" name="cin"></center></td>
				<td width="20%" height="50px"><center><input style="padding: 5px 5px; margin: 8px 0; border: 2px solid #ccc; border-radius:4px; color:black;" type="date" name="cout"></center></td>
				<td width="20%" height="50px">
					<center><select style="padding: 10px 10px; margin:8px 0; display: inline-block; border:1px solid #ccc; border-radius: 4px; box-sizing: border-box; color:black;">
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
					</select></center>
				</td>
			</tr>
		</table>
	
	</div>
	</center>
	</div>
  </div>
</body>

</html>