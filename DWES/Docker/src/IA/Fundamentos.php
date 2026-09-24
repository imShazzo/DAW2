<?php
// 1. Activa el modo estricto de tipos en PHP. 
// Por defecto PHP intenta convertir tipos automáticamente (por ejemplo, colar un "5" texto como número 5).
// Con esto activado, si una función pide un int y le pasas un string, lanzará un error en lugar de "adivinar".
declare(strict_types=1); 

// 2. Crea una variable con una cadena de texto (string) que contiene los caracteres "42".
$numeroTexto = "42";

// 3. Convierte explícitamente esa cadena a un número entero (int) usando la función intval().
// $entero pasa a valer el número 42 de forma numérica.
$entero = intval($numeroTexto);

// 4. Casting clásico: fuerza que el valor sea tratado como float (número con decimales).
$decimal = (float) 15.75;

// 5. Operador de fusión nula (??):
// Lee la variable 'user' desde los parámetros de la URL ($_GET).
// Si la URL es "index.php?user=Carlos", $usuario valdrá "Carlos".
// Si entras sin parámetros (?user no existe o es null), en lugar de dar un error/aviso asigna 'Invitado'.
$usuario = $_GET['user'] ?? 'Invitado'; 

// 6. Define una variable normal con el texto 'editor'.
$rol = 'editor';

// 7. Estructura 'match' (introducida en PHP 8):
// Evalúa la variable $rol comparando de forma estricta (tipo ===).
// A diferencia del antiguo 'switch', devuelve un valor directamente y no necesita 'break'.
$permiso = match ($rol) {
    'admin'          => 'Acceso total al sistema',
    'editor', 'mod'  => 'Puede editar y publicar contenido', // Se pueden agrupar casos separados por comas
    default          => 'Acceso solo lectura',               // Si no coincide con ninguno anterior
};
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Fundamentos PHP</title>
</head>
<body>
    <!-- 
      - <?= ... ?> es la etiqueta corta para imprimir (equivale a <?php echo ...; ?>).
      - htmlspecialchars() convierte caracteres especiales en entidades HTML seguras 
        (por ejemplo, convierte un <script> en &lt;script&gt; para evitar ataques XSS).
    -->
    <h1>Bienvenido, <?= htmlspecialchars($usuario) ?></h1>

    <!-- Muestra directamente el texto que devolvió la estructura match almacenado en $permiso -->
    <p>Estado del rol: <strong><?= $permiso ?></strong></p>

    <!-- Como $entero es un número real (42), realiza la suma matemática 42 + 8 e imprime 50 -->
    <p>Conversión de texto a número: <?= $entero + 8 ?></p>
</body>
</html>