<?php
declare(strict_types=1); // Tipado estricto

// 1. Casting y tipos
$numeroTexto = "42";
$entero = intval($numeroTexto);
$decimal = (float) 15.75;

// 2. Operador de fusión nula (??) y Elvis (?:)
$usuario = $_GET['user'] ?? 'Invitado'; // Si no viene por GET, asigna 'Invitado'

// 3. Estructura match (PHP 8)
$rol = 'editor';
$permiso = match ($rol) {
    'admin'          => 'Acceso total al sistema',
    'editor', 'mod'  => 'Puede editar y publicar contenido',
    default          => 'Acceso solo lectura',
};
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Fundamentos PHP</title>
</head>
<body>
    <h1>Bienvenido, <?= htmlspecialchars($usuario) ?></h1>
    <p>Estado del rol: <strong><?= $permiso ?></strong></p>
    <p>Conversión de texto a número: <?= $entero + 8 ?></p>
</body>
</html>