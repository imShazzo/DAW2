<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <h1>Tablas de multiplicar</h1>
    <table class="multiplicar">
    <?php
    $numero = 5; // Número del que queremos mostrar la tabla
    $contador = 1;
    while ($contador <=10) { 
    ?>
        <tr>
            <td><?= $numero ?> x <?= $contador ?> = </td>
            <td><?= $numero*$contador ?> </td>
        </tr>
    <?php
        $contador ++;
    }
    ?>
    </table>
</body>
</html>