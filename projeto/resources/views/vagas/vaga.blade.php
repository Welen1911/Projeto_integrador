@extends('_layout.principal')


@section('header')
    <!-- Navigation Bar -->
    @include('components.app.header')
@endsection

@section('content')
    <div class="inset-x-0 mt-20 w-full lg:h-4/5 z-0 px-8 py-1 h-auto bg-gray-100 sm:px-16 sm:h-4/5 lg:px-40">
        <div class="flex inset-x-0 flex-col justify-center p-3 pt-20 pb-20 xl:flex-row lg:content-center w-full">
            <div class="grid place-items-center w-full">
                <p class="text-2x1 text-white-800 align">{{ getVinculo($vaga->vinculo->nome) }}</p>
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
                <h1 class="text-4xl text-indigo-800">Empresa</h1>
            </div>
        </div>

        <div class="flex inset-x-0 justify-center p-3 mt-4 xl:flex-row lg:content-center w-full">
            <div class=" flex border items-center justify-center flex-row rounded-md w-full border-gray-400">
                <div class="rounded-l-md w-full flex justify-center">
                    @if (strpos($vaga->empresa->user->profile_photo_path, 'perfis/') === false)
                        <img class=" h-40 rounded-l-sm" src="{{ $vaga->empresa->user->profile_photo_path }}" alt="">
                    @else
                        <img class=" h-40 rounded-l-sm"
                            src="{{ url('storage/' . $vaga->empresa->user->profile_photo_path) }}" alt="">
                    @endif

                </div>
                <div class="flex w-full flex-wrap flex-grow mt-10  text-center md:pl-1  md:text-left">
                    <div class="w-full px-4 ">
                        <nav class="mb-10 list-none">
                            <li class="mt-3">
                                <a href="{{ route('empresa.perfil', $vaga->empresa->id) }}"
                                    class="text-gray-500 cursor-pointer hover:text-gray-900">{{ $vaga->empresa->user->name }}</a>
                            </li>
                            <li class="mt-3">
                                <a href="{{ route('empresa.perfil', $vaga->empresa->id) }}"
                                    class="text-gray-500 cursor-pointer hover:text-gray-900">{{ $vaga->empresa->descricao }}</a>
                            </li>
                        </nav>
                    </div>


                </div>
            </div>
        </div>
    </div>

    @can('isEmpresa')
        <a href="{{ route('vaga.edit', $vaga->id) }}" class=" ">
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
        {{-- @if (auth()->user()->candidato->candidatura()->where('vaga_id'))
        
    @endif --}}
        @can('candidato_candidatura', $vaga)
            <button
                class=" text-base text-center text-black hover:bg-gray-50 transition-all hover:scale-105 hover:ease-in md:mt-20 p-6 py-3 border w-72 border-black rounded-full mx-auto"
                disabled>
                Você já se candidatou!
            </button>
        @else
            <form action="{{ route('candidatura.store') }}" method="post">
                @csrf
                <input type="text" value="{{ $vaga->id }}" name="vaga_id" hidden>
                <button
                    class=" text-base text-center text-black hover:bg-gray-50 transition-all hover:scale-105 hover:ease-in md:mt-20 p-6 py-3 border w-72 border-black rounded-full mx-auto">
                    Candidatar-se!
                </button>
            </form>
        @endcan
    @endcan
    @guest
        <form action="{{ route('candidatura.store') }}" method="post">
            @csrf
            <input type="text" value="{{ $vaga->id }}" name="vaga_id" hidden>
            <button
                class=" text-base text-center text-black hover:bg-gray-50 transition-all hover:scale-105 hover:ease-in md:mt-20 p-6 py-3 border w-72 border-black rounded-full mx-auto">
                Candidatar-se!
            </button>
        </form>
    @endguest
    @can('isEmpresa')
        @if (count($candidaturas) > 0)
            <div>
                <br><br><br>
                <div class="flex items-center justify-center">
                    <h1>Candidaturas</h1>
                </div>
                <br><br><br>
                <div class="flex items-center justify-center">
                    <div
                        class="mb-12 grid gap-y-10 gap-x-12 md:grid-cols-2 xl:grid-cols-{{ count($candidaturas) < 4 ? count($candidaturas) : 4 }}">
                        @foreach ($candidaturas as $candidatura)
                            <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md">
                                @if (strpos($candidatura->candidato->user->profile_photo_path, 'perfis/') === false)
                                    <img class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-blue-600 to-blue-400 text-white shadow-blue-500/40 shadow-lg absolute -mt-4 grid h-16 w-16 place-items-center"
                                        src="{{ $candidatura->candidato->user->profile_photo_path }}" alt="">
                                @else
                                    <img class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-blue-600 to-blue-400 text-white shadow-blue-500/40 shadow-lg absolute -mt-4 grid h-16 w-16 place-items-center"
                                        src="{{ url('storage/' . $candidatura->candidato->user->profile_photo_path) }}"
                                        alt="">
                                @endif


                                <div class="p-10 text-right">
                                    <p
                                        class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">
                                        Candidato:</p>
                                    <h4
                                        class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">
                                        {{ $candidatura->candidato->user->name }}</h4>
                                </div>
                                <div class="border-t border-blue-gray-50 p-4">
                                    <p
                                        class="block antialiased font-sans text-base leading-relaxed font-normal text-blue-gray-600">
                                        <a href="{{ route('candidato.perfil', $candidatura->candidato->id) }}"><strong
                                                class="text-green-500">Ver perfil</strong></a>
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="flex items-center justify-center m-8">{{ $candidaturas->links() }}</div>
            </div>
        @endif
    @endcan
@endsection

@section('footer')
    @include('components.app.footer')
@endsection
