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
        <header class="grid items-center grid-cols-2 gap-2 py-10 lg:grid-cols-3">
            @if (Route::has('login'))
                <livewire:welcome.navigation />
            @endif
        </header>
    </div>
</body>

</html>
