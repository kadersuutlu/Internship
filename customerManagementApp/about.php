<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hakkımda</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="about_style.css">
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
            <input type="button" class="btn" onClick="location.href='login.php'" value="Giriş Yap">
       </ul>
    </div>
	
	<div class="box">
		<img src="img/profile.png">
		<h1>Kader Sutlu</h1>
		<h5>Bilgisayar Mühendisliği</h5>
		<p>Sürekli yeni şeyler öğrenerek kendimi geliştirmeye çalışıyorum.
Birçok alanda araştırmalar yaparak yapay zeka alanını öğrenme
isteğimin daha fazla olduğunu gördüm. Bu alanda eğitimler almaya
ve kendimi geliştirmeye devam ediyorum. Web Tasarımı, Mobil Uygulama ve Arduino
eğitimleri alarak projeler geliştiriyorum. Okurken çalışmak, çalışırken
öğrenmeyi amaçlıyorum. </p>
		<ul>
			<li><a href="https://www.instagram.com/miss.software/"><i class="fab fa-instagram"></i></a></li>
			<li><a href="https://www.linkedin.com/in/kadersutlu/"><i class="fab fa-linkedin"></i></a></li>
			<li><a href="https://github.com/kadersuutlu"><i class="fab fa-github"></i></a></li>
			<li><a href="https://www.gencprogramci.org/author/miss-software/"><i class="fab fa-wordpress"></i></a></li>
		</ul>
	</div>

	
   
</body>
</html>