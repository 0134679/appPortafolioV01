<?php
// Establecer encabezados CORS y de contenido JSON
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header("Content-Type: application/json");



// Obtener el rut del usuario desde la solicitud GET
$rutUsuario = $_GET['rut'];

// Reemplazar 'cliente' con el nombre de tu tabla de usuarios y 'rut' con el nombre de la columna que almacena el rut del usuario
$query = "SELECT rut, nombre FROM cliente WHERE rut = '$rutUsuario'";

// Realizar la conexión a la base de datos y ejecutar la consulta
require 'conexion.php';
$userData = [];

try {
    if ($is_query_run = mysqli_query($conn, $query)) {
        while ($query_executed = mysqli_fetch_assoc($is_query_run)) {
            $userData = $query_executed;
        }
        echo json_encode($userData);
    } else {
        echo json_encode(["error" => "Error al ejecutar la consulta"]);
    }
} catch (Exception $e) {
    echo json_encode(["error" => "Excepción capturada: " . $e->getMessage()]);
}
?>
