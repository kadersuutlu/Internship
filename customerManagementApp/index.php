<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Müşteri / Proje Yönetim Paneli</title>
	<link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<script src="https://kit.fontawesome.com/c20485228a.js" crossorigin="anonymous"></script>

</head>
<body>
    <div class="header">
        <h2 class="logo">Müşteri / Proje Yönetim Paneli</h2>
        <input type="checkbox" id="chk" >
        <label for="chk" class="show-menu-btn">
            <i class="fas fa-bars"></i>
        </label>

        <ul class="menu">
            <a href="index.php"><i class="fas fa-home icon"></i>Anasayfa</a>
            <a href="about.php"><i class="fas fa-info icon"></i>Hakkımda</a>
			<a href="contact.html"><i class="far fa-envelope icon"></i>İletişim</a>
            <label for="chk" class="hide-menu-btn">
                <i class="fas fa-times"></i>
            </label>
            <input type="button" onClick="location.href='login.php'" value="Giriş Yap">
       </ul>
	
    </div>
	
	<section id="homepage">
		<div id="black">
			
		</div>
		
		<div id="container">
			<h2>Müşteri / Proje Yönetim Projesi</h2>
			<hr width="300" align="left"> 
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt nihil itaque aliquid blanditiis in sequi ipsa consectetur laudantium, quo soluta! Veniam nam, ea voluptatum vel. Incidunt recusandae, harum doloremque cupiditate.</p>
		</div>
		
	</section>

	

	<!--
	
	<div class="slidershow middle">
	<div class="slides">
		<input type="radio" name="r" id="r1" checked>
		<input type="radio" name="r" id="r2">
		<input type="radio" name="r" id="r3">
		<input type="radio" name="r" id="r4">
		<input type="radio" name="r" id="r5">
		
		
		<div class="slide s1">
		<img src="img/pic1.png" alt="">
		</div>
		<div class="slide">
		<img src="img/pic2.png" alt="">
		</div><div class="slide">
		<img src="img/pic3.png" alt="">
		</div>
		<div class="slide">
		<img src="img/pic4.png" alt="">
		</div>
		<div class="slide">
		<img src="img/pic5.png" alt="">
		</div>
		
	</div>
		<div class="navigation">
			<label for="r1" class="bar"></label>
			<label for="r2" class="bar"></label>
			<label for="r3" class="bar"></label>
			<label for="r4" class="bar"></label>
			<label for="r5" class="bar"></label>
		</div>
	</div>
-->
	
    <?php
	/*
   session_start(); 
	if($_SESSION["user"]==""){
		echo "<script>window.location.href='cıkıs.php'</script>";
	}
	else{
		
	}
*/
    ?>
</body>
</html>