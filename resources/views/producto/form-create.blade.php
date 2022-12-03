<x-plantilla>
    <h3>Agregar nuevo producto: </h3>
    <form action="{{ route('productos.store') }}" method="POST">
        @csrf
        <label for="nombre">Nombre del Producto:</label>
        <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}">
        @error('nombre')
        <i>{{ $message }}</i>
        @enderror
        <br>
        <label for="categoria">Categoria:</label>
        <select name="categoria_id" id="categoria_id">
            @foreach ($categorias as $categoria)
            <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                
            @endforeach
        </select>
        @error('categoria')
        <i>{{ $message }}</i>
        @enderror
        <br>
        <label for="existencias">Existencias:</label>
        <input type="number" name="existencias" id="existencias" value="{{ old('existencias') }}">
        @error('existencias')
        <i>{{ $message }}</i>
        @enderror
        <br>
        <label for="precio">Precio:</label>
        <input type="number" name="precio" id="precio" value="{{ old('precio') }}">
        @error('precio')
        <i>{{ $message }}</i>
        @enderror
        <br>
        <input class="button" type="submit" value="Enviar">
    </form>
</x-plantilla>
