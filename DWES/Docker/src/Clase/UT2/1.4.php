<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $indice = 0;
        $indice2 = 0;

        echo "<h1>TABLAS DE MULTIPLICAR</h1>";
        echo "<hr>";
        while ($indice <= 10) {
            echo "<h2>La tabla del " . $indice . "</h2>";
            echo "<ul>";
            while ($indice2 <= 10) {
                echo "<li>" . $indice . " x " . $indice2 . "=" . $indice*$indice2 . "</li>";
                $indice2++;
            }
            echo "</ul>";
            echo "<hr>";
            $indice2 = 0;
            $indice++;
        }
    ?>
</body>
</html>