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
    <h2>While</h2>
    <table class="multiplicar">
        <?php
    $numero = 5; // Número del que queremos mostrar la tabla
    $contador = 1;
    while ($contador <=10):
    ?>
        <tr>
            <td><?= $numero ?> x <?= $contador ?> = </td>
            <td><?= $numero*$contador ?> </td>
        </tr>

        <?php
        $contador ++;
    endwhile;
    ?>
    </table>
    <h2>For</h2>
    <table class="multiplicar">
        <?php
    $numero = 5; // Número del que queremos mostrar la tabla
    for ($contador = 1;$contador <=10;$contador++):
    ?>
        <tr>
            <td><?= $numero ?> x <?= $contador ?> = </td>
            <td><?= $numero*$contador ?> </td>
        </tr>
        <?php        
    endfor;
    ?>
    </table>
</body>

</html>