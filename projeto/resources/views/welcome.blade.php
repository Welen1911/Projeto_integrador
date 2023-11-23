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
	<nav
		class="fixed inset-x-0 top-0 z-10 w-full px-8 sm:px-16 lg:px-40 py-1 bg-indigo-800 shadow-md border-slate-500 transition duration-700 ease-out"
	>
		<div class="flex justify-between p-4">
			<div class="text-[2rem] leading-[3rem] tracking-tight font-bold text-black dark:text-white">
				<a href="">LOGO</a>
			</div>

			<div class="flex items-center space-x-4 text-lg font-semibold tracking-tight">
				<button
					class="px-6 py-2 text-white transition duration-700 ease-out bg-white border border-black rounded-lg hover:bg-black hover:border hover:text-white dark:border-white dark:bg-inherit dark:text-white dark:hover:bg-white dark:hover:text-indigo-800"
					>Entrar</button
				>
				<button
					class="px-6 py-2 text-indigo-800 transition duration-500 ease-out bg-slate-100 rounded-lg hover:bg-slate-200 hover:ease-in"
					>Cadastre-se</button
				>
			</div>
		</div>
        
	</nav>

	<!-- Banner Inicial -->
    <div class="inset-x-0 mt-20 w-full z-0 px-40 py-1 h-96 bg-gray-50 sm:px-16 sm:h-4/5 lg:px-40">
		<!-- Informação do lado Esquedo do Banner_-->
        <div class="flex flex-col justify-between p-3 mt-4 lg:flex-row lg:content-center">
			<div class="grid  content-center bg-blue-800">
				<!-- Titulo e subtitulo -->
				<h2 class="text-4xl font-extrabold text-indigo-800">
					Explore o site de vagas de emprego mais completo do Rio Grande do Norte!
				</h2>
				<p class="my-4 text-lg text-indigo-600">
					Faça sua pesquisa e veja as melhores opções de vagas do site de empregos que é o preferido doskdmrfpofor recrutadores.				
				</p>
			
				<!-- Barras de Pesquisa -->
				<form class="mt-4 flex flex-col flex-nowrap gap-5 xl:flex-row">   
					<div class="relative f">
						<div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
							<svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
								<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
							</svg>
						</div>
						<input type="search" name="barPesquisarVagas" id="default-search" class="block w-80 p-4 ps-10 text-sm rounded-lg text-gray-900 dark:placeholder-gray-400 border border-blue-500" placeholder="Procure as vagas" required>
					</div>
					<div class="relative ">
						<div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
							<svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
								<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
							</svg>
						</div>
						<input type="search" name="barPesquisarLocal" id="default-search" class="block w-80 p-4 ps-10 text-sm rounded-lg text-gray-900 dark:placeholder-gray-400 border border-blue-500" placeholder="Local da vaga" required>
					</div>
					<button type="submit" class="block p-2.5  text-sm font-medium text-white bg-indigo-800 rounded-lg border border-indigo-800 hover:bg-indigo-900 focus:ring-4 focus:outline-none focus:ring-indigo-300 dark:bg-indigo-700 dark:hover:bg-indigo-800 dark:focus:ring-indigo-900">
						Buscar vagas
					</button>
				</form>
			</div>
			
		
			<div class="ml-32 grid  content-center bg-blue-800">
		
				<img class="" src="{{ asset('imagens/ImgBanner.png') }}" alt="ImgBanner">

			</div>
		
		</div>
    </div>
     
</header> 
</body>
</html>