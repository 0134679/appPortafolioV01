<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Content-Type: application/json; charset=UTF-8");

include 'conexion2.php';

$data = json_decode(file_get_contents("php://input"));

$postId = $data->postId;

$query = "UPDATE posts SET dislikes = dislikes + 1 WHERE id='$postId'";

if (mysqli_query($conn, $query)) {
    echo json_encode(['message' => 'Post disliked successfully']);
} else {
    echo json_encode(['message' => 'Post dislike failed']);
}

mysqli_close($conn);
?>
