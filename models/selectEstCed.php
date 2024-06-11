<?php
    include 'conexion.php';

    $conn = new Conexion();
    $con = $conn->conectar();

    $cedula = $_POST['cedula'];

    $sqlSelect = "SELECT * FROM estudiantes WHERE estCedula = '$cedula'";
    $result = $con->query($sqlSelect);

    if ($result->num_rows > 0) {
        session_start();
        $_SESSION['cedula'] = $cedula;
        echo json_encode(array('success' => true));
    } else {
        echo json_encode(array('success' => false, 'errorMsg' => 'No se encontró el estudiante.'));
    }

    $con->close();
