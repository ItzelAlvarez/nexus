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
                            <th class="p-3">Entrada No</th>
                            <th class="p-3 text-left">Fecha de Creacion</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($entradas as $entrada)
                            <tr class="bg-gray-300">
                                <td class="p-3">
                                    <div class="flex align-items-center">
                                        <img class="rounded-full h-12 w-12  object-cover"
                                        src="{{ asset('imagen/icon_product.png') }}"
                                            alt="unsplash image">
                                        <div class="ml-3">
                                            <div class="mt-4 text-gray-900">{{ $entrada->id }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="p-3 text-gray-900">
                                    {{ $entrada->created_at->format('d/m/Y') }}
                                </td>
                                <td class="p-3 ">
                                    <a href="{{ route('entradas.show', $entrada) }}"
                                        class="text-gray-900 hover:text-gray-100 mr-2">
                                        <i class="material-icons-outlined text-base">visibility</i>
                                    </a>
                                    

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