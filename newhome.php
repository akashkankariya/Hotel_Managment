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
		<div id="header">
			<div id="logo"><h1><font color="Black">Marina Mirage</font></h1></div>
			<div id="nav">
				<ul>
					<li><a href="start.php">Home</a></li>
					<li><a href="contact.php">Contect Us</a></li>
					<li><a href="bms.php">BOOK MY STAY</a></li>
					<li><a href="info.php">Our Hotel</a></li>
				</ul>
			</div>
		</div>
		<div id="slider">
			<figure>
				<img src="img/ask.jpg">
				<img src="img/sk.jpg">
				<img src="img/ask.jpg">
				<img src="img/ask.jpg">
				<img src="img/ask.jpg">
			</figure>
		</div>
		
	</div>

</body>
</html>