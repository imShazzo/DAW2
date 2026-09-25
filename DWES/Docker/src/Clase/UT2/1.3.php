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
         * NOTA: Estructura y lógica del código desarrolladas íntegramente por el alumno.
         * Comentarios explicativos y didácticos generados mediante asistencia de IA para documentación de estudio.
         */

        // Definición de variables iniciales:
        // $numero: almacena la base de la tabla de multiplicar a calcular.
        // $indice: actúa como contador/multiplicador inicial para el bucle.
        $numero = 5;
        $indice = 1;

        // -------------------------------------------------------------
        // PRIMERA PARTE: Generación de la tabla mediante bucle 'while'
        // -------------------------------------------------------------

        // Imprime el encabezado principal y abre la lista desordenada de HTML (<ul>)
        echo "<h1>Tabla de multiplicar del " . $numero . " (usando while)</h1><ul>";

        // Bucle 'while': evalúa la condición al inicio de cada iteración.
        // Se ejecuta mientras el valor actual de $indice sea menor o igual a 10.
        while ($indice <= 10) {
            // Imprime cada elemento de la lista (<li>) calculando la operación ($numero * $indice) al vuelo
            echo "<li>" . $numero . " x " . $indice . " = " . $numero * $indice . "</li>";
            
            // Incremento manual del contador en 1 ($indice = $indice + 1)
            // Esencial para que el bucle avance hacia la condición de parada y no sea infinito
            $indice++;
        }

        // Cierre de la primera lista HTML una vez que $indice alcanza el valor 11
        echo "</ul>";

        // -------------------------------------------------------------
        // SEGUNDA PARTE: Generación de la tabla mediante bucle 'for'
        // -------------------------------------------------------------

        // Encabezado y apertura de la segunda lista HTML
        echo "<h1>Tabla de multiplicar del " . $numero . " (usando while)</h1><ul>";

        // Bucle 'for': unifica en una sola línea la inicialización, la condición y el paso:
        // 1. $indice = 1;         -> Reinicia el contador a 1 (ya que el while anterior lo dejó en 11).
        // 2. $indice <= 10;       -> Condición que debe cumplirse para ejecutar cada iteración.
        // 3. $indice++            -> Incremento automático que se ejecuta al terminar cada vuelta.
        for ($indice = 1; $indice <= 10; $indice++) {
            // Genera el ítem de la lista (<li>) con la operación y el producto resultante
            echo "<li>" . $numero . " x " . $indice . " = " . $numero * $indice . "</li>";
        }

        // Cierre de la segunda lista HTML
        echo "</ul>";
    ?>
</body>
</html>