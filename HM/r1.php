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
					<li><a href="#">Home</a></li>
					<li><a href="#">Login</a></li>
					<li><a href="#">Booking</a></li>
					<li><a href="#">Info</a></li>
					<li><a href="#">Help</a></li>
				</ul>
			</div>
		</div>
		<div id="banner">
			<div id="form">
			<table>
				<tr>
					<td>Status</td>
					<td><output>Available</output></td>
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
						<select>
							<option>--Select--</option>
							<option>Mumbai</option>
							<option>Dheli</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>State</td>
					<td>
						<select>
							<option>--Select--</option>
							<option>Maharashtra</option>
							<option>Gujrat</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Enter Email</td>
					<td><input type="Email" name="Email" placeholder="Enter Email" title="E-mail"></td>
				</tr>
				<tr>
					<td>Check-In</td>
					<td><input type="date" name="seein" placeholder="Check-In" title="Check in"></td>
					<td>Check Out</td>
					<td><input type="date" name="seeout" placeholder="Check out" title="Check out"></td>
				</tr>
				<tr>
					<td>Enter number of Members</td>
					<td><input type="int" name="members" placeholder="Enter number of members" title="Enter Number"></td>
				</tr>
				<tr>
					<td><input style="width: 120px;height: 30px;border-radius: 20px;opacity: 0.9;" type="submit" name="submit" value="submit"></td>
				</tr>
			</table>
		</div>
		</div>
		</div>
	</div>
</body>
</html>