<?php
    include 'conexion.php';

    $conn = new Conexion();
    $con = $conn->conectar();

    $cedul = $_POST['cedula'];

    $sqlDelete = "DELETE FROM estudiantes WHERE estCedula = '$cedul'";

    if ($con->query($sqlDelete)) {
        echo "Registro eliminado";
    } else {
        echo "Error: " . $sqlDelete . "<br>" . mysqli_error($con);
    }