<?php
include("baglanti.php");
$kullaniciadi = $_POST['eposta'];
$sifre = md5($_POST['pass']);

$sorgu = "SELECT uye_mail, uye_sifre FROM uye WHERE uye_mail = '$kullaniciadi' AND uye_sifre = '$sifre'";
$sorgugonder = mysqli_query($baglayicim, $sorgu);
$satirsayisi = mysqli_num_rows($sorgugonder);

if ($satirsayisi ==1){
    echo "giriş başarılı";
} else {
    echo "giriş başarısız";
}
?>