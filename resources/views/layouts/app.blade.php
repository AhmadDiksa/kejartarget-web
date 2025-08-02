<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KejarTarget - Your Event Partner</title>
    @vite('resources/css/app.css')
    <!-- Tambahkan Google Fonts Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; }
    </style>
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