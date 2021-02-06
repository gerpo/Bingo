<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Bingo - @yield('title')</title>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>
    @livewireStyles
</head>

<body class="bg-gray-700 bg-gradient-to-b from-red-100">
    <div class="container px-10 py-10 mx-auto">
        {{ $slot }}
    </div>

    @livewireScripts
</body>

</html>