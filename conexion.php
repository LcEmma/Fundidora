<?php
// conexion.php
$servername = "localhost";
$username = "root";    // Cambia esto si tienes otro usuario
$password = "";        // Cambia esto si tienes una contraseña
$dbname = "fundidora";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
