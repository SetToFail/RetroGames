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
$title = mysqli_query($conn, "SELECT description FROM `news` WHERE title = ". $_GET['name']);
$content = mysqli_query($conn, "SELECT way FROM `games` WHERE name = ". $_GET['name']);
$type = mysqli_query($conn, "SELECT type FROM `games` WHERE name = ". $_GET['name']);
$name = mysqli_query($conn, "SELECT name FROM `games` WHERE name = ". $_GET['name']);
if($_COOKIE["login"] == NULL){
	header("Location: reg.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>О нас</title>
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.cdnfonts.com/css/quantico" rel="stylesheet">
</head>
<body onload="document.getElementsByName ('anchor') [0].scrollIntoView (1)">
	<header class="headerr">
		<div style="display: flex;">
			<img src="Images/BackgroundHeader.png" class="headerBackground">
				<div>	
					<a href="index.php"><img src="Images/Logo.png" class="logo" style="pointer-events: none;" name="anchor"></a>
				</div>
			<div class="navigText"> <p align="center"><a href="index.php">Главная</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="news.php">Новости</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="about.php">О нас</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="ЧАВО.php">ЧАВО</a>&nbsp;&nbsp;</p> </div>
		</div>

	</header>
	<div style="display:flex;">
		<div class="leftZone"><img src="Images/Stars.png" class="leftStars" style="pointer-events: none; "></div>
		<div class="middleZone">
			<div class="choiseDivNews" align="center">
				<p class="choiseNews">О нас</p>
			</div>
			<div style="display: flex; margin-top: 15%;">
				<p style="margin-top:22%" class="newsDescription">Данный сайт разрабатывался для дипломной работы, что очень сильно повысило навыки вёрстки, работы с БД и множество других вещей. Спасибо большое преподователям что научили на первый взгляд непостижимым вещам <3 <3 <3</p></p>
					<img src="Images/about.png" class="imgKitty" align="right">
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