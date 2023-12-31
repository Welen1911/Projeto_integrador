<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagtina @yield('titulo')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="{{ asset('js/jquery-3.6.0.js') }}"></script>
    <script src="{{ asset('js/jquery.mask.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <!-- Estilo -->
    <link rel="stylesheet" href="{{ asset('css/interacao.css') }}">
</head>

<body>

    <header>

		<!-- Navigation Bar -->
        @include('components.app.header')
    </header>


  
  {{--<div id="alert-3" class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
      <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
    </svg>
    <span class="sr-only">Info</span>
    <div class="ms-3 text-sm font-medium">
      A simple info alert with an <a href="#" class="font-semibold underline hover:no-underline">example link</a>. Give it a click if you like.
    </div>
    <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-3" aria-label="Close">
      <span class="sr-only">Close</span>
      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
      </svg>
    </button>
  </div>--}}
  
  

        <!-- Banner Inicial -->
        <div class="inset-x-0 mt-20 w-full lg:h-4/5 z-0 px-8 py-1 h-auto bg-gray-100 sm:px-16 sm:h-4/5 lg:px-40">
            <!-- Informação do lado Esquedo do Banner_-->
            <div class="flex inset-x-0 flex-col justify-between p-3 mt-4  xl:flex-row lg:content-center">
                <div class="grid  content-center">
                    <!-- Titulo e subtitulo -->
                    <h2 class="text-4xl font-extrabold text-indigo-800">
                        Explore o site de vagas de emprego mais completo do Rio Grande do Norte!
                    </h2>
                    <p class="my-4 text-lg text-indigo-600">
                        Faça sua pesquisa e veja as melhores opções de vagas do site de empregos que é o preferido
                        doskdmrfpofor recrutadores.
                    </p>

                    <!-- Barras de Pesquisa -->
                    <form class="mt-4 flex flex-col flex-nowrap gap-5 xl:flex-row">
                        <div class="relative f">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
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
                        <div class="relative ">
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
                        <button type="submit"
                            class="block p-2 text-sm font-medium text-white bg-indigo-800 rounded-lg border border-indigo-800 hover:bg-indigo-900 focus:ring-4 focus:outline-none focus:ring-indigo-300 ">
                            Buscar vagas
                        </button>
                    </form>
                </div>


                <div class=" sm:ml-auto lg:ml-auto ">

                    <img class="" src="{{ asset('imagens/ImgBanner.png') }}" alt="ImgBanner">

                </div>

            </div>
        </div>

        <!-- Segunda parte da pagina -->
        <div class="inset-x-0 w-full lg:h-4/5 z-0 px-8 py-1 h-auto sm:px-16 sm:h-4/5 lg:px-40 ">
            <div class="flex inset-x-0 p-3 flex-col justify-between mt-5  xl:flex-row lg:content-center">
                <div class="grid  content-center ">
                    <!-- Titulo e subtitulo -->
                    <h2 class="text-3xl font-extrabold text-indigo-800">
                        Suas pesquisas recentes
                    </h2>
                </div>
            </div>
            <!--Card de Pesquisa Recentes-->
            <div class="flex inset-x-0 flex-col w-full justify-between  p-3 mt-1 ">
                <div class="sm:flex sm:space-x-4">
                    <a href="http://www.youtube.com"
                        class="inline-block align-bottom hover:scale-105 hover:bg-gray-300 hover:ease-in bg-gray-200 rounded-lg text-left overflow-hidden shadow transform transition-all mb-4 w-full sm:w-1/3 sm:my-8 ">
                        <div class="p-5">
                            <div class="sm:flex sm:items-start">
                                <div class="text-center sm:mt-0 sm:ml-2 sm:text-left">
                                    <h3 class="text-sm leading-6 font-medium text-indigo-800">22 Novas Vagas</h3>
                                    <p class="text-3xl font-bold text-black">Nova Cruz, RN</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="http://www.youtube.com"
                        class="inline-block align-bottom hover:scale-105 hover:bg-gray-300 hover:ease-in bg-gray-200 rounded-lg text-left overflow-hidden shadow transform transition-all mb-4 w-full sm:w-1/3 sm:my-8">
                        <div class="p-5">
                            <div class="sm:flex sm:items-start">
                                <div class="text-center sm:mt-0 sm:ml-2 sm:text-left">
                                    <h3 class="text-sm leading-6 font-medium text-indigo-800">22 Novas Vagas</h3>
                                    <p class="text-3xl font-bold text-black">Nova Cruz, RN</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="http://www.youtube.com"
                        class="inline-block align-bottom hover:scale-105 hover:bg-gray-300 hover:ease-in bg-gray-200 rounded-lg text-left overflow-hidden shadow transform transition-all mb-4 w-full sm:w-1/3 sm:my-8">
                        <div class="p-5">
                            <div class="sm:flex sm:items-start">
                                <div class="text-center sm:mt-0 sm:ml-2 sm:text-left">
                                    <h3 class="text-sm leading-6 font-medium text-indigo-800">22 Novas Vagas</h3>
                                    <p class="text-3xl font-bold text-black">Nova Cruz, RN</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="http://www.youtube.com"
                        class="inline-block align-bottom hover:scale-105 hover:bg-gray-300 hover:ease-in bg-gray-200 rounded-lg text-left overflow-hidden shadow transform transition-all mb-4 w-full sm:w-1/3 sm:my-8">
                        <div class="p-5">
                            <div class="sm:flex sm:items-start">
                                <div class="text-center sm:mt-0 sm:ml-2 sm:text-left">
                                    <h3 class="text-sm leading-6 font-medium text-indigo-800">22 Novas Vagas</h3>
                                    <p class="text-3xl font-bold text-black">Nova Cruz, RN</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="flex inset-x-0 flex-col justify-between mt-2 p-3 xl:flex-row lg:content-center">
                <div class="grid  content-center ">
                    <!-- Titulo e subtitulo -->
                    <h2 class="text-3xl font-extrabold text-indigo-800 ">
                        Empresas lideres no Brasil estão contratando agora
                    </h2>
                </div>
            </div>

            <div class="flex inset-x-0 flex-col justify-between  mt-2 p-3 xl:flex-row lg:content-center">
                <div class="sm:ml-auto lg:ml-auto  grid content-center">
                    <img class="" src="{{ asset('imagens/ImgPg6.png') }}" alt="ImgBanner">
                </div>

                <div class=" mx-auto sm:px-6 lg:px-8 text-center">
                    <div class=" grid items-center max-w-4xl grid-cols-2 gap-4 mx-auto mt-12 md:mt-20 md:grid-cols-4">
                        <a href="http://www.youtube.com" class=" ">
                            <div
                                class="bg-white hover:bg-gray-50 transition-all hover:scale-110 hover:ease-in h-20 px-10 rounded-lg border border-gray-300 flex shadow-lg items-center justify-center">
                                <img class="object-contain w-16 h-16 sm:w-auto lg:w-auto mx-auto"
                                    src="{{ asset('imagens/logoAmericanas.png') }}" alt="">
                            </div>
                        </a>

                        <a href="http://www.youtube.com" class=" ">
                            <div
                                class="bg-white hover:bg-gray-50 transition-all hover:scale-110 hover:ease-in h-20 px-10 rounded-lg border border-gray-300 flex shadow-lg items-center justify-center">
                                <img class="object-contain w-16 h-16 mx-auto"
                                    src="{{ asset('imagens/logoApple.png') }}" alt="">
                            </div>
                        </a>

                        <a href="http://www.youtube.com" class=" ">
                            <div
                                class="bg-white hover:bg-gray-50 transition-all hover:scale-110 hover:ease-in h-20 px-10 rounded-lg border border-gray-300 flex shadow-lg items-center justify-center">
                                <img class="object-contain w-16 h-16 mx-auto"
                                    src="{{ asset('imagens/logoAssai.png') }}" alt="">
                            </div>
                        </a>

                        <a href="http://www.youtube.com" class=" ">
                            <div
                                class="bg-white hover:bg-gray-50 transition-all hover:scale-110 hover:ease-in h-20 px-10 rounded-lg border border-gray-300 flex shadow-lg items-center justify-center">
                                <img class="object-contain w-16 h-16 mx-auto"
                                    src="{{ asset('imagens/logoAzul.png') }}" alt="">
                            </div>
                        </a>

                        <a href="http://www.youtube.com" class=" ">
                            <div
                                class="bg-white hover:bg-gray-50 transition-all hover:scale-110 hover:ease-in h-20 px-10 rounded-lg border border-gray-300 flex shadow-lg items-center justify-center">
                                <img class="object-contain w-16 h-16 mx-auto"
                                    src="{{ asset('imagens/logoBgrKing.png') }}" alt="">
                            </div>
                        </a>

                        <a href="http://www.youtube.com" class=" ">
                            <div
                                class="bg-white hover:bg-gray-50 transition-all hover:scale-110 hover:ease-in h-20 px-10 rounded-lg border border-gray-300 flex shadow-lg items-center justify-center">
                                <img class="object-contain w-16 h-16 mx-auto"
                                    src="{{ asset('imagens/logoCacauShow.png') }}" alt="">
                            </div>
                        </a>

                        <a href="http://www.youtube.com" class=" ">
                            <div
                                class="bg-white hover:bg-gray-50 transition-all hover:scale-110 hover:ease-in h-20 px-10 rounded-lg border border-gray-300 flex shadow-lg items-center justify-center">
                                <img class="object-contain w-16 h-16 mx-auto"
                                    src="{{ asset('imagens/logoCarrefour.png') }}" alt="">
                            </div>
                        </a>

                        <a href="http://www.youtube.com" class=" ">
                            <div
                                class="bg-white hover:bg-gray-50 transition-all hover:scale-110 hover:ease-in h-20 px-10 rounded-lg border border-gray-300 flex shadow-lg items-center justify-center">
                                <img class="object-contain w-16 h-16 mx-auto" src="{{ asset('imagens/logoCea.png') }}"
                                    alt="">
                            </div>
                        </a>

                        <a href="http://www.youtube.com" class=" ">
                            <div
                                class="bg-white hover:bg-gray-50 transition-all hover:scale-110 hover:ease-in h-20 px-10 rounded-lg border border-gray-300 flex shadow-lg items-center justify-center">
                                <img class="object-contain w-16 h-16 mx-auto"
                                    src="{{ asset('imagens/logoGol.png') }}" alt="">
                            </div>
                        </a>

                        <a href="http://www.youtube.com" class=" ">
                            <div
                                class="bg-white hover:bg-gray-50 transition-all hover:scale-110 hover:ease-in h-20 px-10 rounded-lg border border-gray-300 flex shadow-lg items-center justify-center">
                                <img class="object-contain w-16 h-16 mx-auto "
                                    src="{{ asset('imagens/logoIfood.png') }}" alt="">
                            </div>
                        </a>

                        <a href="http://www.youtube.com" class=" ">
                            <div
                                class="bg-white hover:bg-gray-50 transition-all hover:scale-110 hover:ease-in h-20 px-10 rounded-lg border border-gray-300 flex shadow-lg items-center justify-center">
                                <img class="object-contain w-16 h-16 mx-auto"
                                    src="{{ asset('imagens/logoNike.png') }}" alt="">
                            </div>
                        </a>

                        <a href="http://www.youtube.com" class=" ">
                            <div
                                class="bg-white hover:bg-gray-50 transition-all hover:scale-110 hover:ease-in h-20 px-10 rounded-lg border border-gray-300 flex shadow-lg items-center justify-center">
                                <img class="object-contain w-16 h-16 mx-auto"
                                    src="{{ asset('imagens/logoUber.png') }}" alt="">
                            </div>
                        </a>

                        <a href="http://www.youtube.com" class=" ">
                            <div
                                class="bg-white hover:bg-gray-50 transition-all hover:scale-110 hover:ease-in h-20 px-10 rounded-lg border border-gray-300 flex shadow-lg items-center justify-center">
                                <img class="object-contain w-16 h-16 mx-auto"
                                    src="{{ asset('imagens/logoRenner.png') }}" alt="">
                            </div>
                        </a>

                        <a href="http://www.youtube.com" class=" ">
                            <div
                                class="bg-white hover:bg-gray-50 transition-all hover:scale-110 hover:ease-in h-20 px-10 rounded-lg border border-gray-300 flex shadow-lg items-center justify-center">
                                <img class="object-contain w-16 h-16 mx-auto "
                                    src="{{ asset('imagens/logoMicrosoft.png') }}" alt="">
                            </div>
                        </a>

                        <a href="http://www.youtube.com" class=" ">
                            <div
                                class="bg-white hover:bg-gray-50 transition-all hover:scale-110 hover:ease-in h-20 px-10 rounded-lg border border-gray-300 flex shadow-lg items-center justify-center">
                                <img class="object-contain w-16 h-16 mx-auto"
                                    src="{{ asset('imagens/logoMagalu.png') }}" alt="">
                            </div>
                        </a>

                        <a href="http://www.youtube.com" class=" ">
                            <div
                                class="bg-white  hover:bg-gray-50 transition-all hover:scale-110 hover:ease-in h-20 px-10 rounded-lg border border-gray-300 flex shadow-lg items-center justify-center">
                                <img class="object-contain w-16 h-16 mx-auto"
                                    src="{{ asset('imagens/logoNetshoes.png') }}" alt="">
                            </div>
                        </a>
                    </div>

                    <a href="http://www.youtube.com" class=" ">
                        <p
                            class="mt-10 text-base text-center text-black hover:bg-gray-50 transition-all hover:scale-105 hover:ease-in md:mt-20 p-6 py-3 border w-72 border-black rounded-full mx-auto">
                            Veja mais empresas!
                        </p>
                    </a>
                </div>
            </div>
        </div>

        <!--Terceira Parte -->
        <div class="inset-x-0 mt-10 w-full lg:h-4/5 z-0 px-8 py-1 h-auto bg-gray-100 sm:px-16 sm:h-4/5 lg:px-40">
            <!-- Informação do lado Esquedo do Banner_-->
            <div class="flex inset-x-0 flex-col justify-between p-3 mt-4  xl:flex-row lg:content-center">
                <div class="grid  content-center">
                    <h2 class="text-3xl font-extrabold text-indigo-800">
                        Nossas últimas vagas
                    </h2>
                </div>
            </div>

            <!--Card de Pesquisa Recentes-->
            <div class="flex inset-x-0 flex-col w-full justify-between  p-3 mt-1 ">
                <div class="sm:flex sm:space-x-4">
                    <a href="/"
                        class="inline-block align-bottom hover:scale-105 hover:bg-gray-300 hover:ease-in bg-white rounded-lg text-left overflow-hidden shadow-lg transform transition-all mb-4 w-full sm:w-1/3 sm:my-8 ">
                        <img class="rounded-t-lg" src="{{ asset('imagens/logoMagalu.png') }}" alt="" />
                        <div class="p-5">

                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Titulo da vaga de emprego
                                disponível</h5>

                            <p class="mb-3 font-normal text-gray-700 y">Here are the biggest enterprise technology
                                acquisitions of 2021 so far, in reverse chronological order.</p>

                        </div>
                    </a>

                    <a href="/"
                        class="inline-block align-bottom hover:scale-105 hover:bg-gray-300 hover:ease-in bg-white rounded-lg text-left overflow-hidden shadow-lg transform transition-all mb-4 w-full sm:w-1/3 sm:my-8 ">
                        <img class="rounded-t-lg" src="{{ asset('imagens/logoRenner.png') }}" alt="" />
                        <div class="p-5">

                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Titulo da vaga de emprego
                                disponível</h5>

                            <p class="mb-3 font-normal text-gray-700 y">Here are the biggest enterprise technology
                                acquisitions of 2021 so far, in reverse chronological order.</p>

                        </div>
                    </a>

                    <a href="/"
                        class="inline-block align-bottom hover:scale-105 hover:bg-gray-300 hover:ease-in bg-white rounded-lg text-left overflow-hidden shadow-lg transform transition-all mb-4 w-full sm:w-1/3 sm:my-8 ">
                        <img class="rounded-t-lg" src="{{ asset('imagens/logoIfood.png') }}" alt="" />
                        <div class="p-5">

                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Titulo da vaga de emprego
                                disponível</h5>

                            <p class="mb-3 font-normal text-gray-700 y">Here are the biggest enterprise technology
                                acquisitions of 2021 so far, in reverse chronological order.</p>

                        </div>
                    </a>

                    <a href="/"
                        class="inline-block align-bottom hover:scale-105 hover:bg-gray-300 hover:ease-in bg-white rounded-lg text-left overflow-hidden shadow-lg transform transition-all mb-4 w-full sm:w-1/3 sm:my-8 ">
                        <img class="rounded-t-lg" src="{{ asset('imagens/logoAzul.png') }}" alt="" />
                        <div class="p-5">

                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Titulo da vaga de emprego
                                disponível</h5>

                            <p class="mb-3 font-normal text-gray-700 y">Here are the biggest enterprise technology
                                acquisitions of 2021 so far, in reverse chronological order.</p>

                        </div>
                    </a>

                    <a href="/"
                        class="inline-block align-bottom hover:scale-105 hover:bg-gray-300 hover:ease-in bg-white rounded-lg text-left overflow-hidden shadow-lg transform transition-all mb-4 w-full sm:w-1/3 sm:my-8 ">
                        <img class="rounded-t-lg" src="{{ asset('imagens/logoCacauShow.png') }}" alt="" />
                        <div class="p-5">

                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Titulo da vaga de emprego
                                disponível</h5>

                            <p class="mb-3 font-normal text-gray-700 y">Here are the biggest enterprise technology
                                acquisitions of 2021 so far, in reverse chronological order.</p>

                        </div>
                    </a>
                </div>

                <a href="http://www.youtube.com" class=" ">
                    <p
                        class="mt-10 text-base text-center text-black hover:bg-gray-50 transition-all hover:scale-105 hover:ease-in md:mt-20 p-6 py-3 border w-72 border-black rounded-full mx-auto">
                        Veja todas as vagas!
                    </p>
                </a>
            </div>
        </div>
        @include('components.app.footer')
    </header>
</body>

</html>
