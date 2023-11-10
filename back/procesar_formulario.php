<?php

include "../db/conexiondb.php";

// Recopilar los datos del formulario
$nombre = $_POST['name'];
$email = $_POST['email'];
$mensaje = $_POST['message'];

// Prepara la consulta SQL para insertar los datos en la base de datos
$sql = "INSERT INTO contacto (nombre, email, mensaje) VALUES (?, ?, ?)";

if ($stmt = $conn->prepare($sql)) {
    // Vincula los parámetros
    $stmt->bind_param("sss", $nombre, $email, $mensaje);

    // Ejecuta la consulta
    if ($stmt->execute()) {
        // Redirige al index.php con mensaje de éxito
        header("Location: ../index.php?message=registro");
    } else {
        // Redirige al index.php con mensaje de error
        header("Location: ../index.php?message=error");
    }

    // Cierra la consulta preparada
    $stmt->close();
} else {
    // Redirige al index.php con mensaje de error
    header("Location: ../index.php?message=error");
}

// Cierra la conexión a la base de datos
$conn->close();
?>
