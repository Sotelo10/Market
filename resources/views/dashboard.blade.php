<x-app-layout>


    <div class="relative bg-gray-100">
        <!-- Video que ocupa todo el marco principal -->
        <video class="w-full h-screen object-cover mb-8" autoplay muted loop>
            <source src="{{ asset('video/tecnologia.mp4') }}" type="video/mp4">
        </video>

        <!-- Barra de Navegación -->
        <nav class="absolute inset-x-0 top-0 flex justify-between items-center bg-black bg-opacity-70 text-white p-6">
            <a href="{{ url('/') }}" class="text-6xl font-bold ml-6">Electro Market</a>
            <div class="flex space-x-6">
                <a href="{{ route('productos') }}" class="flex flex-col items-center text-white">
                    <img src="{{ asset('img/productos.svg') }}" alt="Productos" class="w-8 h-8 mb-2">
                    <span class="text-lg">Productos</span>
                </a>

                <a href="#" class="flex flex-col items-center text-white">
                    <img src="{{ asset('img/carrito.svg') }}" alt="Carrito" class="w-8 h-8 mb-2">
                    <span class="text-lg">Carrito</span>
                </a>
            </div>
        </nav>

        <!-- Sección de Productos -->
        <div class="absolute inset-x-0 top-1/2 flex flex-col items-center justify-center text-center text-white bg-black bg-opacity-50 p-8">
            <h2 class="text-4xl font-extrabold mb-6">Nuestros Productos</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                <!-- Ejemplo de producto -->
                <div class="bg-white p-4 shadow rounded">
                    <img src="{{ asset('img/ejemplo-producto.jpg') }}" alt="Producto" class="w-full h-32 object-cover mb-4">
                    <h2 class="text-xl font-semibold">Nombre del Producto</h2>
                    <p class="text-gray-600">Descripción del producto.</p>
                    <span class="text-lg font-bold text-blue-800">$100.00</span>
                    <a href="#" class="bg-blue-800 text-white px-4 py-2 rounded mt-4 inline-block">Comprar</a>
                </div>
                <!-- Añadir más productos aquí -->
            </div>
        </div>


    </div>
</x-app-layout>
