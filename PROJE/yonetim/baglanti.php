<?php 
try {
    $db = new PDO("mysql:host=localhost; dbname=projee;charset=utf8mb4", 'root', '');
    #echo "veritabanı bağlantısı başarılı";
}
catch (PDOException $e) {
    echo $e->getMessage();
}
?>