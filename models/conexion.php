<?php
    class Conexion {
        public function conectar() {
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "cuarto";

            $conn = mysqli_connect($servername, $username, $password, $dbname);
            //$mysqli = new mysqli($servername, $username, $password, $dbname);

            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            } else {
                return $conn;
            }
        }
    }
