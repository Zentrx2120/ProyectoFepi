<?php

// Configuración de conexión a la base de datos
$host = "localhost";
$db = "chefcode";
$user = "root";
$pass = "";
$charset = "utf8mb4";

// Opciones de PDO
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

// DSN (Data Source Name)
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
    // Crear una nueva conexión PDO
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    // En caso de error, lanzar una excepción PDOException
    throw new PDOException($e->getMessage(), (int)$e->getCode());
}
?>