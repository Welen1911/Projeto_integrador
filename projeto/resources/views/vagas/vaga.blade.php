@extends('_layout.principal')


@section('header')
    <!-- Navigation Bar -->
    @include('components.app.header')
@endsection

@section('content')
    <div class="inset-x-0 mt-20 w-full lg:h-4/5 z-0 px-8 py-1 h-auto bg-gray-100 sm:px-16 sm:h-4/5 lg:px-40">
        <div class="flex inset-x-0 flex-col justify-center p-3 pt-20 pb-20 xl:flex-row lg:content-center w-full">
            <div class="grid place-items-center w-full">
                <p class="text-2x1 text-white-800 align">{{ $vaga->vinculo->nome }}</p>
                <h1 class="text-5xl mt-4 text-white-800">{{ $vaga->titulo }}</h1>
            </div>
        </div>
    </div>


    


    <div class="inset-x-0 w-full lg:h-4/5 z-0 px-8 py-1 h-auto sm:px-16 sm:h-4/5 lg:px-40">
        <div class="flex inset-x-0 flex-col justify-between p-3 mt-4 xl:flex-row lg:content-center">
            <div class="grid content-center">
                <h1 class="text-4xl text-indigo-800 flex-auto">Sobre a vaga</h1>
                <p class="mt-3 text-justify ml-7">
                    {{ $vaga->descricao }}
                </p>
            </div>
        </div>
    </div>

    @if ($vaga->atributos && count($vaga->atributos) > 0)
    <div class="inset-x-0 w-full lg:h-4/5 z-0 px-8 py-1 h-auto sm:px-16 sm:h-4/5 lg:px-40">
        <div class="flex inset-x-0 flex-col justify-between p-3 mt-4 xl:flex-row lg:content-center">
            <div class="grid content-center">
                <h1 class="text-3xl text-indigo-800 flex-auto">Responsabilidades e atribuições:</h1>
                <ul class="list-disc pl-4 mt-3 ml-7">
                    @foreach ($vaga->atributos as $atributo)
                    <li class="mb-2">
                        {{ $atributo->titulo }}
                    </li>
                    @endforeach
                    
                    {{-- <li class="mb-2">Realizar manutenção de sistemas e aplicações utilizando metodologias ágeis;</li>
                    <li class="mb-2">Manter registros atualizados na aplicação de chamados, tarefas e ações
                        realizadas.</li> --}}
                </ul>
            </div>
        </div>
    </div>
    @endif

    @if ($vaga->requisitos && count($vaga->requisitos) > 0)
    <div class="inset-x-0 w-full lg:h-4/5 z-0 px-8 py-1 h-auto sm:px-16 sm:h-4/5 lg:px-40">
        <div class="flex inset-x-0 flex-col justify-between p-3 mt-4 xl:flex-row lg:content-center">
            <div class="grid content-center">
                <h1 class="text-3xl text-indigo-800 flex-auto">Requisitos</h1>
                <ul class="list-disc pl-4 mt-3 ml-7">
                    @foreach ($vaga->requisitos as $requisito)
                    <li class="mb-2">
                        {{ $requisito->titulo }}
                    </li>
                    @endforeach
                    {{-- <li class="">Desejável conhecimento em desenvolvimento low code e/ou aplicação Mendix.</li> --}}
                </ul>
            </div>
        </div>
    </div>

        
    @endif

    <div class="inset-x-0 w-full lg:h-4/5 z-0 py-1 h-auto sm:px-16 sm:h-4/5 lg:px-40">
        <div class="flex inset-x-0 flex-col justify-between p-3 mt-4 xl:flex-row lg:content-center">
            <div class="grid content-center">
                <h1 class="text-4xl text-indigo-800">{{ $vaga->empresa->user->name }}</h1>
            </div>
        </div>

        <div class="flex inset-x-0 justify-center p-3 mt-4 xl:flex-row lg:content-center w-full">
            <div class=" flex border items-center justify-center flex-row rounded-md w-full border-gray-400">
                <div class="rounded-l-md w-full flex justify-center">
                    <img class=" h-40 rounded-l-sm" src="{{ asset('imagens/logoAmericanas.png') }}" alt="">
                </div>
                <div class="flex w-full flex-wrap justify-center  flex-grow mt-10  text-center md:pl-20  md:text-left">
                    <div class="w-full px-4 lg:w-1/4 md:w-1/2">
                        <nav class="mb-10 list-none">
                            <li class="mt-3">
                                <a class="text-gray-500 cursor-pointer hover:text-gray-900">Sobre nós</a>
                            </li>
                            <li class="mt-3">
                                <a class="text-gray-500 cursor-pointer hover:text-gray-900">Política de Privacidade</a>
                            </li>
                            <li class="mt-3">
                                <a class="text-gray-500 cursor-pointer hover:text-gray-900">Central de Ajuda</a>
                            </li>
                            <li class="mt-3">
                                <a class="text-gray-500 cursor-pointer hover:text-gray-900">Parceiros</a>
                            </li>
                        </nav>
                    </div>

                    <div class="w-full px-4 lg:w-1/4 md:w-1/2">
                        <nav class="mb-10 list-none">
                            <li class="mt-3">
                                <a class="text-gray-500 cursor-pointer hover:text-gray-900">Ajuda</a>
                            </li>
                            <li class="mt-3">
                                <a class="text-gray-500 cursor-pointer hover:text-gray-900">Blog</a>
                            </li>
                            <li class="mt-3">
                                <a class="text-gray-500 cursor-pointer hover:text-gray-900">Anunciar Vagas</a>
                            </li>
                            <li class="mt-3">
                                <a class="text-gray-500 cursor-pointer hover:text-gray-900">Buscar Candidatos</a>
                            </li>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @can('isEmpresa')
    <a href="#" class=" ">
        <p
            class=" text-base text-center text-black hover:bg-gray-50 transition-all hover:scale-105 hover:ease-in md:mt-20 p-6 py-3 border w-72 border-black rounded-full mx-auto">
            Editar
        </p>
    </a>   
    <form action="{{ route('vaga.destroy', $vaga->id) }}" method="post">
        @csrf
        @method('DELETE')
        <button
    class=" text-base text-center text-black hover:bg-gray-50 transition-all hover:scale-105 hover:ease-in md:mt-20 p-6 py-3 border w-72 border-black rounded-full mx-auto">
    Deletar
</button>
    </form>
    @elsecan('isCandidato')
    <form action="{{ route('candidatura.store') }}" method="post">
    @csrf
        <input type="text" value="{{ $vaga->id }}" name="vaga_id" hidden>
        <button
            class=" text-base text-center text-black hover:bg-gray-50 transition-all hover:scale-105 hover:ease-in md:mt-20 p-6 py-3 border w-72 border-black rounded-full mx-auto">
            Candidatar-se!
        </button>
    
    </form>
    @endcan
    
@endsection

@section('footer')
    @include('components.app.footer')
@endsection
