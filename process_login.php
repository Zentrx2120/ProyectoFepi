<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Incluir archivo de conexión y configuración de PDO
    require_once "./server/create.php";

    // Recoger datos del formulario y limpiarlos
    $boleta = htmlspecialchars($_POST["boleta"]);

    // Preparar consulta SQL para verificar la boleta
    $sql = "SELECT * FROM registro WHERE boleta = ?";

    try {
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$boleta]);
        $usuario = $stmt->fetch();

        if ($usuario) {
            // Usuario encontrado, recuperar las calorías
            // Asumiendo que la columna de calorías se llama 'calorias'
            $calorias = $usuario['calorias']; 
            echo "Boleta: " . $usuario['boleta'] . "<br>";
            echo "Nombre: " . $usuario['nombre'] . "<br>";
            echo "Calorías: " . $calorias . "<br>";
        } else {
            echo "No se encontró un usuario con esa boleta.";
        }
    } catch (PDOException $e) {
        echo "Error al procesar la solicitud: " . $e->getMessage();
    }
}
?>