<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-gray-100 text-gray-800">
    <div class="min-h-screen flex items-center justify-center">
        <div class="text-center">
            <h1 class="text-4xl font-bold mb-4">Welcome to My App</h1>
            <p class="text-lg text-gray-600">Laravel Jetstream + Livewire</p>
            <div class="mt-6">
                @auth
                    <a href="{{ route('dashboard') }}" class="text-blue-500 hover:underline">Go to Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-blue-500 hover:underline mr-4">Login</a>
                    <a href="{{ route('register') }}" class="text-blue-500 hover:underline">Register</a>
                @endauth
            </div>
        </div>
    </div>
</body>
</html>  