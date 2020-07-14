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
					<li><a style="color: white;font-size: 20px;" href="/admin/booking.php">Booking</a></li>
					<li><a style="color: white;font-size: 20px;" href="rd.php">Room Details</a></li>
					<li><a style="color: white;font-size: 20px;" href="#">Help</a></li>
				</ul>
			</div>
		</div>
		<div id="banner"><br><br><br><br><br><br><br><br><br><br><br>
			<center><h1 style="color:white;text-align: center; background-color: rgba(0,0,0,0.5); width: 50%">Welcome Admin</h1></center>
			<div style="background-color: rgba(0,0,0,0.5);">
			<table>
				<tr>
					<th style="color: white" width="10%" height="50px">Name</th>
                     <th style="color: white"  width="10%" height="50px">Id No.</th>
                     <th style="color: white"  width="10%" height="50px">City</th>
                     <th style="color: white"  width="10%" height="50px">District</th>
                     <th style="color: white"  width="10%" height="50px">State</th>
                     <th style="color: white"  width="10%" height="50px">Check In Date</th>
                     <th style="color: white"  width="10%" height="50px">Check Out Date</th>
                     <th style="color: white"  width="10%" height="50px">Members</th>
				</tr>
				<?php
                 $q1="select * from details";
                 $run=mysqli_query($a,$q1);
                 while($row=mysqli_fetch_array($run))
                 {
                 	$name=$row['name'];
                 	$idno=$row['idno'];
                 	$city=$row['city'];
                 	$dis=$row['dis'];
                   	$state=$row['state'];
                     	$cidate=$row['cidate']; 
                     	$codate=$row['codate']; 
                     	$m=$row['m']; 
                ?>

				<tr>
					<td style="color: white"  width="10%" height="50px"><center><?php echo $name; ?></center></td>
					<td style="color: white"  width="10%" height="50px"><center><?php echo $idno; ?></center></td>
					<td style="color: white"  width="10%" height="50px"><center><?php echo $city; ?></center></td>
					<td style="color: white"  width="10%" height="50px"><center><?php echo $dis; ?></center></td>
					<td style="color: white"  width="10%" height="50px"><center><?php echo $state; ?></center></td>
					<td style="color: white"  width="10%" height="50px"><center><?php echo $cidate; ?></center></td>
					<td style="color: white"  width="10%" height="50px"><center><?php echo $codate; ?><center></td>
					<td style="color: white"  width="10%" height="50px"><center><?php echo $m; ?></center></td>
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