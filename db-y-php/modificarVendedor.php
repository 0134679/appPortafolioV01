<?php
header("Access-Control-Allow-Origin: *"); 
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE"); 
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Content-Type: application/json');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "appportafolio";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$data = json_decode(file_get_contents('php://input'), true);

if (isset($data['accion'])) {
  $accion = $data['accion'];
  $rut = $data['rut'];

  if ($accion === 'eliminar') {
    $sql = "DELETE FROM vendedores WHERE rut='$rut'";
    if ($conn->query($sql) === TRUE) {
      echo json_encode(["message" => "Vendedor eliminado exitosamente"]);
    } else {
      echo json_encode(["error" => "Error: " . $sql . "<br>" . $conn->error]);
    }
  } elseif ($accion === 'bloquear') {
    // Suponiendo que hay una columna 'bloqueado' para marcar el bloqueo
    $sql = "UPDATE vendedores SET bloqueado=1 WHERE rut='$rut'";
    if ($conn->query($sql) === TRUE) {
      echo json_encode(["message" => "Vendedor bloqueado exitosamente"]);
    } else {
      echo json_encode(["error" => "Error: " . $sql . "<br>" . $conn->error]);
    }
  }
} else {
  $nombre = $data['nombre'];
  $rut = $data['rut'];
  $contrasena = $data['contrasena'];
  $email = $data['email'];
  $nombreNegocio = $data['nombreNegocio'];
  $rutNegocio = $data['rutNegocio'];

  $sql = "UPDATE vendedores SET nombre='$nombre', contrasena='$contrasena', email='$email', nombreNegocio='$nombreNegocio', rutNegocio='$rutNegocio' WHERE rut='$rut'";

  if ($conn->query($sql) === TRUE) {
    echo json_encode(["message" => "Vendedor modificado exitosamente"]);
  } else {
    echo json_encode(["error" => "Error: " . $sql . "<br>" . $conn->error]);
  }
}

$conn->close();
?>
