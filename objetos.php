<?php
    class Auto {
        public $marca;
        public $modelo;
        public $color;

        function __construct($marca, $modelo, $color) {
            $this->marca = $marca;
            $this->modelo = $modelo;
            $this->color = $color;
        }

        function mostrar() {
            echo("Marca: " . $this->marca . "<br>");
            echo("Modelo: " . $this->modelo . "<br>");
            echo("Color: " . $this->color . "<br>");
        }

        static function mensaje() {
            echo("Gracias por visitar nuestra concesionaria");
        }

    }

    $auto1 = new Auto("Toyota", "Corolla", "Rojo");
    $auto1->mostrar();
    Auto::mensaje();
