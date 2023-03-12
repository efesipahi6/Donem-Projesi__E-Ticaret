<?php 
include_once 'baglanti.php'; 

if(isset($_POST)){ 

$id = $_GET["id"];
$urun_id = $_GET["urunid"];

$data = [
    'id' => $id
];
$sorgu = $db->prepare("DELETE FROM urunler WHERE id=:id");
$sorgu->execute($data);
$data2 = [
    'urun_id' => $urun_id
];
$sorgu2 = $db->prepare("DELETE FROM urunresimler WHERE urun_id=:urun_id");
$sorgu2->execute($data2);

header('Location: urunler.php');

}
?>