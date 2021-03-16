<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
    Ingresa los datos del Libro
    </header>
    <form action='administrar_libro.php' method='post'>
        <table>
            <tr>
                <td>Nombre libro:</td>
                <td> <input type='text' name='nombre'></td>
            </tr>
            <tr>
                <td>Autor:</td>
                <td><input type='text' name='autor' ></td>
            </tr>
            <tr>
                <td>Fecha Edición:</td>
                <td><input type='text' name='edicion' ></td>
            </tr>
            <input type='hidden' name='insertar' value='insertar'>
        </table>
        <input type='submit' value='Guardar'>
        <a href="dashboard.php">Volver</a>
    </form>
</body>
</html>