<?php
// Establece la conexión a la base de datos (ajusta los valores según tu configuración)
$host = "localhost";
$usuario = "root";
$contrasena = "";
$nombredb = "contacto_s";

$conn = new mysqli($host, $usuario, $contrasena, $nombredb);

if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}