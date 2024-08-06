<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Servis</title>
</head>

<body>
	
	<?php 
	
		$mail = $_POST['mail'];
		$sifre = md5($_POST['sifre']);
		$ad = $_POST['ad'];
		$soyad = $_POST['soyad'];
		$il = $_POST['il'];
		$ilce = $_POST['marka'];
		$ilce = $_POST['model'];
		$ilce = $_POST['yil'];
	
		include("baglanti.php");
	
		$sorgucumlem = "INSERT INTO `uye`(`uye_mail`, `uye_sifre`, `uye_ad`, `uye_soyad`, `uye_il`, `uye_marka`, 'uye_model', 'uye_yil') VALUES ('$mail','$sifre','$ad','$soyad','$il','$marka','$model','$yil')";
	
		$yapistir = mysqli_query($baglayicim, $sorgucumlem);
	
	?>
	
</body>
</html>