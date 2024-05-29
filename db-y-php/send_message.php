<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Content-Type: application/json; charset=UTF-8");

include 'config.php';

$data = json_decode(file_get_contents("php://input"));

$postId = $data->postId;
$userId = 1; // ID del usuario (esto debería ser dinámico)
$message = $data->message;

$query = "INSERT INTO messages (postId, userId, message) VALUES ('$postId', '$userId', '$message')";

if (mysqli_query($conn, $query)) {
    echo json_encode(['message' => 'Message sent successfully']);
} else {
    echo json_encode(['message' => 'Message sending failed']);
}

mysqli_close($conn);
?>
