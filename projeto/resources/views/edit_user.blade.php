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
                
                <form action="{{ route('user.update', $user->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="-mx-3 md:flex mb-6">
                        <div class="md:w-full px-3">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2 "
                                for="grid-password">
                                Perfil
                            </label>
                            <input
                                class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-gray-500 rounded py-3 px-4 mb-3"
                                id="grid-password" type="file" placeholder="Rua longe pra caralho" name="perfil"/>
                        </div>
                    </div>
                   @include('components.app.form_conta')
                   <input
    class="w-40 inline-block pt-4 pr-5 pb-4 pl-5 text-xl font-medium text-center text-white bg-indigo-800
rounded-lg transition duration-200 hover:bg-indigo-600 ease" type="submit" value="Enviar"/>
        </form>
        <form action="{{ route('user.destroy', $user->id) }}" method="post">
        @csrf
        @method('DELETE')
        <input
    class="w-40 inline-block pt-4 pr-5 pb-4 pl-5 text-xl font-medium text-center text-white bg-indigo-800
rounded-lg transition duration-200 hover:bg-indigo-600 ease" type="submit" value="Deletar"/>
        </form>

        {{-- <!-- form do candidato -->
        @include('components.app.formCandidato') --}}


    </div>

</body>

</html>
