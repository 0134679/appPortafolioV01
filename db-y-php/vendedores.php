<?php
include 'conexion.php';


header("Access-Control-Allow-Origin: *");

// Permitir los métodos HTTP GET, POST, PUT, DELETE, OPTIONS
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");

// Permitir los encabezados CORS que se incluirán en la solicitud
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

// Verificar si la solicitud es de tipo OPTIONS
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    // Retornar una respuesta exitosa para las solicitudes OPTIONS
    http_response_code(200);
    exit();
}

// Obtener la acción a realizar desde la solicitud POST
$action = $_POST['action'];

// Ejecutar la acción correspondiente
switch ($action) {
    case 'eliminarVendedor':
        eliminarVendedor();
        break;
    case 'bloquearVendedor':
        bloquearVendedor();
        break;
    case 'modificarVendedor':
        modificarVendedor();
        break;
    case 'bloquearNegocio':
        bloquearNegocio();
        break;
    case 'modificarNegocio':
        modificarNegocio();
        break;
    default:
        echo json_encode(["success" => false, "error" => "Acción no válida"]);
}

// Función para eliminar un vendedor
function eliminarVendedor() {
    global $conn;
    $rut = $_POST['rut'];

    $sql = "DELETE FROM vendedores WHERE rut = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $rut);

    if ($stmt->execute()) {
        echo json_encode(["success" => true]);
    } else {
        echo json_encode(["success" => false, "error" => $stmt->error]);
    }

    $stmt->close();
}

// Función para bloquear un vendedor
function bloquearVendedor() {
    global $conn;
    $rut = $_POST['rut'];

    $sql = "UPDATE vendedores SET bloqueado = 1 WHERE rut = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $rut);

    if ($stmt->execute()) {
        echo json_encode(["success" => true]);
    } else {
        echo json_encode(["success" => false, "error" => $stmt->error]);
    }

    $stmt->close();
}

// Función para modificar un vendedor
function modificarVendedor() {
    global $conn;
    $rut = $_POST['rut'];
    $nombre = $_POST['nombre'];
    $contrasena = $_POST['contrasena'];
    $email = $_POST['email'];

    $sql = "UPDATE vendedores SET nombre = ?, contrasena = ?, email = ? WHERE rut = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $nombre, $contrasena, $email, $rut);

    if ($stmt->execute()) {
        echo json_encode(["success" => true]);
    } else {
        echo json_encode(["success" => false, "error" => $stmt->error]);
    }

    $stmt->close();
}

// Función para bloquear un negocio
function bloquearNegocio() {
    global $conn;
    $rutNegocio = $_POST['rutNegocio'];

    $sql = "UPDATE negocios SET bloqueado = 1 WHERE rutNegocio = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $rutNegocio);

    if ($stmt->execute()) {
        echo json_encode(["success" => true]);
    } else {
        echo json_encode(["success" => false, "error" => $stmt->error]);
    }

    $stmt->close();
}

// Función para modificar un negocio
function modificarNegocio() {
    global $conn;
    $nombreNegocio = $_POST['nombreNegocio'];
    $rutNegocio = $_POST['rutNegocio'];

    $sql = "UPDATE negocios SET nombreNegocio = ? WHERE rutNegocio = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $nombreNegocio, $rutNegocio);

    if ($stmt->execute()) {
        echo json_encode(["success" => true]);
    } else {
        echo json_encode(["success" => false, "error" => $stmt->error]);
    }

    $stmt->close();
}

$conn->close();
?>
