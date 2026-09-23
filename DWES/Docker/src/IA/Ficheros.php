<?php
$fichero = "visitas.txt";

// Escribir / Añadir contenido sin necesidad de punteros fopen/fclose
$registro = date("Y-m-d H:i:s") . " - Nueva visita registrada\n";
file_put_contents($fichero, $registro, FILE_APPEND);

// Leer todo el contenido a un string
$contenidoCompleto = file_exists($fichero) ? file_get_contents($fichero) : "Sin registros";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lectura de Ficheros</title>
</head>
<body>
    <h2>Registro de Visitas</h2>
    <pre><?= htmlspecialchars($contenidoCompleto) ?></pre>
</body>
</html>