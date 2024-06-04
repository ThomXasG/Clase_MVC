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

    $sqlUpdate = "UPDATE estudiantes SET estNombre = '$nombre', estApellido = '$apellido', estTelefono = '$telefono', estDireccion = '$direccion', curId = '$cuID' WHERE estCedula = '$cedula'";

    if ($con->query($sqlUpdate)) {
        echo "Registro actualizado";
    } else {
        echo "Error: " . $sqlUpdate . "<br>" . mysqli_error($con);
    }