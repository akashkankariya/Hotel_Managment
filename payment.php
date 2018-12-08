<?php 
include("connect.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Marina Mirage</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="img/logo.png" rel="icon">
</head>
<body>
	<div id="full">
		<div style="background-image: url('img/booking.jpg');width: 100%;height: 750px;">
		<div id="header">
				<center><h2><font color="black">Marina Mirage<br><br>Make your Payment </font></h2></center>
		</div>
		<div>
			<?php 
			if(isset($_POST['submit']))
			{
				$name=$_POST['name'];
				$idno=$_POST['idno'];
				$add=$_POST['address'];
				$city=$_POST['city'];
				$dis=$_POST['dis'];
				$state=$_POST['state'];
				$email=$_POST['email'];
				$coout=$_POST['codate'];
				$coin=$_POST['cidate'];
				$m=$_POST['members'];
				if(mysqli_query($a,"insert into f1(name,city,dis,email,state,cidate,codate,member,id,address) value('$name','$city','$dis','$email','$state','$coin','$coout','$m','$idno','$add')"))
				{
					echo "data done";
				}
				else{
					echo "string";
				}
			}
			 ?>
			<h2>Payment Mode</h2>
			<form action="done.php">
					<input type="radio" name="payment" value="Debit Card" checked>Debit Card<br>
					<input type="radio" name="payment" value="Credit Card">Credit Card<br>
					<input type="radio" name="payment" value="NetBaking">Net Banking<br>
					<br>
					<input style="width: 120px;height: 30px;border-radius: 20px;opacity: 0.9;" type="submit" name="submit" value="submit">
			</form>
		</div>
</body>
</html>