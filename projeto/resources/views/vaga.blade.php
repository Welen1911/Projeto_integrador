<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagtina @yield('titulo')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>


	<!-- Navigation Bar -->
<nav class="fixed inset-x-0 top-0 z-10 w-full px-8 sm:px-16 lg:px-40 py-1 bg-indigo-800 shadow-md border-slate-500 transition duration-700 ease-out">
    <div class="flex justify-between p-4">
        <div class="text-[2rem] leading-[3rem] tracking-tight font-bold text-black dark:text-white">
            <a href="">LOGO</a>
        </div>
        <div class="flex items-center space-x-4 text-lg font-semibold tracking-tight">
            <button
                class="px-6 py-2 text-white transition duration-700 ease-out bg-white border border-black rounded-lg hover:bg-black hover:border hover:text-white dark:border-white dark:bg-inherit dark:text-white dark:hover:bg-white dark:hover:text-indigo-800"
                >Entrar</button>
            <button
                class="px-6 py-2 text-indigo-800 transition duration-500 ease-out bg-slate-100 rounded-lg hover:bg-slate-200 hover:ease-in"
                >Cadastre-se</button>
        </div>
    </div>
</nav>


<div class="inset-x-0 mt-20 w-full lg:h-4/5 z-0 px-8 py-1 h-auto bg-gray-100 sm:px-16 sm:h-4/5 lg:px-40">
    <div class="flex inset-x-0 flex-col justify-center p-3 pt-20 pb-20 xl:flex-row lg:content-center w-full">
        <div class="grid place-items-center w-full">
            <p class="text-2x1 text-white-800 align">Tipo de vaga</p>
            <h1 class="text-5xl text-white-800">Titulo da Vada</h1>

            <div class="mt-4 justify-center flex w-full flex-col flex-wrap gap-3 xl:flex-row">
                <a href="/" class="text-white hover:bg-white hover:text-indigo-800 focus:outline-none focus:ring-4 focus:ring-indigo-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 bg-indigo-600 focus:ring-white-800">C#</a>
                <a href="/" class="text-white hover:bg-white hover:text-indigo-800 focus:outline-none focus:ring-4 focus:ring-indigo-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 bg-indigo-600 focus:ring-white-800">Laravel</a>
                <a href="/" class="text-white hover:bg-white hover:text-indigo-800 focus:outline-none focus:ring-4 focus:ring-indigo-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 bg-indigo-600 focus:ring-white-800">TailwindCSS</a>
                <a href="/" class="text-white hover:bg-white hover:text-indigo-800 focus:outline-none focus:ring-4 focus:ring-indigo-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 bg-indigo-600 focus:ring-white-800">Angular</a>
                <a href="/" class="text-white hover:bg-white hover:text-indigo-800 focus:outline-none focus:ring-4 focus:ring-indigo-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 bg-indigo-600 focus:ring-white-800">PHP</a>
            </div>    
        </div>
    </div>
</div>


<div class="inset-x-0 w-full lg:h-4/5 z-0 px-8 py-1 h-auto sm:px-16 sm:h-4/5 lg:px-40">
    <div class="flex inset-x-0 flex-col justify-between p-3 mt-4 xl:flex-row lg:content-center">
        <div class="grid content-center">
            <h1 class="text-4xl text-indigo-800">Americanas</h1>
        </div>
    </div>
    
    <div class="flex inset-x-0 justify-between p-3 mt-4 xl:flex-row lg:content-center w-full">
        <div class=" flex border flex-row rounded-md w-full border-gray-400">
            <div class="rounded-l-md w-full">
                <img class="w-full  rounded-l-sm" src="{{ asset('imagens/logoAmericanas.png') }}" alt="">
            </div>
            <div class="flex flex-wrap  flex-grow mt-10  text-center md:pl-20  md:text-left">
                <div class="w-full px-4 lg:w-1/4 md:w-1/2">
                    <h2 class="mb-3 text-sm font-medium tracking-widest text-gray-900 uppercase title-font">Institucional</h2>
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
                        <li class="mt-3">
                            <a class="text-gray-500 cursor-pointer hover:text-gray-900">Trabalhe Conosco</a>
                        </li>
                    </nav>
                </div>
                <div class="w-full px-4 lg:w-1/4 md:w-1/2">
                    <h2 class="mb-3 text-sm font-medium tracking-widest text-gray-900 uppercase title-font">Candidatos</h2>
                    <nav class="mb-10 list-none">
                        <li class="mt-3">
                            <a class="text-gray-500 cursor-pointer hover:text-gray-900">Ajuda</a>
                        </li>
                        <li class="mt-3">
                            <a class="text-gray-500 cursor-pointer hover:text-gray-900">Blog</a>
                        </li>
                        <li class="mt-3">
                            <a class="text-gray-500 cursor-pointer hover:text-gray-900">Aviso Legal</a>
                        </li>
                        <li class="mt-3">
                            <a class="text-gray-500 cursor-pointer hover:text-gray-900">Guia de Cargos</a>
                        </li>
                        <li class="mt-3">
                            <a class="text-gray-500 cursor-pointer hover:text-gray-900">Busca de Emprego Segura</a>
                        </li>
                    </nav>
                </div>
                <div class="w-full px-4 lg:w-1/4 md:w-1/2">
                    <h2 class="mb-3 text-sm font-medium tracking-widest text-gray-900 uppercase title-font">Empresa
                    </h2>
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
                        <li class="mt-3">
                            <a class="text-gray-500 cursor-pointer hover:text-gray-900">Produtos Para Empresa</a>
                        </li>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>


    <div class="inset-x-0 w-full lg:h-4/5 z-0 px-8 py-1 h-auto sm:px-16 sm:h-4/5 lg:px-40">
        <div class="flex inset-x-0 flex-col justify-between p-3 mt-4 xl:flex-row lg:content-center">
            <div class="grid content-center">
                <h1 class="text-4xl text-indigo-800 flex-auto">Sobre a vaga</h1>
                <p class="mt-3 text-justify ml-7">Para atendermos nossos clientes de forma ágil, assertiva e humana e continuar contribuindo para o crescimento da cooperativa, desejamos candidatos que se identifiquem com nossos valores e queiram parte do desse propósito.
                    Nossa visão é nos tornarmos referência nacional em gestão de saúde, com inovação, sustentabilidade e liderança de mercado.
                    E para isso, precisamos de pessoas que nos apoiem, levando essa visão adiante em suas atividades.
                    Já pensou em fazer arte de uma equipe centrada no cuidado, que busca ser a diferença na vida das pessoas?
                    E melhor ainda, estar dentro do maior sistema de cooperativas de saúde do mundo?</p>
            </div>
        </div>
    </div>

    <div class="inset-x-0 w-full lg:h-4/5 z-0 px-8 py-1 h-auto sm:px-16 sm:h-4/5 lg:px-40">
        <div class="flex inset-x-0 flex-col justify-between p-3 mt-4 xl:flex-row lg:content-center">
            <div class="grid content-center">
                <h1 class="text-3xl text-indigo-800 flex-auto">Responsabilidades e atribuições:</h1>
                    <ul class="list-disc pl-4 mt-3 ml-7">
                    <li class="mb-2">Apoiar no desenvolvimento de sistemas e aplicações low code e nos ajustes em banco de dados;</li>
                    <li class="mb-2">Realizar manutenção de sistemas e aplicações utilizando metodologias ágeis;</li>
                    <li class="mb-2">Manter registros atualizados na aplicação de chamados, tarefas e ações realizadas.</li>
                    </ul>
            </div>
        </div>
    </div>

    <div class="inset-x-0 w-full lg:h-4/5 z-0 px-8 py-1 h-auto sm:px-16 sm:h-4/5 lg:px-40">
        <div class="flex inset-x-0 flex-col justify-between p-3 mt-4 xl:flex-row lg:content-center">
            <div class="grid content-center">
                <h1 class="text-3xl text-indigo-800 flex-auto">Requisitos e qualificações</h1>
                    <ul class="list-disc pl-4 mt-3 ml-7">
                    <li class="mb-2">Curso técnico em informática concluído ou cursando superior nas áreas de Análise e Desenvolvimento de Sistemas,
                         Ciência da Computação, Gestão da Tecnologia da Informação ou Sistemas de Informação;</li>
                    <li class="mb-2">Desejável conhecimento em desenvolvimento low code e/ou aplicação Mendix.</li>
                    </ul>
            </div>
        </div>
    </div>

</body>
</html>