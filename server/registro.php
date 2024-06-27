<?php

// Conectar a la base de datos
$host = "localhost";
$db = "chefcode";
$charset = "utf8mb4";
$user = "root";
$pass = "";

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
try{
    $pdo = new PDO($dsn, $user, $pass, $options);
    echo "Conectado";
} catch (PDOException $e) {
    throw new PDOException($e->getMessage(), (int)$e->getCode());
}

?>
