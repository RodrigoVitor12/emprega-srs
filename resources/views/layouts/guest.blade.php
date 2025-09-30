<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <x-navbar />

        <div 
            class=" py-12 px-2 flex flex-col sm:justify-center items-center"
        >
            <div>
                <a href="/" wire:navigate class="text-3xl text-[#155DFC] font-bold">
                    @yield('text')
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-gradient-to-r from-blue-500  to-blue-700 shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>

        <x-footer />

        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
</html>
