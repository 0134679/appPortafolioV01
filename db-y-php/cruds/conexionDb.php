
<?php

$host = 'localhost';
$dbname = 'nombre_de_la_base_de_datos';
$username = 'nombre_de_usuario';
$password = 'contraseña';

// Base de Conexion si se genera Algun Problema con la conexion Principal

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Error de Conexión: " . $e->getMessage());
}

