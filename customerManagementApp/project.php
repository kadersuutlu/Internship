<!DOCTYPE html>
<html>
<head>
<style>
#customers,#project,#server {
  font-family: sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th,
#project td, #project th,
#server td, #server th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}
	#project tr:nth-child(even){background-color: #f2f2f2;}
	#server tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}
#project tr:hover {background-color: #ddd;}
#server tr:hover {background-color: #ddd;}

#customers th,#project th, #server th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

'<table id="customers">
  <tr>
   
    <th>Müşteri Adı</th>
    <th>İlgili Kişi</th>
    <th>İlgili Telefon</th>
    <th>Müşteri Adresi</th>
    <th>Proje Adı</th> 
    <th>Durum</th>
    <th>Düzenle Sil</th>
  </tr>
  <tr>
	  
	  <td>Parti Sakarya İl Başkanlığı</td>
	  <td>Ömer Şahin (Parti Başkanı)</td>
	  <td>0532 775 54 86</td>
	  <td>Semerciler Mh. Atatürk Bulvarı Adapazarı/Sakarya</td>
	  <td>Parti Mobil Uygulama Web Yönetim Paneli Yazılım Geliştirme</td>
	  <td>Aktif Pasif</td>
	  <td><button>Düzenle</button><button>Sil</button></td>
</tr>
</table>
	<table id="project">
		<tr>
			<th>Proje Adı</th> 
	 <th>Proje Plat.</th>
    <th>Proje Teslim Tarihi</th>
    <th>Kullanılan Tekn.</th>
    <th>Alan Adı Kayıt</th>
			<th>Proje Detayları</th>
			
    <th>Durum</th>
    <th>Düzenle Sil</th>
		</tr>
		<tr>
		<td>Parti Mobil Uygulama Web Yönetim Paneli Yazılım Geliştirme</td>
	  <td>Web, Android, Ios</td>
	  <td>30.08.2021</td>
	  <td>PHP, Mysql, Javascript, HTML, CSS, Bootstrap 5, Material Design, React Native</td>
	  <td>Godaddy</td>
			<td>(Uzun Metin, Projeye ait diğer bilgiler)</td>
			 <td>Aktif Pasif</td>
	  <td><button>Düzenle</button><button>Sil</button></td>
		</tr>
	</table>
	<table id="server">
		<tr>
			<th>Sunucu Kayıt</th>
    <th>Sunucu IP</th>
    <th>Sunucu Panel Adresi</th>
    <th>Sunucu Kullanıcı</th>
    <th>Sunucu Şifre</th>
    <th>Web Paneli Adresi</th>
    <th>Web Paneli Şifre</th>
    <th>Mail Sunucu Kayıt</th>
    <th>Mail Bilgileri</th>
			<th>Proje Adı</th> 
			
    <th>Durum</th>
    <th>Düzenle Sil</th>
	 
		</tr>
		<tr>
			<td>Digital Ocean</td>
	  <td>123.12.23.13</td>
	  <td>https://123.12.23.13/plesk</td>
	  <td>admin</td>
	  <td>123456</td>
	  <td>admin</td>
	  <td>123456</td>
	  <td>Yandex / ekonsoft</td>
	  <td>(Uzun Metin, Mail adresleri ve şifreleri)</td>
	  <td>(Uzun Metin, Projeye ait diğer bilgiler)</td>
			<td>Parti Mobil Uygulama Web Yönetim Paneli Yazılım Geliştirme</td>
			 <td>Aktif Pasif</td>
	  <td><button>Düzenle</button><button>Sil</button></td>
		</tr>
	</table>'

</body>
</html>
