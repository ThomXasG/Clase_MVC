<?php
    include 'conexion.php';

    $conn = new Conexion();
    $con = $conn->conectar();

    $cedula = $_POST['cedula'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $cuID = $_POST['cuID'];

    $sqlInsert = "INSERT INTO estudiantes VALUES ('$cedula', '$nombre', '$apellido', '$telefono', '$direccion', '$cuID')";

    if ($con->query($sqlInsert)) {
        echo "Registro guardado";
    } else {
        echo "Error: " . $sqlInsert . "<br>" . mysqli_error($con);
    }