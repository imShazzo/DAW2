<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $lineas = file("alumnos.txt");
    $nombres = [];
    $nombres = $lineas;

    echo "<h1>Listado de alumnos</h1>";
    echo "<ol>";
    foreach ($nombres as $nombre) {
        echo "<li>" . $nombre . "</li>";
    }
    echo "</ol>";
    ?>
</body>
</html>