<?php
$mysqli = new mysqli("192.168.77.210", "tu_usuario", "tu_contraseña", "alumnosdb");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$query = "SELECT * FROM alumnos";
$result = $mysqli->query($query);

$data = array();

while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

$mysqli->close();

header("Content-Type: application/json");
echo json_encode($data);
?>