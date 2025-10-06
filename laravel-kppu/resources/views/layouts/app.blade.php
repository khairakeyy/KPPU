<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KPPU Republik Indonesia</title>
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
</head>
</head>
<body class="bg-gray-100 font-sans">
    <x-navbar />

    <main>
        @yield('content')
    </main>

    <img src="{{ asset('images/maskot.png') }}" alt="Maskot" class="fixed bottom-8 right-8 w-24 h-auto z-50 hidden md:block">

</body>
</html>
