<x-plantilla>

    <div class="p-8 rounded border border-gray-200">
        <h1 class="font-medium text-3xl">Agregar Nueva Categoria:</h1>
        <form action="{{ route('categorias.store') }}" method="POST">
            @csrf
            <div class="mt-8 grid lg:grid-cols-2 gap-4">
                <div> <label for="nombre" class="text-sm text-gray-700 block mb-1 font-medium">Nombre</label>
                    <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}" required
                        class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full" />
                    @error('nombre')
                        <i>{{ $message }}</i>
                    @enderror
                </div>
                
            <div class="space-x-4 mt-8">
                <button type="submit"
                    class="py-2 px-4 bg-blue-500 text-white rounded hover:bg-blue-600 active:bg-blue-700 disabled:opacity-50">Guardar</button>
                <!-- Secondary -->
                <a href="{{ route('categorias.index') }}" class="py-2 px-4 bg-gray-500 text-white rounded hover:bg-gray-600 active:bg-gray-700 disabled:opacity-50">Cancelar</a>
            </div>
        </form>
    </div>
</x-plantilla>