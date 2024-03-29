@extends('_layout.principal')


@section('header')
    <!-- Navigation Bar -->
    @include('components.app.header')
@endsection

@section('content')
    <!-- Banner Inicial -->
    <div class="inset-x-0 mt-20 w-full lg:h-4/5 z-0 px-8 py-1 h-auto bg-gray-100 sm:px-16 sm:h-4/5 lg:px-40">
        <!-- Informação do lado Esquedo do Banner_-->
        <div class="flex inset-x-0 flex-col justify-center p-3 pt-20 pb-20 xl:flex-row lg:content-center w-full">
            <div class="grid place-items-center w-full">
                <!-- Titulo e subtitulo -->
                <h2 class="text-4xl font-extrabold text-indigo-800">
                    Procure a vaga que combina com você!
                </h2>
                <p class="my-4 text-lg text-indigo-600 text-center italic">
                    Não espere, vá atrás! Explore oportunidades que impulsione seu crescimento.
                    A oportunidade está ao alcance. Seu futuro começa agora!
                </p>
                <!-- Barras de Pesquisa -->
                <form class="mt-4 flex w-full flex-col flex-wrap gap-5 xl:flex-row" action="{{ route('vaga.index') }}">
                    <div class="flex flex-nowrap w-full sm:flex sm:space-x-4">
                        <div class="relative w-full">
                            <div class="absolute  inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="search" name="vagas" id="default-search"
                                class=" w-80 sm:w-full lg:w-full p-4 ps-10 text-sm rounded-lg text-gray-900 dark:placeholder-gray-400 border border-blue-500"
                                placeholder="Procure as vagas" />
                        </div>
                        <div class="relative w-full">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-400">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                </svg>
                            </div>
                            <select name="area" id="default-search"
                                class=" w-80 sm:w-full lg:w-full p-4 ps-10 text-sm rounded-lg text-gray-900 dark:placeholder-gray-400 border border-blue-500"
                                placeholder="Area da vaga">

                                <option value="">Escolha a area</option>
                                @foreach ($areas as $area)
                                    <option value="{{ $area->id }}">{{ $area->nome }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="flex flex-nowrap w-full sm:flex sm:space-x-4">
                        <button
                            class="w-full inline-block pt-4 pr-5 pb-4 pl-5 text-xl font-medium text-center text-white bg-indigo-800
                        rounded-lg transition duration-200 hover:bg-indigo-600 ease">Pesquisar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="inset-x-0  w-full lg:h-4/5 z-0 px-8 py-1 h-auto  sm:px-16 sm:h-4/5 lg:px-40">
        <!-- Informação do lado Esquedo do Banner_-->
        <div class="flex inset-x-0 flex-col justify-between p-3 mt-4  xl:flex-row lg:content-center">
            <div class="grid  content-center">
                <h2 class="text-3xl font-extrabold text-indigo-800">
                    Vagas Disponíveis
                </h2>
            </div>
        </div>

        <!--Card de Pesquisa Recentes-->
        <div class="flex inset-x-0 flex-col w-full justify-between  mt-1 " id="data">
            @if (count($vagas) > 0)
                <div class="grid gap-5 items-center justify-items-center grid-cols-2">
                    @foreach ($vagas as $vaga)
                        <a href="{{ route('vaga.show', $vaga->id) }}"
                            class="inline-block align-bottom hover:scale-105 hover:bg-gray-300 hover:ease-in bg-white rounded-lg text-left overflow-hidden shadow-lg transform transition-all mb-4 w-full">

                            <div class="p-5">

                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $vaga->titulo }}</h5>

                                <p class="mb-3 font-normal  text-gray-700 y">{{ $vaga->descricao }}</p>

                            </div>
                            <div class="p-5">
                                <p class="mb-3 font-normal  text-gray-700 y">{{ $vaga->area->nome }}</p>

                            </div>
                        </a>
                    @endforeach
                </div>
            @else
                <p>Não tem vagas disponíveis!</p>
            @endif

            <div class="mx-auto paginacao">

                {{ $vagas->render() }}
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @include('components.app.footer')
@endsection
