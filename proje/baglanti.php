<?php
$server = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "proje";


try {
    $baglan = new PDO("mysql:host=$server;dbname=$dbName;charset=utf8", $dbUser, $dbPass);
    $baglan->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e){
    echo "Bağlantı hatası: " . $e->getMessage();
    }
?>