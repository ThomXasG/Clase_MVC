<?php
    require ('../fpdf186/fpdf.php');
    require ('../models/conexion.php');

    $conn = new Conexion();
    $con = $conn->conectar();

    $sqlSelect = "SELECT * FROM estudiantes";
    $result = $con->query($sqlSelect);

    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial', 'B', 16);
    $pdf->Cell(40, 10, 'Reporte de Estudiantes');
    $pdf->Ln();
    $pdf->Cell(30, 10, "Cedula", 1);
    $pdf->Cell(40, 10, "Nombre", 1);
    $pdf->Cell(40, 10, "Apellido", 1);
    $pdf->Cell(40, 10, "Direccion", 1);
    $pdf->Cell(40, 10, "Telefono", 1);

    while ($row = $result->fetch_assoc()) {
        $pdf->Ln();
        $pdf->Cell(30, 10, $row['estCedula'], 1);
        $pdf->Cell(40, 10, $row['estNombre'], 1);
        $pdf->Cell(40, 10, $row['estApellido'], 1);
        $pdf->Cell(40, 10, $row['estDireccion'], 1);
        $pdf->Cell(40, 10, $row['estTelefono'], 1);

        /*
        $cedula = $row->est_cedula;
        $nombre = $row->est_nombre;
        $pdf->Cell(20,10, "Cedula", 1);
        $pdf->Cell(40,10, "Nombre", 1);
        $pdf->Ln();
        */
    }

    $pdf->Output();