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
                <form class="mt-4 flex w-full flex-col flex-wrap gap-5 xl:flex-row">
                    <div class="flex flex-nowrap w-full sm:flex sm:space-x-4">
                        <div class="relative w-full">
                            <div class="absolute  inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="search" name="barPesquisarVagas" id="default-search"
                                class=" w-80 sm:w-full lg:w-full p-4 ps-10 text-sm rounded-lg text-gray-900 dark:placeholder-gray-400 border border-blue-500"
                                placeholder="Procure as vagas" required>
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
                            <input type="search" name="barPesquisarLocal" id="default-search"
                                class=" w-80 sm:w-full lg:w-full p-4 ps-10 text-sm rounded-lg text-gray-900 dark:placeholder-gray-400 border border-blue-500"
                                placeholder="Local da vaga" required>
                        </div>
                    </div>

                    <div class="flex flex-nowrap w-full sm:flex sm:space-x-4">
                        <select id="pricingType" name="pricingType"
                            class="w-full h-10 border-2 border-gray-500 bg-gray-300 text-sm rounded-lg px-2 md:px-3 py-0 md:py-1 tracking-wider">
                            <option value="All" selected="">All</option>
                            <option value="Freemium">Freemium</option>
                            <option value="Free">Free</option>
                            <option value="Paid">Paid</option>
                        </select>

                        <select id="pricingType" name="pricingType"
                            class="w-full h-10 border-2 border-gray-500 bg-gray-300 text-sm rounded-lg px-2 md:px-3 py-0 md:py-1 tracking-wider">
                            <option value="All" selected="">All</option>
                            <option value="Freemium">Freemium</option>
                            <option value="Free">Free</option>
                            <option value="Paid">Paid</option>
                        </select>

                        <select id="pricingType" name="pricingType"
                            class="w-full h-10 border-2 border-gray-500 bg-gray-300 text-sm rounded-lg px-2 md:px-3 py-0 md:py-1 tracking-wider">
                            <option value="All" selected="">All</option>
                            <option value="Freemium">Freemium</option>
                            <option value="Free">Free</option>
                            <option value="Paid">Paid</option>
                        </select>

                        <select id="pricingType" name="pricingType"
                            class="w-full h-10 border-2 border-gray-500 bg-gray-300 text-sm rounded-lg px-2 md:px-3 py-0 md:py-1 tracking-wider">
                            <option value="All" selected="">All</option>
                            <option value="Freemium">Freemium</option>
                            <option value="Free">Free</option>
                            <option value="Paid">Paid</option>
                        </select>

                        <select id="pricingType" name="pricingType"
                            class="w-full h-10 border-2 border-gray-500 bg-gray-300 text-sm rounded-lg px-2 md:px-3 py-0 md:py-1 tracking-wider">
                            <option value="All" selected="">All</option>
                            <option value="Freemium">Freemium</option>
                            <option value="Free">Free</option>
                            <option value="Paid">Paid</option>
                        </select>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--Card de Pesquisa Recentes-->
    <div class="inset-x-0  w-full lg:h-4/5 z-0 px-8 py-1 h-auto  sm:px-16 sm:h-4/5 lg:px-40">
        <!-- Informação do lado Esquedo do Banner_-->
        <div class="flex inset-x-0 flex-col justify-between p-3 mt-4  xl:flex-row lg:content-center">
            <div class="grid  content-center">
                <h2 class="text-3xl font-extrabold text-indigo-800">
                    Nossas últimas vagas
                </h2>
            </div>
        </div>

        <!--Card de Pesquisa Recentes-->
        <div class="flex inset-x-0 flex-col w-full justify-between  mt-1 " id="listVagas">
            
            <div class="grid gap-5 items-center justify-items-center grid-cols-4">
                @foreach ($vagas as $vaga)
                    <a href="{{ route('vaga.show', $vaga->id) }}"
                    class="inline-block align-bottom hover:scale-105 hover:bg-gray-300 hover:ease-in bg-white rounded-lg text-left overflow-hidden shadow-lg transform transition-all mb-4 w-full">
                    <img class="rounded-t-lg" src="{{ asset('imagens/logoMagalu.png') }}" alt="" />
                    <div class="p-5">

                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $vaga->titulo }}</h5>

                        <p class="mb-3 font-normal text-gray-700 y">{{ $vaga->descricao }}</p>

                    </div>
                    </a>
                @endforeach
            </div>
            
            

            <nav aria-label="Page navigation example" class="mx-auto">
                <ul class="inline-flex -space-x-px text-base h-10">
                    {{-- <li>
                        <a href="#"
                            class="flex items-center justify-center px-4 h-10 ms-0 leading-tight text-gray-500 bg-gray-100 border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 ">
                            <</a>
                    </li> --}}
                    <li>
                        <a href="#"
                            class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-gray-100 border border-gray-300 hover:bg-gray-100 hover:text-gray-700 ">1</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-gray-100 border border-gray-300 hover:bg-gray-100 hover:text-gray-700 ">2</a>
                    </li>
                    <li>
                        <a href="#" aria-current="page"
                            class="flex items-center justify-center px-4 h-10 text-blue-600 border border-gray-300 bg-blue-100 hover:bg-blue-100 hover:text-blue-700 ">3</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-gray-100 border border-gray-300 hover:bg-gray-100 hover:text-gray-700 ">4</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-gray-100 border border-gray-300 hover:bg-gray-100 hover:text-gray-700 ">5</a>
                    </li>
                    {{-- <li>
                        <a href="#"
                            class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-gray-100 border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 ">></a>
                    </li> --}}
                </ul>
            </nav>
        </div>
    </div>
@endsection

@section('footer')
    @include('components.app.footer')
@endsection
