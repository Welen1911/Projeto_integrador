<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>I-Trampo</title>
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

        <form action="{{ route('empresa.update', $empresa->id) }}" method="post">
            @csrf
            @method('PUT')
            <!-- form do candidato -->
            @include('components.app.formEmpresa')
            <a class="w-40 inline-block pt-4 pr-5 pb-4 pl-5 text-xl  font-medium text-center text-white bg-indigo-800
            rounded-lg transition duration-200 hover:bg-indigo-600 ease" href="{{ route('empresa.destroy', $empresa->id) }}">Deletar</a>
        </form>

        {{--<form action="{{ route('empresa.destroy', $empresa->id) }}" method="post">
            @csrf
            @method('DELETE')
            <!-- form do candidato -->
           <button>Deletar</button>
        </form>--}}

    </div>
    <div class="inset-x-0 mt-20 z-10 w-full px-8 sm:px-16 lg:px-40 py-1 " id="myForm">

       

    </div>

</body>

</html>
