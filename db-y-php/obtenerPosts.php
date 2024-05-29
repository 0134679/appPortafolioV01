<?php
// Establecer encabezados CORS y de contenido JSON
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header("Content-Type: application/json");

// Datos de conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "appportafolio";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Preparar la consulta SQL para obtener los posts
$sql = "SELECT * FROM post ORDER BY id DESC"; // Cambiar 'id' por el nombre de tu columna de identificación de posts

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Si se encontraron resultados, guardar los datos en un array
    $posts = [];
    while($row = $result->fetch_assoc()) {
        $posts[] = $row;
    }
    // Devolver los datos como JSON
    echo json_encode($posts);
} else {
    // Si no se encontraron resultados, devolver un mensaje de error
    echo json_encode(["error" => "No se encontraron posts"]);
}

// Cerrar la conexión
$conn->close();
?>
