<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8" >
	<title>recibe.php</title>
</head>
<body>
<?php
if ((isset($_POST['numero1'])) && (isset($_POST['numero2']))) :
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
?>
    <h1>Operaciones Matemáticas</h1>
    <ul>
        <li>Suma: <?= $numero1 ?> + <?= $numero2 ?> = <?= ($numero1 + $numero2) ?>
        <li>Resta: <?= $numero1 ?> - <?= $numero2 ?> = <?= ($numero1 - $numero2) ?>
        <li>Multiplicación: <?= $numero1 ?> x <?= $numero2 ?> = <?= ($numero1*$numero2) ?>
        <li>División: <?= $numero1 ?> x <?= $numero2 ?> = <?= ($numero1 / $numero2) ?>
    </ul>
<?php
endif;
?>
<form action="0_operaciones_POST.php" method="post">
	<input type="number" name="numero1"/><br/>
    <input type="number" name="numero2"/><br/>
	<input type="submit" name ="btn_calcular" value="Calcular"/>
</form>
</body>
</html>
