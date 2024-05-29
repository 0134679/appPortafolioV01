<?php 
header("Access-Control-Allow-Origin: *"); 
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE"); 
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

include 'conexionDb.php';

$rut_cliente = $_POST['rut_cliente'];
$password = $_POST['password'];
$nombre_cliente = $_POST['nombre_cliente'];

$stmt = $conn->prepare("UPDATE cliente SET password = ?, nombre_cliente = ? WHERE rut_cliente = ?");
$stmt->execute([$password, $nombre_cliente, $rut_cliente]);

echo "Cliente Actualizado!!";

