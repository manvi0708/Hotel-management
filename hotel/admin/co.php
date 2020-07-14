<?php
include("connection.php");
$rno=$_GET['rno'];
if(mysqli_query($a,"update room set status='UnBooked' where rno=$rno"))
{
	header("Location:rd.php");
}
?>