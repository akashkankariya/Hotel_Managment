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
			<div id="header" >
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
			<div id="banner"></div>
			<center>
			<div id="f1" style="width: 80%">
				<table>
					<tr>
						<th width="20%" height="50px">Destination</th>
						<th width="20%" height="50px">Check in date</th>
						<th width="20%" height="50px">Check out Date</th>
						<th width="20%" height="50px">Room</th>
						<td rowspan="2"><input type="submit" name=sub" value="Check"></td>
					</tr>
					<tr>
						<td width="20%" height="50px"><center><input type="text" name="d1" placeholder="Enter Destination"></center></td>
						<td width="20%" height="50px"><center><input type="date" name="ci"></center></td>
						<td width="20%" height="50px"><center><input type="date" name="co"></center></td>
						<td width="20%" height="50px">
							<center><select>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
							</select></center>
						</td>
					</tr>
				</table>
			</div>
			</center>
		</div> 
	</div>
</body>
</html>