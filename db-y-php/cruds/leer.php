<?php 
header("Access-Control-Allow-Origin: *"); 
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE"); 
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

include 'conexionDb.php';

// Consultar todos los clientes
$stmt = $conn->query("SELECT * FROM cliente");
$clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($clientes);
