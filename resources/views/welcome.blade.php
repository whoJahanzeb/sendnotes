<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
        {{-- @if (Route::has('login'))
            <livewire:welcome.navigation />
        @endif --}}
    </div>
    <div class="flex flex-col items-center justify-center p-6 mx-auto space-y-2 my-44 max-w-7xl lg:p-8">
        <x-application-logo class="w-10 h-10 text-indigo-600" />
        <a class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-700 focus:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
            href="{{ route('register') }}" wire:navigate>Getting Started</a>
    </div>
</body>

</html>
