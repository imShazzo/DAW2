<?php
// Lo normal sería procesar aquí el formulario
// Y al terminar redirigir a otra página
?>
<!DOCTYPE html>
<html lang="es">

<head>
	<title>Curriculum Vitae - Formulario Datos Personales</title>
	<meta charset="UTF-8" />
	<link rel="stylesheet" type="text/css" href="style/style.css" />
</head>

<body>
	<h1>CURRICULUM VITAE</h1>

<?php
require_once('config.php');
// Si se pulsó "Listado", listamos el fichero de texto
if (isset($_POST['LISTAR'])) {
	// Leo el fichero con file y lo muestro
	//Comprobamos si existe el fichero
	if (file_exists(NOMBRE_FICHERO)) {
		$lineas = file(NOMBRE_FICHERO);
		echo "<h2>Listado de Datos Personales</h2>";
		echo "<table id='listado'>";
		echo "<tr><th>NOMBRE</th><th>FECHA NAC</th><th>TLF</th><th>EMAIL</th><th>DIRECCIÓN</th><th>POBLACIÓN</th><th>CP</th><th>PROVINCIA</th><th>OTROS</th><th>AFICIONES</th></tr>";
		foreach ($lineas as $linea) {
			$campos = explode(SEPARADOR, trim($linea));
			echo "<tr>";
			foreach ($campos as $campo) {
				echo "<td>" . htmlspecialchars($campo) . "</td>";
			}
			echo "</tr>";
		}
		echo "</table>";
	} else {
		echo "<p>No hay datos para mostrar.</p>";
	}
	// Proceso en esta posición para aprovechar la cabecera del HTML
} else if (isset($_POST['EJECUTAR'])) {
	// Si el formulario se envió, lo proceso
	$nombre = trim(htmlspecialchars($_POST['nombre']));
	$fechaNac = trim(htmlspecialchars($_POST['fechaNac']));
	$tlf = trim(htmlspecialchars($_POST['tlf']));
	$email = trim(htmlspecialchars($_POST['email']));
	$direccion = trim(htmlspecialchars($_POST['direccion']));
	$poblacion = trim(htmlspecialchars($_POST['poblacion']));
	$cp = trim(htmlspecialchars($_POST['cp']));
	$provincia = $_POST['provincia'];
	$otros = trim(htmlspecialchars($_POST['otros']));
	$aficiones = $_POST['aficiones'] ?? [];

	// Construimos la nueva línea del fichero con los valores de los campos recogidos en el formulario
	$lineaFichero = $nombre.SEPARADOR.$fechaNac.SEPARADOR.$tlf.SEPARADOR.$email.SEPARADOR.$direccion.SEPARADOR.$poblacion.SEPARADOR.$cp.SEPARADOR.$provincia.SEPARADOR.$otros.SEPARADOR.implode(', ',$aficiones)."\n";

	// Volvamos al fichero (añadimos al final )
	file_put_contents(NOMBRE_FICHERO, $lineaFichero, FILE_APPEND | LOCK_EX);

	?>
	<!--
	<ul>
		<li>NOMBRE:<?= $nombre ?></li>
		<li>FECHA DE NACIMIENTO:<?= $fechaNac ?></li>
		<li>TELÉFONO:<?= $tlf ?></li>
		<li>EMAIL:<?= $email ?></li>
		<li>DIRECCIÓN:<?= $direccion  ?></li>
		<li>POBLACIÓN:<?= $poblacion ?></li>
		<li>CÓDIGO POSTAL:<?= $cp ?></li>
		<li>PROVINCIA:<?= $provincia ?></li>
		<li>OTROS:<?= $otros ?></li>
		<li>AFICIONES:
-->
	<?php
	/*
		if (count($aficiones)) {
			echo "<ul>";
			foreach($aficiones as $aficion):
			?>
				<li><?= $aficion ?>
			<?php
			endforeach;
			echo "</ul>";			
		}
		else {
			echo "No se seleccionó ninguna afición.";
		}
			*/
		?>
		<!--
		</li>	
	</ul>
-->
	<?php

} else { // Si no se envió, lo muestro
?>

	<!-- FORMULARIO DATOS PERSONALES -->
	<h2>Formulario Datos Personales</h2>

	<form method="POST">
		<table id="DatosPersonales">
			<!-- Fila 1 -->
			<tr>
				<th>NOMBRE:</th>
				<td colspan="3"><input name="nombre" type="text" size="60%" /></td>
			<tr>
				<!-- Fila 2 -->
			<tr>
				<th style="width:20%">FECHA NAC:</th>
				<td style="width:30%"><input name="fechaNac" type="date" /></td>
				<th style="width:10%">TLF:</th>
				<td style="width:30%"><input name="tlf" type="tel" /></td>
			<tr>
				<!-- Fila 3 -->
			<tr>
				<th>EMAIL:</th>
				<td colspan="3"><input name="email" type="email" size="60%" /></td>
			<tr>

				<!-- Fila 4 -->
			<tr>
				<th>DIRECCIÓN:</th>
				<td colspan="3"><input name="direccion" type="text" size="60%" /></td>
			<tr>
				<!-- Fila 5 -->
			<tr>
				<th>POBLACIÓN:</th>
				<td><input name="poblacion" type="text" size="20%" /></td>
				<th>CP:</th>
				<td><input name="cp" type="number" size="15%" /></td>
			<tr>
				<!-- Fila 6 -->
			<tr>
				<th>PROVINCIA:</th>
				<td><select name="provincia">
						<option>Albacete</option>
						<option>Alicante</option>
						<option>Almería</option>
						<option selected>Murcia</option>
						<option>Valencia</option>
					</select>
				</td>
				<th rowspan="3">OTROS:</th>
				<td rowspan="3"><textarea name="otros" rows="4" cols="20"></textarea> </td>
			<!-- Fila 7 -->
			<tr>
				<th>AFICIONES:</th>
				<td>
					<input type="checkbox" name="aficiones[]" value="Deportes" />Deportes
					<input type="checkbox" name="aficiones[]" value="Cine" />Cine
					<input type="checkbox" name="aficiones[]" value="Música" />Música
					<input type="checkbox" name="aficiones[]" value="Viajar" />Viajar
					<input type="checkbox" name="aficiones[]" value="Leer" />Leer
				</td>
				<!-- Fila 8 -->
			<tr>
				<th id="botones" colspan="3">
					<!-- Botones -->
					<input type="submit" name="EJECUTAR" value="Aceptar" />
					<input type="reset" name="CANCELAR" value="Cancelar" />					
					<input type="button" name="INFO" value="Información"
						onclick="window.alert('Esto es un ejemplo de formulario');" />
					<input type="submit" name="LISTAR" value="Listado" />
				</th>
			<tr>

		</table>
	</form>

<?php

}
?>
</body>

</html>