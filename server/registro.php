<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    processContactForm();
}

function processContactForm() {
    // Incluir archivo de conexión y configuración de PDO
    require_once "create.php";

    // Recoger datos del formulario y limpiarlos
    $boleta = htmlspecialchars($_POST["boleta"]);
    $nombre = htmlspecialchars($_POST["nombre"]);
    $email = htmlspecialchars($_POST["email"]);
    $edad = htmlspecialchars($_POST["edad"]);
    $peso = htmlspecialchars($_POST["peso"]);
    $estatura = htmlspecialchars($_POST["estatura"]);
    $calorias = htmlspecialchars($_POST["calorias"]);

    // Preparar consulta SQL con sentencia preparada
    $sql = "INSERT INTO registro (boleta, nombre, email, edad, peso, estatura, calorias) VALUES (?, ?, ?, ?, ?, ?, ?)";

    try {
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$boleta, $nombre, $email, $edad, $peso, $estatura, $calorias]);

        // Redirigir a esta misma página después de guardar los datos
        header("Location: contact.php");
        exit();
    } catch (PDOException $e) {
        echo "Error al procesar la solicitud: " . $e->getMessage();
    }
}
?>