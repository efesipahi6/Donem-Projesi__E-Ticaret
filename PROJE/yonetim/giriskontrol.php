<?php
session_start();
include 'baglanti.php';
//error_reporting(0);
$kadi = $_POST["kadi"];
$sifre = md5($_POST["sifre"]);
//BOŞLUK KONTROLÜ
$sorgu = $db->prepare("select * from yoneticiler where kadi= :kadi and sifre= :sifre");
$sorgu -> bindParam(":kadi", $kadi, PDO::PARAM_STR);
$sorgu -> bindParam(":sifre", $sifre, PDO::PARAM_STR);
$sorgu->execute();
if($sorgu->rowCount() > 0){
foreach( $sorgu as $row ):
if($row["kadi"] == $kadi && $row["sifre"] == $sifre){
$_SESSION['admin'] = $kadi;
header("location:index.php");
}
else{
header("location:giris.php?durum=hata");
}
endforeach;
}
else{
header("location:giris.php?durum=hata"); //PANELE YÖNLENDİRME
}
?>