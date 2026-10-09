<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables globales, locales y referencias en PHP</title>
</head>
<body>
    <?php 
    /**
     * NOTA: Lógica y estructura del código desarrolladas por el alumno.
     * Comentarios explicativos y didácticos generados con asistencia de IA para documentación de estudio.
     */

    // 1. Declaración de variables en el ámbito global (fuera de cualquier función)
    $a = "11";
    $b = "10";
    
    // 2. Función para demostrar el ámbito (scope) global frente al local
    function modificarGlobal() {
        // La palabra reservada 'global' le indica a PHP que no cree una variable local,
        // sino que vincule esta $a con la variable $a definida fuera de la función.
        global $a;
        $a = 1107; // Modifica directamente la variable global en memoria

        // Al NO tener 'global $b;', esta variable es estrictamente LOCAL.
        // Solo existe dentro de estas llaves {} y se destruye al terminar la función.
        $b = 7; 
    }

    // Mostramos el estado inicial de las variables globales ($a = 11, $b = 10)
    echo "A y B antes del cambio a = " . $a . ", b = " . $b . "<br>";

    // Llamamos a la función: $a global cambiará a 1107, pero la $b global seguirá valiendo 10
    modificarGlobal();

    // Comprobamos el cambio tras la ejecución ($a = 1107, $b = 10)
    echo "A y B despues del cambio a = " . $a . ", b = " . $b . "<br>"; 

    // 3. Función para demostrar el paso de parámetros por valor vs por referencia
    // - $a se pasa POR VALOR (por defecto): la función recibe una copia independiente.
    // - &$b se pasa POR REFERENCIA (operador &): la función recibe la dirección de memoria real de la variable externa.
    function porValorOPorReferencia($a, &$b) {
        $a = 17;  // Modifica solo la copia local. La $a de fuera no se entera.
        $b = 107; // Modifica la variable externa directamente a través del puntero de memoria.
    }

    // Ejecutamos la función pasándole nuestras variables globales actuales ($a = 1107, $b = 10)
    porValorOPorReferencia($a, $b);

    // Resultado final en pantalla:
    // $a mantiene su valor anterior (1107) porque fue protegida al pasarse como copia.
    // $b se actualiza a 107 porque fue sobreescrita por referencia.
    echo "a = " . $a . ", b = " . $b;
    ?>
</body>
</html>