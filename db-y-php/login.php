<?php
// Iniciar la sesión
session_start();


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

// Permitir solicitudes CORS OPTIONS
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Allow-Headers: Content-Type, Authorization");
    exit(0);
}

// Obtener los datos enviados en la solicitud
$data = json_decode(file_get_contents("php://input"));

// Verificar si los datos son válidos
if ($data === null || !isset($data->rut) || !isset($data->password)) {
    echo json_encode(['success' => false, 'message' => 'Invalid input']);
    exit(1);
}

// Datos de conexión a la base de datos

// Consulta SQL para verificar las credenciales del usuario
$sql = "SELECT * FROM usuarios WHERE rut = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $data->rut);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    echo json_encode(['success' => false, 'message' => 'User not found']);
    $stmt->close();
    $conn->close();
    exit(1);
}

$user = $result->fetch_assoc();

if (password_verify($data->password, $user['password'])) {
    // Inicio de sesión exitoso
    $_SESSION['rutUsuario'] = $data->rut;
    echo json_encode(['success' => true, 'message' => 'Login successful']);
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid password']);
}

$stmt->close();
$conn->close();
?>
