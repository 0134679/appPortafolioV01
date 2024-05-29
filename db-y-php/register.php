<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    exit(0);
}

// Obtener los datos enviados en la solicitud
$data = json_decode(file_get_contents("php://input"));

if ($data === null) {
    echo json_encode(['message' => 'Invalid input']);
    exit(1);
}

// Asegúrate de que todas las propiedades están presentes
if (!isset($data->nombre) || !isset($data->nombreAnonimo) || !isset($data->email) || !isset($data->password)) {
    echo json_encode(['message' => 'Missing required fields']);
    exit(1);
}

$nombre = $data->nombre;
$nombreAnonimo = $data->nombreAnonimo;
$email = $data->email;
$password = password_hash($data->password, PASSWORD_DEFAULT); // Encriptar la contraseña

// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password_db = ""; // La contraseña del usuario root
$dbname = "socialapp";

$conn = new mysqli($servername, $username, $password_db, $dbname);

if ($conn->connect_error) {
    echo json_encode(['message' => 'Connection failed: ' . $conn->connect_error]);
    exit(1);
}

// Inserción en la base de datos
$sql = "INSERT INTO users (nombre, nombreAnonimo, email, password) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $nombre, $nombreAnonimo, $email, $password);

if ($stmt->execute() === TRUE) {
    echo json_encode(['message' => 'User registered successfully']);
} else {
    echo json_encode(['message' => 'Error: ' . $stmt->error]);
}

$stmt->close();
$conn->close();
?>
