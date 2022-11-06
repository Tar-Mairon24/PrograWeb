<?php
    $a = intval($_POST['a']);
    $b = intval($_POST['b']);

    $operacion = intval($_POST['operacion']);

    echo "A: " . $a . "<br>";
    echo "B: " . $b . "<br>";

    switch($operacion){
        case 1:
            echo "Operacion: suma (A + B) <br>";
            echo "Resultado: " . ($a + $b) . "<br>";
            break;
        case 2:
            echo "Operacion: multiplicacion (A x B) <br>";
            echo "Resultado: " . ($a * $b) . "<br>";
            break;
        case 3:
            echo "Operacion: resta (A - B) <br>";
            echo "Resultado: " . ($a - $b) . "<br>";
            break;
        case 4;
            echo "Operacion: division (A / B) <br>";
            echo "Resultado: " . ($a / $b) . "<br>";
            break;
    }
?>

<html>
    <a href="index.html"><button>Regresar</button></a>
</html>