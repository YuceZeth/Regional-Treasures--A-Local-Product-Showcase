<?php
$conn = mysqli_connect("localhost","root","","yesilada_yoresel_urunler");

/* Bağlantı Kontrolu */
if ( mysqli_connect_errno() ) {
	echo "Bağlantı Başarısız. Hata : ".mysqli_connect_error();
	die();
}
else {
	//echo "Bağlantı Başarılı";	
}
	mysqli_query($conn,"SET NAMES 'utf8'");
?>