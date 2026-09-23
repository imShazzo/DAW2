<?php
// Array asociativo similar a los registros de una base de datos
$alumnos = [
    ["id" => 1, "nombre" => "Carlos", "modulo" => "DWES", "nota" => 8.5],
    ["id" => 2, "nombre" => "Lucía",  "modulo" => "DWES", "nota" => 9.2],
    ["id" => 3, "nombre" => "Marcos", "modulo" => "DWES", "nota" => 4.8],
];

// Comprobar si hay aprobados usando funciones de arrays
$aprobados = array_filter($alumnos, fn($a) => $a['nota'] >= 5.0);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Alumnos</title>
</head>
<body>
    <h2>Listado de Alumnos (Sintaxis Alternativa con dos puntos)</h2>
    <ul>
        <?php foreach ($alumnos as $alumno): ?>
            <li>
                <strong><?= $alumno['nombre'] ?></strong> 
                (<?= $alumno['modulo'] ?>) - Nota: <?= $alumno['nota'] ?>
                <?php if ($alumno['nota'] >= 5): ?>
                    <span style="color: green;">[Aprobado]</span>
                <?php else: ?>
                    <span style="color: red;">[Suspenso]</span>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>
    <p>Total aprobados: <?= count($aprobados) ?></p>
</body>
</html>