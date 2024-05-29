
<?php
//////////////////////Conexion///////////////////////////////////
$servername = "localhost";
$username = "root"; // Nombre de usuario de MySQL (root por lo general por el equipo)
$password = ""; // Contraseña de la DB MySQL (Sin Contraseña queda en blanco)
$database = "appportafolio"; // Nombre de la base de datos creada
//////////////////////Conexion///////////////////////////////////

///////////////////////Generamos la Conexion////////////////////////////
$conn = new mysqli($servername, $username, $password, $database);
///////////////////////Generamos la Conexion////////////////////////////

///////////////////////Consulta para obtener los datos////////////////////////////

//Generamos alerta de fallo
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM administrador"; // Nombre Usuario de la Tabla (Solicitamos la Informacion de la tabla)
$result = $conn->query($sql);//Resultado de la conexion y enviando la consulta por la conexion
$data = array();//Obtenemos la data o el resultado de la consulta

//Generamos la accion de conexion con la consulta para obtener los datos de la tabla!!
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}
///////////////////////////////////////////////////////////////////////////////////////////


echo json_encode($data);
//Cerramos Conexion
$conn->close();

?>
