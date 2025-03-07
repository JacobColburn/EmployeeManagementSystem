<?php

$dsn = "mysql:host=localhost;dbname=employee_db";
$dbusername="root";
$dbpassword="";


try {

    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    
} catch (PDOException $e) {
    echo "Connection error: ".$e->getMessage();
    
}