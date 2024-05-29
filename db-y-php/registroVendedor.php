<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
header('Content-Type: application/json');

// Obtener los datos del formulario
$data = json_decode(file_get_contents("php://input"));

// Crear la conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "appportafolio";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}


$nombre = $conn->real_escape_string($data->nombre);
$rut = $conn->real_escape_string($data->rut);
$password = password_hash($conn->real_escape_string($data->password), PASSWORD_DEFAULT);
$email = $conn->real_escape_string($data->email);
$telefono = $conn->real_escape_string($data->telefono);
$direccion = $conn->real_escape_string($data->direccion);
$ciudad = $conn->real_escape_string($data->ciudad);
$rutNegocio = $conn->real_escape_string($data->rutNegocio);
$nombreNegocio = $conn->real_escape_string($data->nombreNegocio);
$telefonoNegocio = $conn->real_escape_string($data->telefonoNegocio);
$urlNegocio = $conn->real_escape_string($data->urlNegocio);
$codigoPostal = $conn->real_escape_string($data->codigoPostal);

// Query insertando los datos en la tabla Vendedor
$sql = "INSERT INTO vendedores (rut, nombre, password, email, telefono, direccion, ciudad, codigoPostal, rutNegocio, nombreNegocio, telefonoNegocio, urlNegocio)
        VALUES ('$rut', '$nombre', '$password', '$email', '$telefono', '$direccion', '$ciudad', '$codigoPostal', '$rutNegocio', '$nombreNegocio', '$telefonoNegocio', '$urlNegocio')";

if ($conn->query($sql) === TRUE) {
    echo json_encode(array("message" => "Registro exitoso"));
} else {
    echo json_encode(array("message" => "Error: " . $sql . "<br>" . $conn->error));
}

$conn->close();
?>
