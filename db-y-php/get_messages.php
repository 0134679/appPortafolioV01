<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include 'conexion2.php';

$postId = $_GET['postId'];

$query = "SELECT messages.*, users.nombreAnonimo FROM messages INNER JOIN users ON messages.userId = users.id WHERE postId='$postId'";
$result = mysqli_query($conn, $query);

$messages = [];

while ($row = mysqli_fetch_assoc($result)) {
    $messages[] = $row;
}

echo json_encode(['records' => $messages]);

mysqli_close($conn);
?>
