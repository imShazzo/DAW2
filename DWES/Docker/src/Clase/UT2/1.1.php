<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    /**
     * NOTA: Código y lógica desarrollados por el alumno.
     * Comentarios explicativos generados con asistencia de IA con fines didácticos y de documentación.
     */

    // Definición de variables con distintos tipos de datos primitivos y complejos:
    $string1 = "Hola";                           // Cadena de texto (string)
    $boolean1 = true;                            // Booleano (bool)
    $null1 = null;                               // Tipo nulo (ausencia de valor)
    $float1 = 5.4;                               // Número en coma flotante / decimal (float)
    $int1 = 0;                                   // Número entero (int)
    $resource1 = fopen(__FILE__,"r");            // Recurso (resource): puntero al archivo actual en modo lectura
    $object1 = new stdClass();                   // Instancia de objeto genérico vacío (object)
    $array1 = ["Arreglo", 2, 7.8, true, null];   // Array indexado que contiene tipos mixtos
    ?>

<!-- 
    Se utiliza var_export(..., true) para que la función devuelva la representación en texto ('true' o 'false') 
    en lugar de imprimir el valor booleano en bruto (que con echo mostraría '1' para true o nada para false),
    permitiendo que la etiqueta corta <?= ?> lo incruste directamente dentro de las etiquetas <strong>.
-->
    <p>¿$array1 es array?: <strong><?= var_export(is_array($array1), true) ?></strong></p>
    <p>¿$boolean1 es booleano?: <strong><?= var_export(is_bool($boolean1), true) ?></strong></p>
    <p>¿$float1 es float?: <strong><?= var_export(is_float($float1), true) ?></strong></p>
    <p>¿$int1 es entero?: <strong><?= var_export(is_integer($int1), true) ?></strong></p>
    <p>¿$null1 es null?: <strong><?= var_export(is_null($null1), true) ?></strong></p>
    <p>¿$numeroTexto es numérico?: <strong><?= var_export(is_numeric($string1), true) ?></strong></p>
    <p>¿$object1 es un objeto?: <strong><?= var_export(is_object($object1), true) ?></strong></p>
    <p>¿$resource1 es un recurso?: <strong><?= var_export(is_resource($resource1), true) ?></strong></p>
    <p>¿$string1 es escalar?: <strong><?= var_export(is_scalar($object1), true) ?></strong></p>
    <p>¿$string1 es string?: <strong><?= var_export(is_string($string1), true) ?></strong></p>

    
</body>
</html>