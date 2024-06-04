<?php
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    class Suma {
        function sumar ($num1, $num2) {
            
            $resultado = $num1 + $num2;
            return $resultado;
        }
    }
