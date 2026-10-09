<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse; /* Une los bordes de las celdas adyacentes */
            border: 2px solid red;     /* Borde exterior rojo */
            text-align: center;
        }

        th, td {
            border: 1px solid red;     /* Bordes internos de cada celda en rojo */
            padding: 8px 12px;         /* Espacio interior para que no se vea pegado */
        }

        th {
            background-color: #777777; /* Fondo gris para las cabeceras "Fila X" */
            color: black;
        }

        td {
            background-color: #ffeedd; /* Fondo beige / crema para los alumnos */
        }

        /* Celda que cubre los huecos sobrantes */
        td.vacio{
            background-color: red;     /* Fondo rojo completo */
        }
    </style>
</head>
<body>
    <?php
   $nombres = [
    "José David",
    "Pablo",
    "Antonio López",
    "Juanjo",
    "José Julián",
    "Mariano",
    "Alejandro Valero",
    "Gonzalo",
    "Antonio Sánchez",
    "Juan José",
    "Juan Fco Hervás",
    "Israel",
    "Eliana",
    "Miriam",
    "Alejandro Gómez",
    "Enrique",
    "Alejandro Vicente",
    "Alejandro Barba",
    "Manuel",
    "José Manuel",
    "Jesús",
    "Alexandru",
    "Juan Fco Ponce",
    "David Villa",
    "David Ruiz",
    "Sergio"
    ];
    $alumnosPorFila = 6;
    $indice = 0;
    $fila = 1;

    echo "<table>";
    foreach ($nombres as $nombre) {
        if ($indice % $alumnosPorFila == 0) {
            echo "\t<tr>\n";
            echo "\t\t<th>" . "Fila " . $fila . "</th>\n";
            $fila++;
        }
        echo "\t\t<td>" . $nombre . "</td>\n";
        if (($indice + 1) % $alumnosPorFila == 0) {
            echo "\t</tr>\n";
        }
        $indice++;
    }
    if ($indice % $alumnosPorFila != 0) {
    $huecos = $alumnosPorFila - ($indice % $alumnosPorFila); // En este caso 6 - 2 = 4
 // Imprimes la celda que ocupa el resto del hueco (por ejemplo con colspan)   
    echo "\t\t<td colspan=\"" . $huecos . "\" class=\"vacio\"></td>\n";
    // Y cierras la fila que quedó abierta
    echo "\t</tr>\n";
    }
    echo "</table>";
    ?>
</body>
</html>