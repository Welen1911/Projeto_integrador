<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/jquery.mask.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <!-- Estilo -->
    <link rel="stylesheet" href="{{ asset('css/interacao.css') }}">
</head>
</head>

<body>

    @include('components.app.header')

    <div class="inset-x-0 mt-20 z-10 w-full px-8 sm:px-16 lg:px-40 py-1 " id="myForm">

        <form action="{{ route('vaga.store') }}" method="post">
            @csrf
            <!-- form do candidato -->
            @include('components.app.formCadastroVagas')
        </form>

    </div>

</body>

</html>
