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
    <title>0_operaciones_POST</title>
</head>
<body>

<?php
// -------------------------------------------------------------------------
// 1. SINTAXIS ALTERNATIVA DE CONTROL Y VALIDACIÓN DE DATOS (POST)
// -------------------------------------------------------------------------
// isset() verifica si las claves 'numero1' y 'numero2' existen en el array superglobal $_POST.
// A diferencia de GET, estos datos no viajan visibles en la URL sino dentro del cuerpo de la petición HTTP.
// La sintaxis con dos puntos ':' abre el bloque condicional en formato plantilla.
if (isset($_POST["numero1"]) && isset($_POST["numero2"])) :

    // ---------------------------------------------------------------------
    // 2. EXTRACCIÓN Y CÁLCULO DE VALORES
    // ---------------------------------------------------------------------
    // Guardamos los datos de $_POST en variables locales para simplificar la sintaxis.
    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];

    // Operaciones aritméticas calculadas antes de renderizar la vista.
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
    <!-- <?= $variable ?> imprime directamente el valor de la variable en el HTML sin necesidad de usar echo -->
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
<!-- 4. FORMULARIO CON AUTOPROCESAMIENTO (MÉTODO POST)                       -->
<!-- ----------------------------------------------------------------------- -->
<!-- action="0_operaciones_POST.php": Apunta explícitamente a este mismo archivo. -->
<!-- method="post": Envía los datos encapsulados en el cuerpo de la petición.    -->
<form action="0_operaciones_POST.php" method="post">
    <!-- El atributo 'for' enlaza la etiqueta al control con id="n1" para mejorar la accesibilidad -->
    <label for="n1">Introduce el primer número:</label><br>
    <!-- 
        step="any": Habilita el ingreso de decimales con precisión flotante.
        name="numero1": Clave con la que PHP recibirá el dato en $_POST["numero1"].
        id="n1": Identificador único de DOM asociado al atributo 'for' del label.
        required: Validación nativa de navegador para bloquear envíos vacíos.
    -->
    <input type="number" step="any" name="numero1" id="n1" required><br><br>

    <label for="n2">Introduce el segundo número:</label><br>
    <input type="number" step="any" name="numero2" id="n2" required><br><br>

    <!-- Botón que envía el formulario y dispara la recarga con parámetros POST -->
    <input type="submit" value="Enviar">
</form>

</body>
</html>