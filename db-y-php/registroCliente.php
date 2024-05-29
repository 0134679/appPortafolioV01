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

// Verificar si la conexión se estableció correctamente
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Escapar los datos del formulario para prevenir inyección SQL
$nombre = $conn->real_escape_string($data->nombre);
$rut = $conn->real_escape_string($data->rut);
$password = password_hash($conn->real_escape_string($data->password), PASSWORD_DEFAULT);
$email = $conn->real_escape_string($data->email);
$telefono = $conn->real_escape_string($data->telefono);
$direccion = $conn->real_escape_string($data->direccion);
$ciudad = $conn->real_escape_string($data->ciudad);
$codigoPostal = $conn->real_escape_string($data->codigoPostal);

// Query para insertar los datos en la tabla cliente
$sql = "INSERT INTO cliente (rut, nombre, password, email, telefono, direccion, ciudad, codigoPostal)
        VALUES ('$rut', '$nombre', '$password', '$email', '$telefono', '$direccion', '$ciudad', '$codigoPostal')";

// Ejecutar la consulta y verificar si fue exitosa
if ($conn->query($sql) === TRUE) {
    // Enviar respuesta JSON de éxito
    echo json_encode(array("message" => "Registro exitoso"));
} else {
    // Enviar respuesta JSON con mensaje de error
    echo json_encode(array("message" => "Error: " . $sql . "<br>" . $conn->error));
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
