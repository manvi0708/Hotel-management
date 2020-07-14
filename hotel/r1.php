<?php
include("connection.php");
$r=$_GET['room'];
$ci=$_GET['ci'];
$co=$_GET['co'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home (Hotel Management)</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet"  href="bootstrap/css/bootstrap.min.css">

</head>
<body>
	<div id="full">
		<div id="bg" style="background-image: url('img/bed.jpg'); height: 1200px;">
		<div id="header">
			<div id="logo">
				<h1><font color="white">My Project</font></h1>
			</div>
			<div id="nav">
				<ul>
					<li><a style="color: white;font-size: 20px;" href="index.php">Home</a></li>
					<li><a style="color: white;font-size: 20px;" href="contect.php">Contact Us</a></li>
					<li><a style="color: white;font-size: 15px;" href="bms">BOOK MY STAY</a></li>
					<li><a style="color: white;font-size: 20px;" href="#">Our Hotel</a></li>
					<li><a style="color: white;font-size: 20px;" href="#">Help</a></li>
				</ul>
			</div>
		</div>
		<div id="banner"><br><br><br>
			<div id="form">
				<form action="r1.php" method="get">
			<table style="color: yellow;">
				<?php
				  $q1="select * from room where status='UnBooked'";
                        $run=mysqli_query($a,$q1);
                        $row=mysqli_fetch_array($run);
                         $rno=$row['rno'];
                        $q="select * from room where status='UnBooked'";
                        $run=mysqli_query($a,$q);
                        $num=mysqli_num_rows($run);
                        echo $num;
                        if($r<=$num)
                        {
                        	?>
                        	<tr>
					<td><b>Status</b></td>
					<td><input style="padding: 5px 5px; margin: 8px 0; border: 2px solid #ccc; border-radius:6px; color: black; background-color: white;" type="text" name="Status" value="Available" disabled="disabled" title="Status"></td>
				</tr>
				<tr>
					<td><b>Name</b></td>
					<td><input style="padding: 5px 5px; margin: 8px 0; border: 2px solid #ccc; border-radius:6px; color:brown;" type="text" name="name" placeholder="Enter Name" title="Name"></td>
					<td><b>ID no.</b></td>
					<td><input style="padding: 5px 5px; margin: 8px 0; border: 2px solid #ccc; border-radius:6px; color:brown;" type="text" name="idno" placeholder="Enter ID" title="ID"></td>
				</tr>
				
				<tr>
					<td><b>City</b></td>
					<td><select style="padding: 5px 5px; margin:8px 0; display: inline-block; border:1px solid #ccc; border-radius: 4px; box-sizing: border-box; color:brown;" name="city">
						<option>--select--</option>
						<option>Mumbai</option>
						<option>New Delhi</option>
						<option>Bengalore</option>
					</select></td>
				</tr>
				<tr>
					<td><b>District</b></td>
					<td><select style="padding: 5px 5px; margin:8px 0; display: inline-block; border:1px solid #ccc; border-radius: 4px; box-sizing: border-box; color:brown;" name="dis">
						<option>--select--</option>
						<option>Mumbai</option>
						<option>New Delhi</option>
						<option>Bengalore</option>
					</select></td>
				</tr>
				<tr>
					<td><b>State</b></td>
					<td><select style="padding: 5px 5px; margin:8px 0; display: inline-block; border:1px solid #ccc; border-radius: 4px; box-sizing: border-box; color:brown;" name="state">
						<option>--select--</option>
						<option>Maharashtra</option>
						<option>New Delhi</option>
						<option>A.P</option>
					</select></td>
				</tr>
				<tr>
					<td><b>E-mail</b></td>
					<td><input  style="padding: 5px 5px; margin: 8px 0; border: 2px solid #ccc; border-radius:4px; color:brown;" type="text" name="email" placeholder="Enter E-mail" title="E-mail"></td>
				</tr>
				<tr>
					<td><b>Check in</b></td>
					<td><input  style="padding: 5px 5px; margin: 8px 0; border: 2px solid #ccc; border-radius:4px; color:brown;" type="date" name="coin" value="<?php echo $ci;  ?>" title="Check in"></td>
					<td><b>Check out</b></td>
					<td><input  style="padding: 5px 5px; margin: 8px 0; border: 2px solid #ccc; border-radius:4px; color:brown;" type="date" name="coout" value="<?php echo $co;  ?>" title="Check out"></td>
				</tr>
				<tr>
					<td><b>Members</b></td>
					<td><input  style="padding: 5px 5px; margin: 8px 0; border: 2px solid #ccc; border-radius:4px; color:brown;" type="text" name="m" placeholder="Enter Members" title="Members"></td>
				</tr>
				<td>
					<td><input style="width: 120px; height: 40px; border-radius: 20px; opacity: 0.7; color:brown;" type="submit" name="submit" value="submit"></td>
				</td>

                    <?php    }
                    else
                    {
                    	?>
                           <tr>
					<td>Status</td>
					<td><input type="text" name="Status" value="Not-Available" disabled="disabled" title="Status"></td>
				</tr>          
                    	<?php
                    }
				
				?>
				
				
			</table>
		</form>
		<?php
        if(isset($_POST['submit']))
        {
        	$name=$_POST['name'];
        	$idno=$_POST['idno'];
            $city=$_POST['city'];
        	$dis=$_POST['dis'];
        	$state=$_POST['state'];
           $email=$_POST['email'];
            $coin=$_POST['coin'];
        	$coout=$_POST['coout'];
        		$m=$_POST['m'];


        		if(mysqli_query($a,"insert into details(name,city,dis,email,state,cidate,codate,m,idno) values('$name','$city','$dis','$email','$state','$coin','$coout','$m','$idno')"))
        		{
        			mysqli_query($a,"update room set status='Booked' where rno=$rno");
        			header("Location:fi.php");
        		}
        		else
        		{
        			echo "data not inserted";
        		}
       }
       
		?>			</div>
		</div>
	</div>
	</div>
	
  </div>
</body>

</html>