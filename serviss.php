<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	
	<?php 
	$plaka = $_POST["plaka"];
	$rhst = $_POST["ruhsat"];
	$mark = $_POST["marka"];
	$mdl = $_POST["model"];
	$ykt = $_POST["yakit"];
	$notunuz = $_POST["not"];
	
	echo("Şimdi Yazdırıyoruz");
	echo("<br>");
	
	echo("Aracın Plakası = ".$plaka);
	echo("<br>");
	
	echo("Aracın Ruhsat Numarası = ".$rhst);
	echo("<br>");
	
	echo("Aracın Markası = ".$mark);
	echo("<br>");
	
	echo("Aracın Modeli = ".$mdl);
	echo("<br>");
	
	if($ykt=="lpg")
	{
		echo("Aracın Yakıt Tipi = çok öfkeli");
	}
	else
	{
		echo("Aracın Yakıtı = ".$ykt);
	}
	echo("<br>");
	
	echo("Lütfen Notunuzu Brakınız = ".$notunuz);
	echo("<br>");
	
	?>
	
	
</body>
</html>