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
    {{-- @if ($errors->any())
    @dd($errors->all())
    @endif --}}
    <div class="inset-x-0 mt-20 z-10 w-full px-8 sm:px-16 lg:px-40 py-1 " id="myForm">

        <form action="{{ route('candidato.update', $candidato->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <!-- form do candidato -->
            @include('components.app.formCandidato')
        </form>
        <form action="{{ route('candidato.destroy', $candidato->id) }}" method="post">
            @csrf
            @method('DELETE')
            <!-- form do candidato -->
           <button class="w-40 inline-block pt-4 pr-5 pb-4 pl-5 text-xl  font-medium text-center text-white bg-indigo-800
           rounded-lg transition duration-200 hover:bg-indigo-600 ease">Deletar</button>
        </form>

    </div>

</body>

</html>
