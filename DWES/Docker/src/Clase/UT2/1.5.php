<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

    echo "<h1>Listado de alumnos</h1>";
    echo "<ol>";
    foreach ($nombres as $nombre) {
        echo "<li>" . $nombre . "</li>";
    }
    echo "</ol>";
    ?>

    <?php 
    $nombresporfilas = [
    "Fila 1" => [
        "José David",
        "Pablo",
        "Antonio López",
        "Juanjo",
        "José Julián",
        "Mariano"
    ],
    "Fila 2" => [
        "Alejandro Valero",
        "Gonzalo",
        "Antonio Sánchez",
        "Juan José",
        "Juan Fco Hervás",
        "Israel"
    ],
    "Fila 3" => [
        "Eliana",
        "Miriam",
        "Alejandro Gómez",
        "Enrique",
        "Alejandro Vicente",
        "Alejandro Barba"
    ],
    "Fila 4" => [
        "Manuel",
        "José Manuel",
        "Jesús",
        "Alexandru",
        "Juan Fco Ponce",
        "David Villa"
    ],
    "Fila 5" => [
        "David Ruiz",
        "Sergio"
    ]
];

    echo "<h1>Listado de alumnos</h1>";
    echo "<ol>";
    foreach ($nombresporfilas as $fila => $nombres) {
        echo "<li>" . $fila . "</li>";
        echo "<ul>";
        foreach ($nombres as $nombre) {
            echo "<li>" . $nombre . "</li>";
        }
        echo "</ul>";
    }
    echo "</ol>";
    ?>
</body>
</html>