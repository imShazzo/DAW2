<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function cambiar_valores($a, &$b) {
    // Modificando el valor de 'a' (paso por valor)
    $a = $a * 2;
    echo "Dentro de la función, el valor de a es: " . $a . "<br>";


    // Modificando el valor de 'b' (paso por referencia)
    $b[0] = "nuevo valor";
    echo "Dentro de la función, el valor de b es: " . implode(", ", $b) . "<br>";
}

// Llamada a la función
$x = 10;
$y = [1, 2, 3];
cambiar_valores($x, $y);
echo "Fuera de la función, el valor de x es: " . $x . "<br>";
echo "Fuera de la función, el valor de y es: " . implode(", ", $y);
?>

</body>
</html>