<?php
include("connection.php");
$idno=$_GET['idno'];
if(mysqli_query($a,"delete from f1 where id=$idno"))
{
	header("Location:booking.php");
}
?>