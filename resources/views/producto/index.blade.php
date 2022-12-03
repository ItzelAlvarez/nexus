<x-plantilla>
    <h1>

        <div class="overflow-x-auto relative">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-3 px-6">
                            Nombre
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Categoria
                        </th>
                        <th scope="col" class="py-3 px-6">
                          Acciones
                      </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($productos as $producto)
                        <tr>
                            <td><a href="{{ route('productos.show', $producto) }}">{{ $producto->nombre }}</a></td>
                            <td>{{ $producto->categoria->nombre }}</td>
                            <td><a href="{{ route('productos.edit', $producto) }}">Editar</a>
                              <form method="POST" action="{{ route('productos.destroy', $producto) }}">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Eliminar">
                            </form>
                          </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

    </h1>
</x-plantilla>
