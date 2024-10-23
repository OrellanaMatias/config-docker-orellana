<?php
$servername = "db"; // nombre del servicio en docker-compose
$username = "user";
$password = "password";
$dbname = "mydatabase";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>

