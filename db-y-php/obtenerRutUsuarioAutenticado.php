<?php
// Establecer encabezados CORS y de contenido JSON
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header("Content-Type: application/json");

// Aquí deberías implementar la lógica para obtener el rut del usuario autenticado
// Por ejemplo, si estás utilizando sesiones, podrías obtener el rut del usuario desde la sesión

$servername = "localhost";
$username = "root";
$password_db = ""; // La contraseña del usuario root
$dbname = "appportafolio";

// Conexión a la base de datos
$conn = new mysqli($servername, $username, $password_db, $dbname);

if ($conn->connect_error) {
    echo json_encode(['success' => false, 'message' => 'Connection failed: ' . $conn->connect_error]);
    exit(1);
}

session_start();

if(isset($_SESSION['rut'])) { //tengo que capturar la variable acceso session
    $rutUsuarioAutenticado = $_SESSION['rut'];
} else {
    // Si no hay un rut de usuario autenticado en la sesión, devuelve un error
    echo json_encode(["error" => "No se ha iniciado sesión"]);
    exit(); // Sale del script PHP para evitar que continúe ejecutándose
}

// Devuelve el rut del usuario autenticado como JSON
echo json_encode($rutUsuarioAutenticado);

$conn->close();
?>


