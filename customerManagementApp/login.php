<!doctype html>
<html lang="tr">
<head>
<meta charset="utf-8">
<title>Giriş Yap</title>
	<link rel="stylesheet" href="login_style.css">
</head>

<body>
	<div class="signup-form">
		<form action="login.php" method="post">
			<h1>Giriş Yap</h1>
			<input type="text" name="username" placeholder="Kullanıcı adı .." class="txt">
			<input type="password" name="password" placeholder="Şifre .." class="txt">
			<input type="submit" value="Giriş Yap" class="signup-btn">
		</form>
	</div>
	
	<?php
	/*
	$servername = "localhost" ;
	$username = "root" ;
	$password = "" ;
	$database= "members";
	

	$baglanti = new MySQLi ($servername , $username , $password,$database) ;
	$baglanti->close();
	*/
	
	session_start();
	if(isset($_POST["username"],$_POST["password"]))
	{
		if($_POST["username"]=="admin" && $_POST["password"]=="123456")
		{
			$_SESSION["user"]=$_POST["username"];
			header("Location:projelistele.php");
		}
		else
		{
			echo "<script>alert('Kullanıcı Adı veya Şifre Yanlış')</script>";
		}
	}

    ?>

	
	
</body>
</html>