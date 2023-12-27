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
        <!-- component -->
        <div class=" shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2 bg-gray-100 ">
            <h2 class="text-xl">Informações do Usuário</h1>
                <div class="mt-6 -mx-3 md:flex mb-6">
                    <div class="md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                            for="grid-state">
                            Tipo de Conta
                        </label>
                        <div class="flex flex-row-reverse items-center">
                            <input type="text" value="{{ csrf_token() }}" id="token" hidden>
                            <select
                                class="block appearance-none w-full bg-gray-300 border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded"
                                id="dropdown" name="tipo_conta">
                                <option value="0">Selecione o tipo de conta</option>
                                <option value="1">Candidato</option>
                                <option value="2">Empresa</option>
                            </select>
                            <div
                                class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
                                <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path
                                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <form action="{{ route('infor.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @if (!auth()->user()->profile_photo_path)
                        <div class="-mx-3 md:flex mb-6">
                            <div class="md:w-full px-3">
                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2 "
                                    for="grid-password">
                                    Perfil
                                </label>
                                <input
                                    class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-gray-500 rounded py-3 px-4 mb-3"
                                    id="grid-password" type="file" name="perfil"/>
                            </div>
                        </div>
                    @endif
                    @include('components.app.form_conta')
        </div>
        </form>

        {{-- <!-- form do candidato -->
        @include('components.app.formCandidato') --}}


    </div>

</body>

</html>
