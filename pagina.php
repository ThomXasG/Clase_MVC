<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="sumar.php" method="GET">
        <input type="text" class="num1" name="num1">
        <input type="text" class="num2" name="num2">
        <button type="submit">Sumar</button>
    </form>

    <?php
        class Suma {
            function sumar ($num1, $num2) {
                
                $resultado = $num1 + $num2;
                return $resultado;
            }
        }
        $suma = new Suma();
        echo $suma->sumar($num1, $num2);
    ?>
</body>
</html>