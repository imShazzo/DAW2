<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de variables</title>
</head>
<body>
<?php
// Definición de variables
$variable1 = [1, 2, 3];        // Array
$variable2 = true;             // Boolean
$variable3 = 3.14;             // Float
$variable4 = 42;               // Integer
$variable5 = null;             // Null
$variable6 = "Hola, mundo";    // String
$variable7 = "123";            // Numeric string
$variable8 = new stdClass();   // Object
$variable9 = fopen("archivo.txt", "r");  // Resource
$variable10 = 15;              // Scalar (integer)

// is_array()
echo "¿Es array variable1? " . (is_array($variable1) ? 'Sí' : 'No') . "<br>";

// is_bool()
echo "¿Es booleano variable2? " . (is_bool($variable2) ? 'Sí' : 'No') . "<br>";

// is_float()
echo "¿Es flotante variable3? " . (is_float($variable3) ? 'Sí' : 'No') . "<br>";

// is_integer()
echo "¿Es entero variable4? " . (is_integer($variable4) ? 'Sí' : 'No') . "<br>";

// is_null()
echo "¿Es null variable5? " . (is_null($variable5) ? 'Sí' : 'No') . "<br>";

// is_string()
echo "¿Es cadena de texto variable6? " . (is_string($variable6) ? 'Sí' : 'No') . "<br>";

// is_numeric()
echo "¿Es numérico variable7? " . (is_numeric($variable7) ? 'Sí' : 'No') . "<br>";

// is_object()
echo "¿Es objeto variable8? " . (is_object($variable8) ? 'Sí' : 'No') . "<br>";

// is_resource()
echo "¿Es recurso variable9? " . (is_resource($variable9) ? 'Sí' : 'No') . "<br>";

// is_scalar()
echo "¿Es escalar variable10? " . (is_scalar($variable10) ? 'Sí' : 'No') . "<br>";

// Cerrar recurso
fclose($variable9);
?>

</body>
</html>