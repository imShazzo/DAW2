<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables Locales y Globales</title>
</head>
<body>
<?php
// Variable global
$numero_global = 10;

function mi_funcion() {
    // Accediendo a la variable global
    //global $numero_global;
    $numero_global = 100;
    echo "Dentro de la función, el valor de la variable global es: " . $numero_global . "<br>";

    // Modificando la variable global dentro de la función
    $numero_global = $numero_global + 5;
    echo "Después de modificar, el valor de la variable global es: " . $numero_global . "<br>";
}

mi_funcion();
echo "Fuera de la función, el valor de la variable global es: " . $numero_global;
?>

</body>
</html>