<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    <nav
		class="fixed inset-x-0 top-0 z-10 w-full px-8 sm:px-16 lg:px-40 py-1 bg-indigo-800 shadow-md border-slate-500 transition duration-700 ease-out">
		<div class="flex justify-between p-4">
			<div class="text-[2rem] leading-[3rem] tracking-tight font-bold text-black dark:text-white">
				<a href="">LOGO</a>
			</div>

			<div class="flex items-center space-x-4 text-lg font-semibold tracking-tight">
				<button class="px-6 py-2 text-white transition duration-700 ease-out bg-white border border-black rounded-lg hover:bg-black hover:border hover:text-white dark:border-white dark:bg-inherit dark:text-white dark:hover:bg-white dark:hover:text-indigo-800"
					>Entrar</button>
				<button class="px-6 py-2 text-indigo-800 transition duration-500 ease-out bg-slate-100 rounded-lg hover:bg-slate-200 hover:ease-in">Cadastre-se</button>
			</div>
		</div>
	</nav>
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
								<svg class="w-4 h-4 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
									<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
								</svg>
							</div>
							<input type="search" name="barPesquisarVagas" id="default-search" class=" w-80 sm:w-full lg:w-full p-4 ps-10 text-sm rounded-lg text-gray-900 dark:placeholder-gray-400 border border-blue-500" placeholder="Procure as vagas" required>
						</div>
						<div class="relative w-full">
							<div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
								<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-400">
									<path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
									<path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
								</svg>
							</div>
							<input type="search" name="barPesquisarLocal" id="default-search" class=" w-80 sm:w-full lg:w-full p-4 ps-10 text-sm rounded-lg text-gray-900 dark:placeholder-gray-400 border border-blue-500" placeholder="Local da vaga" required>
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

	
</body>
</html>