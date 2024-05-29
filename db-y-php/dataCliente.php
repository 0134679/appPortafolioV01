<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header("Content-Type: application/json");

require 'conexion.php';

$query = "SELECT rut, password FROM cliente";
$userData = [];

try {
    if ($is_query_run = mysqli_query($conn, $query)) {
        while ($query_executed = mysqli_fetch_assoc($is_query_run)) {
            $userData[] = $query_executed;
        }
        echo json_encode($userData);
    } else {
        echo json_encode(["error" => "Error al ejecutar la consulta"]);
    }
} catch (Exception $e) {
    echo json_encode(["error" => "Excepción capturada: " . $e->getMessage()]);
}
?>
