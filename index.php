<!DOCTYPE html>
<html>
<head>
	<title>Home (Hotel Management)</title>
	<link rel="stylesheet" type="text/css" href="css/style2.css">
	<link href="img/LOGO.png" type="img/icon" rel="icon">
	<script type="text/javascript" src="jquery/jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#btn').click(function(){
				$('#nav').slideToggle();
			});
		});
	</script>

</head>
<body>
	<div id="full">
		<div style="background-image: url('img/aaa.jpeg'); width:100%;height: 700px;background-size:cover;">
		<div id="header">
			<div id="logo">
				<h1><font color="white">Marina Mirage</font></h1>
			</div>
			<div><button id="btn">Menu</button></div>
			<div id="nav">
				<ul>
					<li><a href="start.php">Home</a></li>
					<li><a href="contact.php">Contact Us</a></li>
					<li><a href="bms.php">BOOK MY STAY</a></li>
					<li><a href="info.php">Offers</a></li>

				</ul>
			</div>
		</div>
	</div>
	</div>
	<div id="f1">
		<form action="r1.php" method="get">
		<center><table>
			<tr>
				<th width="20%" height="50px">Destination</th>
				<th width="20%" height="50px">Check In Date</th>
				<th width="20%" height="50px">Check Out Date</th>
				<th width="20%" height="50px">Room</th>
				<td rowspan="2"><input type="submit" value="Check" name="sub"></td>
			</tr>
			<tr>
				<td width="20%" height="50px"><center>Mumbai</center></td>
				<td width="20%" height="50px"><center><input type="date" name="ci"></center></td>
				<td width="20%" height="50px"><center><input type="date" name="co"></center></td>
				<td width="20%" height="50px">
					<center><select name="room">
						<option>1</option>
					</select></center>
				</td>
			</tr>
		</table></center>
	</form>
	</div>
	<div style="background: rgb(66, 166, 66);" id="welcome">
		<h1 align="center">Welcome To Marina Mirage</h1>
		<center><font size="4">
			Quintessentially Indian in its fabric, Taj Hotels Palaces Resorts Safaris is recognized the world over for delivering a unique flavour of hospitality that offers<br>
world-class refinement while remaining deeply rooted in its local heritage. With over 100 hotels in 62 locations, Taj offers guests the refined luxury of <br>
heritage, the effortlessly efficient service and amenities and a local experience with the assurance of quality.<br>
		</font>
<h2 style="color: red;">Our Brands</h2>
	</center>
	</div>
	<div style="background: rgb(66, 166, 66);" id="g1">
		<div id="one"><img src="img/g1.jpg" width="100%">
<center>
	<h2>Taj</h2><br>
	Spanning world-renowned landmarks, modern business<br>
hotels, idyllic beach resorts, authentic Rajput palaces and<br>
rustic safari lodges, each Taj hotel reinterprets the tradition of<br>
hospitality in a refreshingly modern way to create unique<br>
experiences and lifelong memories.<br>
<font color="red">More</font>
</center>
		</div>
		<div id="two"><img src="img/g2.jpg" width="100%">
<center><h2>VIVANTA</h2>
<font>HOTEL AND RESTORENT</font><br>
Work hard and play hard. Relax and energize. Ideate and<br>
confer. Evolve and transform. Revel in a spirit that presents<br>
the normal with an unexpected twist. Stylish and<br>
sophisticated, Vivanta by Taj delivers experiences with<br>
imagination, energy and efficiency.<br>
<font color="red">More</font>
</center>
		</div>
		<div id="three"><img src="img/g3.jpg" width="100%">
<center><h2 style="color: red">GATEWAY</h2>
<font color="red">HOTEL AND RESTORENT</font><br>
The Gateway Hotels and Resorts are designed for the modern<br>
traveller. Which is why we have a 24X7 attitude across<br>
services like dining and fitness. So when you feel like a quick<br>
bite at 1 am or a heart pumping jog at 4 am, weÃ¢â‚¬â„¢ve got you<br>
covered<br>
<font color="red">More</font>
</center>
		</div>
	</div>
  </div>
</body>

</html>