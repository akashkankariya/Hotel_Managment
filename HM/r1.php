<?php 
include("connect.php");
$r=$_GET['room'];
$ci=$_GET['ci'];
$co=$_GET['co'];
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
		<div id="bg" style="background-image: url('img/deluxe_sea_view_5.jpg');width: 100%;height: 1200px;">
		<div id="header">
			<div id="logo">
				<h2><font color="white">Marina Mirage</font></h2>
			</div>
			<div id="nav">
				<ul>
					<li><a href="start.php">Home</a></li>
					<li><a href="r1.php">Registration</a></li>
					<li><a href="booking.php">Booking</a></li>
					<li><a href="#">Info</a></li>
					<li><a href="contact.php">Help</a></li>
				</ul>
			</div>
		</div>
		<div id="banner">
			<div id="form">
			<form action="r1.php" method="post">
			<table>
				<?php 
					$q="select * from room where status='unbook'";
					$run=mysqli_query($a,$q);
					$num=mysqli_num_rows($run);
					if($r<=$num){
						?><tr>
					<td>Status</td>
					<td><input type="text" name="satus" disabled="disabled" value="Available"></td>
				</tr>

				<tr>
					<td>Name</td>
					<td><input type="text" name="name" placeholder="Enter Name" title="Name" 
					></td>
					<td><input type="text" name="idno" placeholder="Enter ID" title="Id"></td>
				</tr>
				<tr>
					<td>Address</td>
					<td><input type="test" name="address" placeholder="Enter Address" title="Address"></td>
				</tr>
				<tr>
					<td>City</td>
					<td>
						<select name="city">
							<option>--Select--</option>
							<option>Mumbai</option>
							<option>Dheli</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>District</td>
					<td><input type="text" name="dis" placeholder="Enter dis" title="E-mail"></td>
				</tr>
				<tr>
					<td>State</td>
					<td>
						<select name="state">
							<option>--Select--</option>
							<option>Maharashtra</option>
							<option>Gujrat</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Enter Email</td>
					<td><input type="Email" name="email" placeholder="Enter Email" title="E-mail"></td>
				</tr>
				<tr>
					<td>Check-In</td>
					<td><input type="date" name="cidate" value="<?php echo $ci ?>" title="Check in"></td>
					<td>Check Out</td>
					<td><input type="date" name="codate" value="<?php echo $co ?>" title="Check out"></td>
				</tr>
				<tr>
					<td>Enter number of Members</td>
					<td><input type="int" name="members" placeholder="Enter number of members" title="Enter Number"></td>
				</tr>
				<tr>
					<td><input style="width: 120px;height: 30px;border-radius: 20px;opacity: 0.9;" type="submit" name="submit" value="submit"></td>
				</tr>
			<?php  					}
			else{
				?><table>
					<tr><input type="text" name="satus" disabled="disabled" value="Unavailable"></tr>
				</table>
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
		</div>
		</div>
		</div>
	</div>
</body>
</html>