<?php
include 'conexion.php';

$conn = new Conexion();
$con = $conn->conectar();

$sql = "SELECT * FROM cursos"; // Asume que tienes una tabla `cursos` con los campos `curId` y `curNombre`
$result = $con->query($sql);

$curIds = array();
while ($row = $result->fetch_assoc()) {
    $curIds[] = $row;
}

echo json_encode($curIds);

$con->close();