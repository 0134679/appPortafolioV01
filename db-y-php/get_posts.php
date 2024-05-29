<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include 'conexion2.php';

$query = "SELECT posts.*, users.nombreAnonimo FROM posts INNER JOIN users ON posts.userId = users.id";
$result = mysqli_query($conn, $query);

$posts = [];

while ($row = mysqli_fetch_assoc($result)) {
    $posts[] = $row;
}

echo json_encode(['records' => $posts]);

mysqli_close($conn);
?>
