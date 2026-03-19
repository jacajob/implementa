<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Crear Cliente</h1>    

<form action="/cliente" method="POST">
    @csrf
<label for="nombre">Codigo Cliente</label>
<input type="text" name="codigoCliente" id="codigoCliente">

<label for="apellido">Nombre Cliente</label>
<input type="text" name="nombreCliente" id="nombreCliente">

<label for="apellido">Apellido Cliente</label>
<input type="text" name="apellidoCliente" id="apellidoCliente">

<label for="apellido">Ciudad Cliente</label>
<input type="text" name="ciudadCliente" id="ciudadCliente">

<button type="submit">Guardar Alumno</button>
</form>

</body>
</html>