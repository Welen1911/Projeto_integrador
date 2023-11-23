<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagtina @yield('titulo')</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="text-3xl font-bold underline">
        @yield('conteudo')
    </div>
</body>
</html>