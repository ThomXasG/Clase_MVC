<?php
    include 'conexion.php';

    $conn = new Conexion();
    $con = $conn->conectar();

    $cedul = $_POST['cedula'];

    $sqlDelete = "DELETE FROM estudiantes WHERE estCedula = '$cedul'";

    if ($con->query($sqlDelete)) {
        header("Location: ../index.php?action=nosotros");
    } else {
        echo "Error: " . $sqlDelete . "<br>" . mysqli_error($con);
    }