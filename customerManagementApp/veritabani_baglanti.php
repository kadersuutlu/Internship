<?php
$database=@new mysqli('localhost','root','','management');
if($database->connect_error){
	die($database->connect_error);
}
else{
	echo "Sunucu ile bağlantı kuruldu.";
}

$sonuc=$database->query('SELECT * FROM project');
$row=$sonuc->fetch_array();
print_r($row);
















$database->close();
?>