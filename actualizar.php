<?php
//incluye la clase Libro y CrudLibro
	require_once('crud_libros.php');
	require_once('libro.php');
	$crud= new CrudLibro();
	$libro=new Libro();
	//busca el libro utilizando el id, que es enviado por GET desde la vista mostrar.php
	$libro=$crud->obtenerLibro($_GET['id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action='administrar_libro.php' method='post'>
	<table>
		<tr>
			<input type='hidden' name='id' value='<?php echo $libro->getId()?>'>
			<td>Nombre libro:</td>
			<td> <input type='text' name='nombre' value='<?php echo $libro->getNombre()?>'></td>
		</tr>
		<tr>
			<td>Autor:</td>
			<td><input type='text' name='autor' value='<?php echo $libro->getAutor()?>' ></td>
		</tr>
		<tr>
			<td>Fecha Edición:</td>
			<td><input type='text' name='edicion' value='<?php echo $libro->getAnio_edicion() ?>'></td>
		</tr>
		<input type='hidden' name='actualizar' value'actualizar'>
	</table>
	<input type='submit' value='Guardar'>
	<a href="index.php">Volver</a>
</form>
</body>
</html>