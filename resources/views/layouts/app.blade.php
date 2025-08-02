<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KejarTarget - Your Event Partner</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 font-sans">
    <x-header />
    <main> 
        @yield('content')
    </main>
    <x-footer />

 @vite('resources/js/app.js')
</body>
</html>