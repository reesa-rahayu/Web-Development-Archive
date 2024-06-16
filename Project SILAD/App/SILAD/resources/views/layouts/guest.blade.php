<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    <style>
        .gradient {
            background: linear-gradient(90deg, #907ffe 0%, #5887FF 100%);
        }

        @media (prefers-color-scheme: dark) {
            .gradient {
                background: linear-gradient(90deg, #1c1645 0%, #5887FF 100%);
            }
        }
    </style>
</head>

<body class="font-sans text-gray-900 antialiased">
    <div
        class="gradient min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
        <div class="mt-8">
            <a href="/" wire:navigate>
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </div>

        <div class="mt-4">
            {{ $slot }}
        </div>
    </div>
</body>

</html>
