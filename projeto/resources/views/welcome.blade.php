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
	<nav
		class="fixed inset-x-0 top-0 z-10 w-full px-40 py-1 bg-indigo-800 shadow-md border-slate-500  transition duration-700 ease-out"
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
    <div class="inset-x-0 mt-20 w-full z-0 px-40 py-1 h-96 ">
        <div class="flex justify-between p-4">
			<div class="w-7/12">
				<p class="text-[2.5rem] mt-3 text-justify break-all leading-[3rem] tracking-tight text-indigo-800">
					Explore o site de vagas de emprego mais completo do Rio Grande do Norte!
				</p>
				<p class="text-[1.5rem] mt-8 text-justify break-words leading-[2rem] tracking-tight text-indigo-500">
					Faça sua pesquisa e veja as melhores opções de vagas do site de empregos que é o preferido dos recrutadores.				
				</p>

				<form class="mt-8 flex flex-nowrap gap-2">   
					<div class="relative f">
						<div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
							<svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
								<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
							</svg>
						</div>
						<input type="search" id="default-search" class="block w-80 p-4 ps-10 text-sm rounded-lg text-gray-900 dark:placeholder-gray-400 border border-blue-500" placeholder="Procure as vagas" required>
					</div>
					<div class="relative ">
						<div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
							<svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
								<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
							</svg>
						</div>
						<input type="search" id="default-search" class="block w-80 p-4 ps-10 text-sm rounded-lg text-gray-900 dark:placeholder-gray-400 border border-blue-500" placeholder="Local da vaga" required>
					</div>
				</form>

			</div>
			
			
			
		</div>
    </div>
     
</header> 
</body>
</html>