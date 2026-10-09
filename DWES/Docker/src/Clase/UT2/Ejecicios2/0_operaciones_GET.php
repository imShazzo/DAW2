<!--
=============================================================================
Código desarrollado por: Alumno
Comentarios y notas explicativas: Generados mediante IA para estudio y repaso
=============================================================================
-->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>0_operaciones_GET</title>
</head>
<body>

<?php
// -------------------------------------------------------------------------
// 1. SINTAXIS ALTERNATIVA DE CONTROL Y VALIDACIÓN DE DATOS (GET)
// -------------------------------------------------------------------------
// isset() comprueba si existen los parámetros 'numero1' y 'numero2' en la URL.
// La sintaxis de dos puntos ':' sustituye a la llave de apertura '{'.
// Se utiliza para separar la lógica de PHP del código HTML visual (modo plantilla).
if (isset($_GET["numero1"]) && isset($_GET["numero2"])) :

    // ---------------------------------------------------------------------
    // 2. EXTRACCIÓN Y CÁLCULO DE VALORES
    // ---------------------------------------------------------------------
    // Asignación de variables locales a partir del array superglobal $_GET.
    $numero1 = $_GET["numero1"];
    $numero2 = $_GET["numero2"];

    // Operaciones aritméticas almacenadas previamente para mantener limpio el HTML.
    $suma  = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $mult  = $numero1 * $numero2;

    // OPERADOR TERNARIO DE SEGURIDAD (Evita 'DivisionByZeroError'):
    // (condición) ? resultado_si_cierto : resultado_si_falso
    // Si $numero2 es diferente de 0 (!= 0), efectúa la división; de lo contrario, muestra una advertencia.
    $div   = ($numero2 != 0) ? ($numero1 / $numero2) : "No se puede dividir entre 0";
?>
    <!-- ----------------------------------------------------------------- -->
    <!-- 3. RENDERIZADO VISUAL MEDIANTE ETIQUETAS CORTAS (SHORT ECHO TAGS) -->
    <!-- ----------------------------------------------------------------- -->
    <!-- <?= $variable ?> es el equivalente abreviado a <?php echo $variable; ?> -->
    <!-- Permite incrustar valores dinámicos sin abrir bloques de PHP extensos ni usar concatenaciones con punto (.) -->
    <h1>Operaciones matemáticas</h1>
    <ul>
        <li>Suma: <?= $numero1 ?> + <?= $numero2 ?> = <?= $suma ?></li>
        <li>Resta: <?= $numero1 ?> - <?= $numero2 ?> = <?= $resta ?></li>
        <li>Multiplicación: <?= $numero1 ?> x <?= $numero2 ?> = <?= $mult ?></li>
        <li>División: <?= $numero1 ?> / <?= $numero2 ?> = <?= $div ?></li>
    </ul>

<?php 
// Cierre del bloque condicional iniciado con ':' arriba (sustituye a la llave '}').
endif; 
?>

<!-- ----------------------------------------------------------------------- -->
<!-- 4. FORMULARIO CON AUTOPROCESAMIENTO (MÉTODO GET)                        -->
<!-- ----------------------------------------------------------------------- -->
<!-- action="0_operaciones_GET.php": Apunta explícitamente a este mismo archivo. -->
<!-- method="get": Adjunta los valores de los inputs a la URL como query params. -->
<form action="0_operaciones_GET.php" method="get">
    <!-- El atributo 'for' enlaza la etiqueta al control con id="n1" para mejorar accesibilidad -->
    <label for="n1">Introduce el primer número:</label><br>
    <!-- 
        step="any": Habilita el ingreso de decimales con precisión flotante.
        name="numero1": Clave con la que PHP recibirá el dato en $_GET["numero1"].
        id="n1": Identificador único de DOM asociado al atributo 'for' del label.
        required: Validación nativa de navegador para bloquear envíos vacíos.
    -->
    <input type="number" step="any" name="numero1" id="n1" required><br><br>

    <label for="n2">Introduce el segundo número:</label><br>
    <input type="number" step="any" name="numero2" id="n2" required><br><br>

    <!-- Botón que envía el formulario y dispara la recarga con parámetros GET -->
    <input type="submit" value="Enviar">
</form>

</body>
</html>