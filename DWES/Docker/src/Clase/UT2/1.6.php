<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $datos = [
        "nombre" => "Miguel Angel",
        "apellidos" => "Saez Martinez",
        "edad" => 12,
        "email" => "2903444@alu.murciaeduca.es",
        "nacionalidad" => "Española"
];
    
    echo "<ul>";
    foreach ($datos as $persona1 => $dato) {
        echo "<li>" . $persona1 . ": " . $dato . "</li>";
    }
    echo "</ul>";

        function mostrarDatos($datos) {
                    echo "<ul>";
                    if ($datos['edad'] >= 18) {
                        foreach ($datos as $persona1 => $dato) {
                            echo "<li>" . $persona1 . ": " . $dato . "</li>"; 
                    }
                        
                    }
                    else {
                         echo "<li>" . "Datos ocultos por protección infantil" . "</li>"; 
                    }
                    echo "</ul>";
                }

        mostrarDatos($datos);

    ?>
</body>
</html>