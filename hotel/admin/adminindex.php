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
		<div id="header">
			<div id="logo">
				<h1><font color="white">My Project</font></h1>
			</div>
			<div id="cl"><input type="button" name="btn" id="btn"></div>
			<div id="nav">
				<ul id="a1">
					<li><a style="color: white;font-size: 20px;" href="#">Home</a></li>
					<li><a style="color: white;font-size: 20px;" href="#">Contact Us</a></li>
					<li><a style="color: white;font-size: 15px;" href="#">BOOK MY STAY</a></li>
					<li><a style="color: white;font-size: 20px;" href="#">Our Hotel</a></li>
					<li><a style="color: white;font-size: 20px;" href="#">Help</a></li>
				</ul>
			</div>
		</div>
		<div id="banner"><br><br><br><br><br><br><br><br><br><br><br>
			<center><div style="background:rgba(255,255,255,.5); width: 80%;">
	       <form action="" method="post">
	       <table>
	       	<tr>
	       		<td style="font-size: 25px;" width="50%" height="50px"><b>Username</b></td>
	       		<td width="50%" height="50px"><input  style="padding: 5px 5px; margin: 8px 0; border: 2px solid #ccc; border-radius:6px; color:brown;" type="text" name="un" placeholder="Enter Username" title="Enter Username"></td>
	       	</tr>
	       		<tr>
	       		<td style="font-size: 25px;" width="50%" height="50px"><b>Password</b></td>
	       		<td width="50%" height="50px"><input  style="padding: 5px 5px; margin: 8px 0; border: 2px solid #ccc; border-radius:6px; color:brown;" type="password" name="ps" placeholder="Enter Password" title="Enter Password"></td>
	       	</tr>
	       	<center><tr>
	       		<td colspan="2"><input style=" background-color:blue; color: white; border-radius:25px; border: none; height: 40px; width: 100px;" type="submit" name="sub" value="Login"></td>
	       	</tr></center>
	       </table>
	       </form>
	       <?php
           if(isset($_POST['sub']))
           {
           	     $un=$_POST['un'];
           	     $ps=$_POST['ps'];
           	    $q1="select * from admin";
           	    $run=mysqli_query($a,$q1);
           	    $row=mysqli_fetch_array($run);
           	     $u=$row['un'];
           	     $p=$row['ps'];
           	     if($un==$u&& $ps==$p)
           	     {
           	     	header('Location: ahome.php');
           	     }
           	     else
           	     {
           	     	header('Location: index.php');
           	     }

           }
           
	       ?>	
	</div></center>
		</div>
	<center>
	
	</center>
	</div>
  </div>
</body>

</html>