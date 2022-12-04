<x-plantilla>

    <div class="p-8 rounded border border-gray-200">
        <h1 class="font-medium text-3xl">Agregar Nuevo Producto:</h1>
        <form action="{{ route('productos.store') }}" method="POST">
            @csrf
            <div class="mt-8 grid lg:grid-cols-2 gap-4">
                <div> <label for="nombre" class="text-sm text-gray-700 block mb-1 font-medium">Nombre</label>
                    <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}" required
                        class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full" />
                    @error('nombre')
                        <i>{{ $message }}</i>
                    @enderror
                </div>
                <div> <label for="categoria" class="text-sm text-gray-700 block mb-1 font-medium">Categoria</label>
                    <select name="categoria_id" id="categoria_id"
                        class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full">
                        @foreach ($categorias as $categoria)
                            <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                        @endforeach
                    </select>
                    @error('categoria')
                        <i>{{ $message }}</i>
                    @enderror
                </div>
                <div> <label for="existencias" class="text-sm text-gray-700 block mb-1 font-medium">Existencias</label>
                    <input type="number" name="existencias" id="existencias" value="{{ old('existencias') }}" required
                        class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full" />
                    @error('existencias')
                        <i>{{ $message }}</i>
                    @enderror
                </div>
                <div> <label for="precio" class="text-sm text-gray-700 block mb-1 font-medium">Precio</label> <input
                        type="number" name="precio" id="precio" value="{{ old('precio') }}" required
                        class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full" />
                    @error('precio')
                        <i>{{ $message }}</i>
                    @enderror
                </div>
                <div>
                    <input type="hidden" name="user_id" id="user_id" value="{{ $user->id }}" required
                        class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full" />
                    @error('nombre')
                        <i>{{ $message }}</i>
                    @enderror
                </div>
            </div>
            <div class="space-x-4 mt-8">
                <button type="submit"
                    class="py-2 px-4 bg-blue-500 text-white rounded hover:bg-blue-600 active:bg-blue-700 disabled:opacity-50">Guardar</button>
                <!-- Secondary -->
                <a href="{{ route('productos.index') }}" class="py-2 px-4 bg-gray-500 text-white rounded hover:bg-gray-600 active:bg-gray-700 disabled:opacity-50">Cancelar</a>
            </div>
        </form>
    </div>
</x-plantilla>
