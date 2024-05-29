<?php
header("Access-Control-Allow-Origin: *"); 
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE"); 
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

include 'conexionDb.php';

$rut_cliente = $_POST['rut_cliente'];
$password = $_POST['password'];
$nombre_cliente = $_POST['nombre_cliente'];

$stmt = $conn->prepare("INSERT INTO cliente (rut_cliente, password, nombre_cliente) VALUES (?, ?, ?)");
$stmt->execute([$rut_cliente, $password, $nombre_cliente]);

echo "Cliente Creado!!";

