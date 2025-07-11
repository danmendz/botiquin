<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenido</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="relative">

    <div class="min-h-screen w-full relative bg-white">
        <div class="absolute inset-0 z-0"
            style="
                background-image: radial-gradient(125% 125% at 50% 90%, #ffffff 55%, rgba(236, 72, 72, 0.5) 100%);
                background-size: 100% 100%;
            ">
        </div>
        <!-- Login/Register en la parte superior derecha -->
        <div class="sticky top-4 z-50 ml-auto w-auto p-4 rounded-lg shadow-sm flex justify-end items-center space-x-4">
            @auth
            <a href="{{ route('dashboard') }}" class="text-red-600 hover:underline font-bold">Ir al panel</a>
            @else
            <a href="{{ route('login') }}" class="text-red-600 hover:underline font-bold">Iniciar sesión</a>
            <a href="{{ route('register') }}" class="text-red-600 hover:underline font-bold">Registrar</a>
            @endauth
        </div>
        <!-- Hero -->
        <div class="relative overflow-hidden">
            <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 py-10">
                <div class="max-w-2xl text-center mx-auto">
                    <h1 class="block text-3xl font-bold text-gray-800 sm:text-4xl md:text-5xl">
                        Control total de tu <span class="text-red-600">botiquín</span> en un solo lugar
                    </h1>
                    <p class="mt-3 text-lg text-gray-800">|
                        Te permite gestionar los medicamentos y suministros de tu botiquín de manera sencilla y
                        eficiente.
                    </p>
                    <div class="mt-6">
                        <!-- Aquí ya no es necesario poner los enlaces -->
                    </div>
                </div>

                <!-- Imagen -->
                <div class="mt-10 relative max-w-5xl mx-auto">
                    <div class="w-full h-96 sm:h-120 bg-no-repeat bg-center bg-cover rounded-xl"
                        style="background-image: url('{{ asset('images/consultorio.jpg') }}');">
                    </div>

                    <div
                        class="absolute bottom-12 -start-20 -z-1 size-48 bg-gradient-to-b from-red-500 to-white p-px rounded-lg dark:to-neutral-900">
                        <div class="bg-white size-48 rounded-lg"></div>
                    </div>

                    <div
                        class="absolute -top-12 -end-20 -z-1 size-48 bg-gradient-to-t from-red-600 to-orange-400 p-px rounded-full">
                        <div class="bg-white size-48 rounded-full"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Hero -->

    </div>
</body>

<script src="../../node_modules/preline/dist/preline.js"></script>

</html>
