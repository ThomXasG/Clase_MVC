<?php
    $numero = 20;
    $numero2 = 10;
    $resultado = $numero + $numero2;
    print_r( $resultado );
    print_r("<br>");
    print_r(var_dump($resultado));
    
    print_r("<br>");
    $cadena = "Hola mundo";
    var_dump( $cadena );
    
    print_r("<br>");

    $condicion = true;
    print_r( $condicion );
    var_dump( $condicion );

    print_r("<br>");

    $vector = ["uno", "dos", "tres"];
    print_r( $vector );
    var_dump( $vector );

    print_r("<br>");

    //array con propiedades
    $frutas = array("fruta1" => "manzana", "fruta2" => "pera", "fruta3" => "naranja");
    print_r( $frutas );
    var_dump( $frutas );
    print_r("<br>");
    print_r($frutas['fruta1']);

    print_r("<br>");

    //como objeto
    $persona = (object)[
        "nombre" => "Juan",
        "apellido" => "Perez",
        "edad" => 30
    ];
    print_r( $persona );
    var_dump( $persona );
    echo($persona->nombre);

    print_r("<br>");

    function saludo() {
        echo("Hola mundo");
    }

    saludo();

    print_r("<br>");
    
    function despedida($mensaje) {
        echo($mensaje);
    }

    despedida("Adios mundo");

    print_r("<br>");

    function retorno($mensaje) {
        return $mensaje;
    }

    echo(retorno("he vuelto"));

    $auto1 = (object)[
        "marca" => "Toyota",
        "modelo" => "Corolla",
        "color" => "Rojo",
    ];

    $auto2 = (object)[
        "marca" => "Ford",
        "modelo" => "Fiesta",
        "color" => "Azul",
    ];

    function mostrarAuto($auto) {
        echo("Marca: " . $auto->marca . "<br>");
        echo("Modelo: " . $auto->modelo . "<br>");
        echo("Color: " . $auto->color . "<br>");
    }
