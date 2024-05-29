<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");
header("Content-Type: application/json");

if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    exit(0);
}

$data = json_decode(file_get_contents("php://input"));

if ($data === null || !isset($data->title) || !isset($data->content)) {
    echo json_encode(['error' => 'Invalid input']);
    exit(1);
}

$title = $data->title;
$content = $data->content;

$servername = "localhost";
$username = "root";
$password_db = "";
$dbname = "socialapp";

$conn = new mysqli($servername, $username, $password_db, $dbname);

if ($conn->connect_error) {
    echo json_encode(['error' => 'Connection failed: ' . $conn->connect_error]);
    exit(1);
}

$stmt = $conn->prepare("INSERT INTO posts (title, content) VALUES (?, ?)");
$stmt->bind_param("ss", $title, $content);

if ($stmt->execute() === TRUE) {
    echo json_encode(['message' => 'Post created successfully']);
} else {
    echo json_encode(['error' => 'Error: ' . $stmt->error]);
}

$stmt->close();
$conn->close();
?>
