<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
 
<div class="container">
<h1>Crear Telefono</h1>    

<form action="/telefono" method="POST">
    @csrf

<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Codigo Cliente</span>
  <input type="text" class="form-control" placeholder="Codigo Cliente" aria-label="Codigo" name="codigoCliente" id="codigoCliente" value="{{$codigoCliente}}" aria-describedby="basic-addon1">
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Numero Telefono</span>
  <input type="text" class="form-control" placeholder="Numero de telefono" aria-label="Codigo" name="numero" id="numero" aria-describedby="basic-addon1">
</div>


<button type="submit" class="btn btn-danger">Guardar Telefono</button>
</form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>