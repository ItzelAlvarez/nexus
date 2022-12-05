<x-plantilla>

    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet">
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="col-span-12">
            <div class="overflow-auto lg:overflow-visible ">
                <table class="table text-gray-400 border-separate space-y-6 text-sm">
                    <thead class="bg-gray-300 text-gray-900">
                        <tr>
                            <th class="p-3">Nombre</th>
                            <th class="p-3 text-left">Categoria</th>
                            <th class="p-3 text-left">Existencias</th>
                            <th class="p-3 text-left">Precio</th>
                            <th class="p-3 text-left">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($productos as $producto)
                            <tr class="bg-gray-300">
                                <td class="p-3">
                                    <div class="flex align-items-center">
                                        <img class="rounded-full h-12 w-12  object-cover"
                                        src="{{ asset('imagen/icon_product.png') }}"
                                            alt="unsplash image">
                                        <div class="ml-3">
                                            <div class="mt-4 text-gray-900">{{ $producto->nombre }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="p-3 text-gray-900">
                                    {{ $producto->categoria->nombre }}
                                </td>
                                <td class="p-3 font-bold text-gray-900">
                                    {{ $producto->existencias }}
                                </td>
                                <td class="p-3">
                                    <span class="text-gray-900">
                                        ${{ $producto->precio }}
                                    </span>
                                </td>
                                <td class="p-3 ">
                                    <a href="{{ route('productos.show', $producto) }}"
                                        class="text-gray-900 hover:text-gray-100 mr-2">
                                        <i class="material-icons-outlined text-base">visibility</i>
                                    </a>
                                    <a href="{{ route('productos.edit', $producto) }}"
                                        class="text-gray-900 hover:text-gray-100  mx-2">
                                        <i class="material-icons-outlined text-base">edit</i>
                                    </a>
                                    @can('delete', $producto)
                                    <form method="POST" action="{{ route('productos.destroy', $producto) }}">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="Eliminar">
                                    </form>
                                        
                                    @endcan
                                   

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <style>
        .table {
            border-spacing: 0 15px;
        }

        i {
            font-size: 1rem !important;
        }

        .table tr {
            border-radius: 20px;
        }

        tr td:nth-child(n+5),
        tr th:nth-child(n+5) {
            border-radius: 0 .625rem .625rem 0;
        }

        tr td:nth-child(1),
        tr th:nth-child(1) {
            border-radius: .625rem 0 0 .625rem;
        }
    </style>

</x-plantilla>
