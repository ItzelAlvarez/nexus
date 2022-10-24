<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NEXUS</title>
</head>

<body>
    <h3>Editar producto: </h3>
    <form action="{{ route('productos.update', $producto->id) }}" method="POST">
        @csrf
        @method("PATCH")
        <label for="nombre">Nombre del Producto:</label>
        <input type="text" name="nombre" id="nombre" value="{{ old('nombre') ?? $producto->nombre }}">
        <br>
        <label for="categoria">Categoria:</label>
        <input type="text" name="categoria" id="categoria" value="{{ old('categoria') ?? $producto->categoria }}">
        <br>
        <label for="existencias">Existencias:</label>
        <input type="number" name="existencias" id="existencias" value="{{ old('existencias') ?? $producto->existencias }}">
        <br>
        <label for="precio">Precio:</label>
        <input type="number" name="precio" id="precio" value="{{ old('precio') ?? $producto->precio }}">
        <br>
        <input class="button" type="submit" value="Enviar">
    </form>
</body>

</html>
