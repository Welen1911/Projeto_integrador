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

<header >
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
</header></br></br></br>

<div class="bg-white py-16 text-center">
        <div class="container mx-auto">
            <p class="text-2x1 text-white-800 align">Vaga Full Stack</p></br>
            <h1 class="text-5xl text-white-800">Desenvolvedor Full Stack</h1>
        </div></br>
    <button type="button" class="text-white bg-green-700 hover:bg-indigo-800 focus:outline-none focus:ring-4 focus:ring-indigo-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-white-800">C#</button>
    <button type="button" class="text-white bg-green-700 hover:bg-indigo-800 focus:outline-none focus:ring-4 focus:ring-indigo-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-white-800">Laravel</button>
    <button type="button" class="text-white bg-green-700 hover:bg-indigo-800 focus:outline-none focus:ring-4 focus:ring-indigo-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-white-800">TailwindCSS</button>
    <button type="button" class="text-white bg-green-700 hover:bg-indigo-800 focus:outline-none focus:ring-4 focus:ring-indigo-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-white-800">Angular</button>
    <button type="button" class="text-white bg-green-700 hover:bg-indigo-800 focus:outline-none focus:ring-4 focus:ring-indigo-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-white-800">PHP</button>
    </div>

    <h2 class="text-4xl text-white-800">EMPRESA</h1>
    <div class="bg-gray shadow-md rounded-md mx-auto p-8 mt-8" style="width: 795px; height: 193px;">
        <div class="text-gray-700">
        <p>Grande empresa</p>
            <p>Endereço: Rua ABC, 123</p>
            <p>Telefone: (123) 456-7890</p>
            <p>Email: contato@empresa.com</p>
        </div>
    </div>
 
</body>
</html>