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
        <div><a href="{{ route('productos.show', $producto) }}">{{ $producto->nombre }}</a></div>
    @endforeach
</body>

</html>
