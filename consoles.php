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
if($_COOKIE["login"] == NULL){
	header("Location: reg.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Консоли</title>
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.cdnfonts.com/css/quantico" rel="stylesheet">
</head>
<body onload="document.getElementsByName ('anchor') [0].scrollIntoView (1)">
	<header class="headerr">
		<div style="display: flex;">
			<img src="Images/BackgroundHeader.png" class="headerBackground">
			<a href="index.php">
				<div>	
					<img src="Images/Logo.png" class="logo" style="pointer-events: none;" name="anchor">
				</div>
			</a>
			<div class="navigText"> <p><a href="index.php">Главная</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="news.php">Новости</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="about.php">О нас</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="ЧАВО.php">ЧАВО</a>&nbsp;&nbsp;|&nbsp;&nbsp;</p> </div>
		</div>
		<div class="mainChoiseDiv">
			<a href="index.php"> 
				<div class="choiseDiv">
					<p class="choise">Игры</p>
				</div>
			</a>
			<a href="">
				<div class="choiseDiv">
					<p class="choise1">Консоли</p>
				</div>
			</a>
		</div>
	</header>
	<div style="display:flex;">
		<div class="leftZone"><img src="Images/Stars.png" class="leftStars" style="pointer-events: none; "></div>
		<div class="middleZone">
			<a href="consoles.php?choiseType=sega">
				<div class="blockGame">
					<img src="Images/sega.jpg">
					<p>Sega Megadrive/Genesis (gen)</p>
				</div>
				<a href="consoles.php?choiseType=nes">
					<div class="blockGame">
						<img src="Images/dendy.jpg">
						<p>Dendy (nes)</p>
					</div>
				</a>
				<br><hr>
				<?php
				$choiseType = $_GET['choiseType'];
				$content = mysqli_query($conn, "SELECT content FROM `games` WHERE type = '$choiseType'");
				for ($i= 0; $i < 6; $i++) { 
					echo mysqli_fetch_array($content)[0];
				}
				?>
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