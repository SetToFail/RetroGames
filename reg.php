<?php
$servername = "127.0.0.1:3306";
$database = "RetroGames";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, $database);
mysqli_query($conn, "SET NAMES utf8");
if (!$conn) {
	die('<p style="color:red">'.mysqli_connect_errno().' - '.mysqli_connect_error().'</p>');
}
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
mysqli_query($conn, "SET NAMES utf8");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>RetroGames</title>
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
			<div class="navigText"> <p align="center" class="titleAuth">Регистрация</p> </div>
		</div>
		
	</header>
	<div style="display:flex;">
		<div class="leftZone"><img src="Images/Stars.png" class="leftStars" style="pointer-events: none; "></div>
		<div class="middleZone">
			<div class="blockAuth">
				<form method="post">
					<h1 style="color: #00FFFE;
					font: 25px 'Press Start 2P'; margin-bottom:8%">Авторизация</h1>
					<label>Логин</label>
					<input type="text" placeholder="Введите логин" name="logi">
					<label>Пароль</label>
					<input type="password" placeholder="Введите пароль" name="pas">
					<button name="authB"> Войти</button>
					<?php 
					function generateCode($length=6) {
						$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHI JKLMNOPRQSTUVWXYZ0123456789";
						$code = "";
						$clen = strlen($chars) - 1;
						while (strlen($code) < $length) {
							$code .= $chars[mt_rand(0,$clen)];
						}
						return $code;
					}
					if(isset($_POST['authB'])){
						$logi = $_POST['logi'];
						$pas = $_POST['pas'];
						$query = mysqli_query($conn,"SELECT id, password FROM users WHERE login='".mysqli_real_escape_string($conn,$logi)."' LIMIT 1");
						$data = mysqli_fetch_assoc($query);
						if($data['password'] == md5(md5($pas))){
							$hash = md5(generateCode(10));
							mysqli_query($conn, "UPDATE users SET hash='".$hash."' ".$insip." WHERE id='".$data['id']."'");
							setcookie("id", $data['id'], time()+60*60*24*30, "/");
							setcookie("hash", $hash, time()+60*60*24*30, "/", null, null, true);
							setcookie("login", $logi);
							header("Location: index.php"); 
						}
						else{
							echo $data['password'], md5(md5(trim($pas)));
							print "Вы ввели неправильный логин/пароль";
						}
					}
					?>
				</form>
			</div>
			<div class="blockAuth">
				<form method="post">
					<h1 style="color: #00FFFE;
					font: 25px 'Press Start 2P'; margin-bottom:8%">Регистрация</h1>
					<label>Логин</label>
					<input type="text" placeholder="Введите логин" name="login">
					<label>Почта</label>
					<input type="email" name="email" placeholder="Введите почту">
					<label>Пароль</label>
					<input type="password" name="pass" placeholder="Введите пароль">
					<input type="password" name="repPass" placeholder="Подтвердите пароль">
					<input type="submit" name="reg" value="Зарегистрироваться" class="reg">
					<?php 
					if (isset($_POST['reg'])){
						$login = $_POST['login'];
						$pass = $_POST['pass'];
						$passRep = $_POST['repPass'];
						$email = $_POST['email'];
						$checkLogin = mysqli_query($conn, "SELECT id FROM users WHERE login='".mysqli_real_escape_string($conn, $login)."'");
						$checkMail = mysqli_query($conn, "SELECT id FROM users WHERE email='".mysqli_real_escape_string($conn, $email)."'");
						if(mysqli_num_rows($checkMail) > 0)
						{
							echo "Данный почтовый адрес занят";
						}
						else if(mysqli_num_rows($checkLogin) > 0)
						{
							echo "Как жаль, такой пользователь уже существует";
						}
						else if(!preg_match("/^[a-zA-Z0-9]+$/",$login))
						{
							echo "<p>Логин может состоять только из букв английского алфавита и цифр </p>";
						}
						else if(strlen($pass) < 8 or strlen($pass) > 30) {
							echo '<p> Пароль начинается от 8 до 30 символов </p>';
						}else if($pass !== $passRep){
							echo '<p> Неверное подтверждение пароля! </p>';
						}else if(strlen($login) <3){
							echo '<p> Логин начинается от 3 символов</p>';
						}else{
							$hash = md5(generateCode(10));
							$pass = md5(md5(trim($pass)));
							$query = mysqli_query($conn,"INSERT INTO `users` (id, login, password, email, hash) VALUES (NULL, '$login', '$pass', '$email', '$hash')");
							echo '<p> Вы успешно зарегистрировались</p>';
						}
					}
					?>
				</form>
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
