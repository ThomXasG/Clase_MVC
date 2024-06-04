<?php
    include 'conexion.php';

    $conn = new Conexion();
    $con = $conn->conectar();

    $sqlSelect = "SELECT * FROM estudiantes";

    $respuesta = $con->query($sqlSelect);
    $resultado = array();

    if ($respuesta->num_rows > 0) {
        while ($fila = $respuesta->fetch_array()) {
            array_push($resultado, $fila);
        }
    } else {
        $resultado = "No hay registros";
    }

    echo json_encode($resultado);
    