<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NEXUS</title>
</head>

<body>
    <h3>Agregar nuevo producto: </h3>
    <form action="{{ route('productos.store') }}" method="POST">
        @csrf
        <label for="nombre">Nombre del Producto:</label>
        <input type="text" name="nombre" id="nombre">
        <br>
        <label for="categoria">Categoria:</label>
        <input type="text" name="categoria" id="categoria">
        <br>
        <label for="existencias">Existencias:</label>
        <input type="text" name="existencias" id="existencias">
        <br>
        <label for="precio">Precio:</label>
        <input type="text" name="precio" id="precio">
        <br>
        <input class="button" type="submit" value="Enviar">
    </form>
</body>

</html>
