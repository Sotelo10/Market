<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ElectroMarket</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

    <div class="bg-blue-800 p-1 text-sm">
        <div class="container mx-auto flex justify-between items-center">
            <div>
                <span class="text-gray-100">Teléfono: (051) 985422874</span>
                <span class="mx-2 text-gray-100">Correo: carlosdsy.7@gmail.com</span>
            </div>

        </div>
    </div>

    <div class="relative">
        <!-- Video que ocupa todo el marco principal -->
        <video class="w-full h-screen object-cover mb-8" autoplay muted loop>
            <source src="{{ asset('video/tecnologia.mp4') }}" type="video/mp4">
        </video>

        <nav class="absolute inset-x-0 top-0 flex justify-between items-center bg-black bg-opacity-70 text-white p-6">
            <a href="{{ url('/') }}" class="text-6xl font-bold ml-6">Electro Market</a>
            <div class="flex space-x-6">
                <a href="{{ route('productos') }}" class="flex flex-col items-center text-white">
                    <img src="{{ asset('img/productos.svg') }}" alt="Productos" class="w-8 h-8 mb-2">
                    <span class="text-lg">Productos</span>
                </a>
                <a href="{{ route('register') }}" class="flex flex-col items-center text-white">
                    <img src="{{ asset('img/login.svg') }}" alt="Iniciar Sesión" class="w-8 h-8 mb-2">
                    <span class="text-lg">Inicia sesión</span>
                </a>
                <a href="#" class="flex flex-col items-center text-white">
                    <img src="{{ asset('img/carrito.svg') }}" alt="Carrito" class="w-8 h-8 mb-2">
                    <span class="text-lg">Carrito</span>
                </a>
            </div>
        </nav>



    <div class="flex justify-between items-center p-4 bg-transparent text-white">
        <div class="w-1/4 h-16 bg-transparent relative text-center">
            <img src="{{ asset('img/carrito.svg') }}" alt="Carrito SVG" class="w-8 h-8 mx-auto mb-1">
            <span class="text-lg font-bold text-black mb-1">Delivery a Todo El Perú</span>
            <p class="text-xs text-black">Cotiza el precio de envío</p>
            <div class="absolute inset-x-0 bottom-0 h-px bg-gray-600"></div>
        </div>
        <div class="w-1/4 h-16 bg-transparent relative text-center">
            <img src="{{ asset('img/tarjeta.svg') }}" alt="Tarjetas SVG" class="w-8 h-8 mx-auto mb-1">
            <span class="text-lg font-bold text-black mb-1">Compra Segura</span>
            <p class="text-xs text-black">Aceptamos todos los medios de pago</p>
            <div class="absolute inset-x-0 bottom-0 h-px bg-gray-600"></div>
        </div>
        <div class="w-1/4 h-16 bg-transparent relative text-center">
            <img src="{{ asset('img/planta.svg') }}" alt="Florero SVG" class="w-8 h-8 mx-auto mb-1">
            <span class="text-lg font-bold text-black mb-1">Productos de Calidad</span>
            <p class="text-xs text-black">Compra Seguro compra en ElectroMarket</p>
            <div class="absolute inset-x-0 bottom-0 h-px bg-gray-600"></div>
        </div>
        <div class="w-1/4 h-16 bg-transparent relative text-center">
            <div class="flex items-center justify-center">
                <a href="https://www.facebook.com/tu_pagina" target="_blank" rel="noopener noreferrer" class="mx-2">
                    <img src="{{ asset('img/fb.svg') }}" alt="Facebook SVG" class="w-8 h-8">
                </a>
                <a href="https://www.instagram.com/tu_pagina" target="_blank" rel="noopener noreferrer" class="mx-2">
                    <img src="{{ asset('img/ig.svg') }}" alt="Instagram SVG" class="w-8 h-8">
                </a>
            </div>
            <span class="text-lg font-bold text-black mb-1">Redes Sociales</span>
            <p class="text-xs text-black">Síguenos en Facebook e Instagram</p>
            <div class="absolute inset-x-0 bottom-0 h-px bg-gray-600"></div>
        </div>
    </div>





    <div class="relative bg-cover bg-center h-96" style="background-image: url('{{ asset('img/fondo.png') }}')">
        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
            <div class="text-white text-center">
                <h2 class="text-4xl font-extrabold mb-4">Comunícate con nosotros</h2>
                <div class="grid grid-cols-3 gap-4">
                    <div>
                        <a href="https://wa.me/985422874?text=%F0%9F%98%80" target="_blank">
                            <img src="{{ asset('img/wsp.svg') }}" alt="WhatsApp" class="mx-auto h-12 mb-2">
                            <p>Vía WhatsApp</p>
                        </a>
                    </div>

                    <div>
                        <a href="tel:+985422874">
                            <img src="{{ asset('img/celular.svg') }}" alt="Teléfono" class="mx-auto h-12 mb-2">
                            <p>Vía Teléfono</p>
                        </a>
                    </div>

                    <div>
                        <a href="https://www.facebook.com/TuPaginaDeFacebook/" target="_blank">
                            <img src="{{ asset('img/fb.svg') }}" alt="Facebook" class="mx-auto h-12 mb-2">
                            <p>Vía Facebook</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
