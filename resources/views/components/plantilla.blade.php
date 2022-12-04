<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Stock</title>
</head>

<body>
    <nav class="flex items-center justify-between flex-wrap bg-teal-500 p-6">
        <div class="flex items-center flex-shrink-0 text-white mr-6">

            <a href="{{ route('dashboard') }}"
                class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 font-semibold hover:text-white mr-12 ml-12">
                STOCK1
            </a>
        </div>
        <div class="block lg:hidden">
            <button
                class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                </svg>
            </button>
        </div>
        <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
            <div class="flex-none p-2">
                <button onclick="showDropdownOptions()" class="flex flex-row justify-between w-48 px-2 py-2 text-gray-700 bg-white border-2 border-white rounded-md shadow focus:outline-none focus:border-blue-600">
                    <span class="select-none">Productos</span>
                    <svg id="arrow-down" class="hidden w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" /></svg>
                    <svg id="arrow-up" class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd" /></svg>
                </button>
                <div id="options" class="hidden w-48 py-2 mt-2 bg-white rounded-lg shadow-xl">
                    <a  href="{{ route('productos.index') }}" class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white">Ver Productos</a>
                    <a href="{{ route('productos.create') }}" class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white">Agregar Producto</a>
                </div>
            </div>
            <div class="flex-none p-2">
                <button onclick="showDropdownOptions1()" class="flex flex-row justify-between w-48 px-2 py-2 text-gray-700 bg-white border-2 border-white rounded-md shadow focus:outline-none focus:border-blue-600">
                    <span class="select-none">Categorias</span>
                    <svg id="arrow-down1" class="hidden w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" /></svg>
                    <svg id="arrow-up1" class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd" /></svg>
                </button>
                <div id="options1" class="hidden w-48 py-2 mt-2 bg-white rounded-lg shadow-xl">
                    <a  href="{{ route('categorias.index') }}" class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white">Ver Categorias</a>
                    <a href="{{ route('categorias.create') }}" class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white">Agregar Categoria</a>
                </div>
            </div>
            <div class="flex-none p-2">
                <button onclick="showDropdownOptions2()" class="flex flex-row justify-between w-48 px-2 py-2 text-gray-700 bg-white border-2 border-white rounded-md shadow focus:outline-none focus:border-blue-600">
                    <span class="select-none">Entradas</span>
                    <svg id="arrow-down2" class="hidden w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" /></svg>
                    <svg id="arrow-up2" class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd" /></svg>
                </button>
                <div id="options2" class="hidden w-48 py-2 mt-2 bg-white rounded-lg shadow-xl">
                    <a  href="{{ route('entradas.index') }}" class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white">Ver Entradas</a>
                    <a href="{{ route('entradas.create') }}" class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white">Agregar Entrada</a>
                </div>
            </div>
            <div class="flex-none p-2">
                <button onclick="showDropdownOptions3()" class="flex flex-row justify-between w-48 px-2 py-2 text-gray-700 bg-white border-2 border-white rounded-md shadow focus:outline-none focus:border-blue-600">
                    <span class="select-none">Salidas</span>
                    <svg id="arrow-down3" class="hidden w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" /></svg>
                    <svg id="arrow-up3" class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd" /></svg>
                </button>
                <div id="options3" class="hidden w-48 py-2 mt-2 bg-white rounded-lg shadow-xl">
                    <a  href="{{ route('salidas.index') }}" class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white">Ver Salidas</a>
                    <a href="{{ route('salidas.create') }}" class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white">Agregar Salida</a>
                </div>
            </div>
            <div class="text-sm lg:flex-grow">
                
            </div>
            
            
            <script>
                function showDropdownOptions() {
                    document.getElementById("options").classList.toggle("hidden");
                    document.getElementById("arrow-up").classList.toggle("hidden");
                    document.getElementById("arrow-down").classList.toggle("hidden");
                }
                function showDropdownOptions1() {
                    document.getElementById("options1").classList.toggle("hidden");
                    document.getElementById("arrow-up1").classList.toggle("hidden");
                    document.getElementById("arrow-down1").classList.toggle("hidden");
                }
                function showDropdownOptions2() {
                    document.getElementById("options2").classList.toggle("hidden");
                    document.getElementById("arrow-up2").classList.toggle("hidden");
                    document.getElementById("arrow-down2").classList.toggle("hidden");
                }
                function showDropdownOptions3() {
                    document.getElementById("options3").classList.toggle("hidden");
                    document.getElementById("arrow-up3").classList.toggle("hidden");
                    document.getElementById("arrow-down3").classList.toggle("hidden");
                }
            </script>
            <div>
                <a href="#"
                    class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0">Iniciar
                    Sesion</a>
            </div>
        </div>
    </nav>
    
    {{ $slot }}
    
</body>

</html>
