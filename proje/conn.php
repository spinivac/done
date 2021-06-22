<?php
$server = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "salonlar";


try {
    $conn = new PDO("mysql:host=$server;dbname=$dbName;charset=utf8", $dbUser, $dbPass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e){
    echo "Bağlantı hatası: " . $e->getMessage();
    }
?>