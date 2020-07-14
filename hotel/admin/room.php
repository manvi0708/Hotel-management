<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home (Hotel Management)</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
	
</head>
<body>
	<div id="full">
		<div id="bg" style="background-image: url('img/bed.jpg'); height: 1200px;">
		<div id="header">
			<div id="logo">
				<h1><font color="white">My Project</font></h1>
			</div>
			<div id="nav">
				<ul id="a1">
					<li><a style="color: white;font-size: 20px;" href="ahome.php">Home</a></li>
					<li><a style="color: white;font-size: 20px;" href="room.php">Room Update</a></li>
					<li><a style="color: white;font-size: 20px;" href="booking.php">Booking</a></li>
					<li><a style="color: white;font-size: 20px;" href="rd.php">Room Details</a></li>
					<li><a style="color: white;font-size: 20px;" href="#">Help</a></li>
				</ul>
			</div>
		</div>
		<div id="banner">
			<br><br><br><br><br><br><br>
			<center><div id="form">
				<form action="room.php" method="post">
			<table style="color: brown;">
				
				<tr>
					<td style="font-size: 30px"><b>Room No</b></td>
					<td><input style="padding: 5px 5px; margin: 8px 0; border: 2px solid #ccc; border-radius:6px; color:brown;" type="text" name="rno" placeholder="Enter Room No" title="Enter Room No"></td>
					
				</tr>
				
				<tr>
					<td style="font-size: 30px"><b>Room Type</b></td>
					<td><input style="padding: 5px 5px; margin: 8px 0; border: 2px solid #ccc; border-radius:6px; color:brown;" type="text" name="type" placeholder="Enter Room Type" title="Enter Room Type"></td>
					
				</tr>
				<tr>
					<td style="font-size: 30px"><b>Room Price</b></td>
					<td><input style="padding: 5px 5px; margin: 8px 0; border: 2px solid #ccc; border-radius:6px; color:brown;" type="text" name="price" placeholder="Enter Room Price" title="Enter Room Price"></td>
					
				</tr>
				
				<td>
					<td ><input style="width: 120px; height: 40px; border-radius: 20px; opacity: 0.7; color:white; background-color: brown" type="submit" name="submit" value="submit"></td>
				</td>
				
			</table>
		</form>
		<?php
         if(isset($_POST['submit']))
         {
         	$rno=$_POST['rno'];
         	$type=$_POST['type'];
         	$p=$_POST['price'];
         	if(mysqli_query($a,"insert into room(rno,type,price) values('$rno','$type','$p')"))
         	{
         		echo "data inserted";
         	}
         	else
         	{
         		echo "Data Not Inserted";
         	}
         }

		?>
					</div></center>
		</div>
	</div>
	</div>
	
  </div>
</body>

</html>