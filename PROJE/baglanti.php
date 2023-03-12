<?php 

$host = "localhost";
$kullanici = "root";
$parolaa = "";
$vt = "projee";

$baglanti = mysqli_connect($host, $kullanici, $parolaa, $vt);
mysqli_set_charset($baglanti, "UTF8");

?>