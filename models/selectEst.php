<?php
    include_once "conexion.php";

    $conn = new Conexion();
    $con = $conn->conectar();
    
    $sql = "SELECT * FROM estudiantes";
    $result = $con->query($sql);

    $resultado = array();

    