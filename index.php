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

if (isset($_COOKIE['id']) and isset($_COOKIE['hash']))
{
	$query = mysqli_query($conn, "SELECT *,INET_NTOA(ip) AS ip FROM users WHERE id = '".intval($_COOKIE['id'])."' LIMIT 1");
	$userdata = mysqli_fetch_assoc($query);

	if(($userdata['hash'] !== $_COOKIE['hash']) or ($userdata['id'] !== $_COOKIE['id'])
		or (($userdata['ip'] !== $_SERVER['REMOTE_ADDR'])  and ($userdata['ip'] !== "0")))
	{
		setcookie("id", "", time() - 3600*24*30*12, "/");
        setcookie("hash", "", time() - 3600*24*30*12, "/", null, null, true);
        print "Хм, что-то не получилось";
    }
    else
    {
    	print "Привет, ".$userdata['login'].". Всё работает!";
    }
}
else
{
	print "Включите куки";
}
mysqli_query($conn, "SET NAMES utf8");
$page = $_GET['page'];
$count = 3;
$login = $_POST['login'];
if($_COOKIE["login"] == NULL){
	header("Location: reg.php");
}
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
<body onload="document.getElementsByName ('anchor') [0].scrollIntoView (1)">

	<header class="headerr">
		<div style="display: flex;">
			<img src="Images/BackgroundHeader.png" class="headerBackground">
			<a href="index.php">
				<div>	
					<img src="Images/Logo.png" class="logo" style="pointer-events: none;" name="anchor">
				</div>
			</a>
			<div class="navigText"> <p align="center"><a href="index.php">Главная</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="news.php">Новости</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="about.php">О нас</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="ЧАВО.php">ЧАВО</a>&nbsp;&nbsp;</p> </div>
		</div>

	</div>
	<div class="mainChoiseDiv">
		<a href=""> 
			<div class="choiseDiv">
				<p class="choise1">Игры</p>
			</div>
		</a>
		<a href="consoles.php">
			<div class="choiseDiv">
				<p class="choise">Консоли</p>
			</div>
		</a>
	</div>
</header>
<div style="display:flex;">
	<div class="leftZone"><img src="Images/Stars.png" class="leftStars" style="pointer-events: none; "></div>
	<div class="middleZone">
		<form method="POST">
			<p class="loginT"> <?php echo $_COOKIE['login']; ?></p>
			<button class="exit" name="exit">Выход</button>
			<?php
			if(isset($_POST['exit'])){
				setcookie("id", "", time() - 3600*24*30*12, "/");
				setcookie("hash", "", time() - 3600*24*30*12, "/",null,null,true);
				setcookie("login", "");
				header("Location: reg.php"); 
			}
			?>
		</form>
		<?php 
		if ($page == 0) {
			$page = 1;
		}
		$countStart = (-6) + ($page * 6);
		$countEnd = 0 + ($page *6);
		$content = mysqli_query($conn, "SELECT content FROM `games` WHERE id <= $countEnd AND $countStart < id");
		for ($i= $countStart; $i < $countEnd; $i++) { 
			echo mysqli_fetch_array($content)[0];
		}
		?>
		<div class="pages" align="center">
			<a href="index.php?page=1">1</a>
			<a href="index.php?page=2">2</a>
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
		<img src="Images/robFooter.png" style="position: absolute; margin-left: -3.3%; margin-top: -5.5%; overflow: hide;">
		<a href="">
			<p style="position: absolute; font: 25px black; font-family: 'Quantico'; color: black;">Support: retrogames@gmail.com</p>
		</a>
	</div>
</div>
</div>

</body>
</html>