<?php 
header("Access-Control-Allow-Origin: *"); 
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE"); 
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

include 'conexionDb.php';

$rut_cliente = $_POST['rut_cliente'];

$stmt = $conn->prepare("DELETE FROM cliente WHERE rut_cliente = ?");
$stmt->execute([$rut_cliente]);

echo "Cliente Eliminado!!";
