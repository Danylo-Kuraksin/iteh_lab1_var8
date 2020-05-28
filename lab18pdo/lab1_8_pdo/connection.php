<?php

$dsn = "mysql:host=localhost; dbname=var8";
$user = 'root';
$pass = 'root';
try {
    $dbh = new PDO($dsn,$user,$pass);

} catch (PDOException $e) {
    echo "Ошибка";
}