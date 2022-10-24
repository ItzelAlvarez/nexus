<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEXUS</title>
</head>

<body>
    @foreach ($productos as $producto)
        <tr>
            <td>{{ $producto->id }}</td>
            <td><a href="{{ route('productos.show', $producto) }}">{{ $producto->nombre }}</a></td>
            <td><a href="{{ route('productos.edit', $producto) }}">Editar</a></td>
            <td>
                <form method="POST" action="{{ route('productos.destroy', $producto) }}">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Eliminar">
                </form>
            </td>
        </tr>
    @endforeach
</body>

</html>
