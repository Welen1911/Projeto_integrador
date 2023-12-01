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

    <!--
    <div class="inset-x-0 w-full lg:h-4/5 z-0 px-8 py-1 h-auto sm:px-16 sm:h-4/5 lg:px-40">
        <div class="flex inset-x-0 flex-col justify-between p-3 mt-4 xl:flex-row lg:content-center">
            <div class="grid content-center">
                <h1 class="text-4xl text-indigo-800">Titulo da Vaga</h1>
            </div>
        </div>
        
        <div class="flex inset-x-0 flex-col justify-between p-3 mt-4 xl:flex-row lg:content-center w-full border rounded-md">
        </div>
        
    </div>-->

    

</body>
</html>