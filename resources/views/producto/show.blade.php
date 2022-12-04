<x-plantilla>
    <div class="flex items-center justify-center mt-16">
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4">
            <!-- 2 card -->
            <div class="relative bg-white py-6 px-6 rounded-3xl w-64 my-4 shadow-xl">
                <div
                    class=" text-white flex items-center absolute rounded-full py-4 px-4 shadow-xl bg-green-500 left-4 -top-6">
                    <!-- svg  -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                    </svg>
                </div>
                <div class="mt-8">
                    <p class="text-xl font-semibold my-2">{{ $producto->nombre }}</p>

                    <div class="flex space-x-2 text-gray-400 text-sm my-3">
                        <p>Categoria: {{ $producto->categoria->nombre }}</p>
                    </div>
                    <div class="border-t-2 "></div>

                    <div class="flex justify-between">
                        <div class="my-2">
                            <p class="font-semibold text-base mb-2">Existencias</p>
                            <div class="text-base text-gray-400 font-semibold">
                                <p>{{ $producto->existencias }}</p>
                            </div>
                        </div>
                        <div class="my-2">
                            <p class="font-semibold text-base mb-2">Precio</p>
                            <div class="text-base text-gray-400 font-semibold">
                                <p>${{ $producto->precio }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-plantilla>
