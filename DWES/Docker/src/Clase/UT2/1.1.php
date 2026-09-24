<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $string1 = "Hola";
    $boolean1 = true;
    $null1 = null;
    $float1 = 5.4;
    $int1 = 0;
    $resource1 = fopen(__FILE__,"r");
    $object1 = new stdClass();
    $array1 = ["Arreglo", 2, 7.8, true, null];
    ?>

<!-- Usamos var_export(..., true) o var_dump() para ver 'true' o 'false' en texto -->
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