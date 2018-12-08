<?php
include("connection.php");
$rno=$_GET['rno'];
if(mysqli_query($a,"update room set status='unbook' where rno=$rno"))
{
	mysqli_query($a,"delete from f1 where rono=$rno");
	header("Location:rd.php");
}
?>