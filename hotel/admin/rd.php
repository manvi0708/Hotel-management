<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
	
</head>
<body>
	<div id="full">
		<div  style="background-image: url('img/bms.jpg');background-size: 100% 710px; width: 100%; height: 710px">
		<div style="background-color: rgba(0,0,0,0.5)" id="header">
			<div id="logo">
				<h1><font color="white">My Project</font></h1>
			</div>
			<div id="cl"><input type="button" name="btn" id="btn"></div>
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
		<div id="banner"><br><br><br><br><br><br><br><br><br><br><br>
			<h1 style="color:blue;text-align: center; ">Welcome Admin</h1>
			<div style="background-color: rgba(0,0,0,0.5);">
			<table>
				<tr>
					<th style="color: white" width="25%" height="50px">Room No</th>
                     <th style="color: white" width="25%" height="50px">Room Type</th>
                     <th style="color: white" width="25%" height="50px">Price</th>
                     <th style="color: white" width="25%" height="50px">Status</th>
                     <th style="color: white" width="25%" height="50px">Option</th>
				</tr>
				<?php
                 $q1="select * from room";
                 $run=mysqli_query($a,$q1);
                 while($row=mysqli_fetch_array($run))
                 {
                 	$rno=$row['rno'];
                 	$type=$row['type'];
                 	$price=$row['price'];
                 	$status=$row['status'];
                   
                ?>
				<tr>
					<td style="color: lightblue" width="25%" height="50px"><center><?php echo $rno; ?></center></td>
					<td style="color: lightblue" width="25%" height="50px"><center><?php echo $type; ?></center></td>
					<td style="color: lightblue" width="25%" height="50px"><center><?php echo $price; ?></center></td>
					<td style="color: lightblue" width="25%" height="50px"><center><?php echo $status; ?></center></td>
					<td><a style="color: lightgreen" style="color: blue" href="co.php? rno=<?php echo $rno; ?>" >Check Out</a> </td>
				</tr>
				<?php
			}
				?>
			</table>
		</center>
		</div>
	<center>
	
	</center>
	</div>
  </div>
</body>

</html>