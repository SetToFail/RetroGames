<?php
$servername = "localhost";
$database = "RetroGames";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, $database);
mysqli_query($conn, "SET NAMES utf8");
if (!$conn) {
	die('<p style="color:red">'.mysqli_connect_errno().' - '.mysqli_connect_error().'</p>');
}
$page = $_GET['page'];
$count = 3;	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Главная страница</title>
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.cdnfonts.com/css/quantico" rel="stylesheet">
</head>
<body>
	<header class="headerr">
		<div style="display: flex;">
			<img src="Images/BackgroundHeader.png" class="headerBackground">
			<a href="index.php">
				<div>	
					<img src="Images/Logo.png" class="logo" style="pointer-events: none;">
				</div>
			</a>
			<div class="navigText"> <p align="center"><a href="index.php">Главная</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="news.php">Новости</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="about.php">О нас</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="ЧАВО.php">ЧАВО</a>&nbsp;&nbsp;</p> </div>
		</div>
		</div>

	</header>
	<div style="display:flex;">
		<div class="leftZone"><img src="Images/Stars.png" class="leftStars" style="pointer-events: none; "></div>

		<div class="middleZone">
			<div class="choiseDivNews" align="center">
					<p class="choiseNews">ЧАВО</p>
				</div>
						<div>
			<p>p</p><p>s</p>
		</div>
			</div>
			<div class="rightZone"> <img src="Images/Stars.png" class="rightStars" style="pointer-events: none; "></div>
		</div>
		<div style="display:flex;">
			<img src="Images/BackgroundHeader.png" class="footerBackground">
			<div class="leftZone" style="display: relative">
				<a href="">
					<img src="Images/vkLogo.png" class="vk">
				</a>
				<a href="">
					<img src="Images/tgLogo.png" class="telegram">
				</a>
				<a href="">
					<img src="Images/okLogo.png" class="ok">
				</a>
				<a href="">
					<img src="Images/twitterLogo.png" class="twitter">
				</a>
			</div>
			<div class="middleZone" style="display: absolute; margin-left:25%; margin-top: 45%">
				<img src="Images/catFooter.png" style="position: absolute; margin-left: -16%; margin-top: -8%; overflow:hide">
				<a href="#">
					<p style="position: absolute; font: 25px black; font-family: 'Quantico'; color: black;">Copyright all right reserved</p>
				</a>
			</div>
			<div class="rightZone" style="display:absolute; margin-top: 44%;">
				<img src="Images/robFooter.png" style="position: absolute; margin-left: -3.3%; margin-top: -5.5%; overflow: hide;">
				<a href="">
					<p style="position: absolute; font: 25px black; font-family: 'Quantico'; color: black;">Support: retrogames@gmail.com</p>
				</a>
			</div>
		</div>
	</div>

</body>
</html>