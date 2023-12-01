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
				<button class="px-6 py-2 text-white transition duration-700 ease-out bg-white border border-black rounded-lg hover:bg-black hover:border hover:text-white dark:border-white dark:bg-inherit dark:text-white dark:hover:bg-white dark:hover:text-indigo-800">Entrar</button>
				<button class="px-6 py-2 text-indigo-800 transition duration-500 ease-out bg-slate-100 rounded-lg hover:bg-slate-200 hover:ease-in">Cadastre-se</button>
			</div>
		</div>
        
	</nav>

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
					Faça sua pesquisa e veja as melhores opções de vagas do site de empregos que é o preferido doskdmrfpofor recrutadores.				
				</p>
			
				<!-- Barras de Pesquisa -->
				<form class="mt-4 flex flex-col flex-nowrap gap-5 xl:flex-row">   
					<div class="relative f">
						<div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
							<svg class="w-4 h-4 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
								<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
							</svg>
						</div>
						<input type="search" name="barPesquisarVagas" id="default-search" class=" w-80 sm:w-full lg:w-full p-4 ps-10 text-sm rounded-lg text-gray-900 dark:placeholder-gray-400 border border-blue-500" placeholder="Procure as vagas" required>
					</div>
					<div class="relative ">
						<div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
							<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-400">
								<path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
								<path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
							</svg>
						</div>
						<input type="search" name="barPesquisarLocal" id="default-search" class=" w-80 sm:w-full lg:w-full p-4 ps-10 text-sm rounded-lg text-gray-900 dark:placeholder-gray-400 border border-blue-500" placeholder="Local da vaga" required>
					</div>
					<button type="submit" class="block p-2 text-sm font-medium text-white bg-indigo-800 rounded-lg border border-indigo-800 hover:bg-indigo-900 focus:ring-4 focus:outline-none focus:ring-indigo-300 ">
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
				<a href="http://www.youtube.com" class="inline-block align-bottom hover:scale-105 hover:bg-gray-300 hover:ease-in bg-gray-200 rounded-lg text-left overflow-hidden shadow transform transition-all mb-4 w-full sm:w-1/3 sm:my-8 ">
					<div class="p-5">
						<div class="sm:flex sm:items-start">
							<div class="text-center sm:mt-0 sm:ml-2 sm:text-left">
								<h3 class="text-sm leading-6 font-medium text-indigo-800">22 Novas Vagas</h3>
								<p class="text-3xl font-bold text-black">Nova Cruz, RN</p>
							</div>
						</div>
					</div>
				</a>
				<a href="http://www.youtube.com" class="inline-block align-bottom hover:scale-105 hover:bg-gray-300 hover:ease-in bg-gray-200 rounded-lg text-left overflow-hidden shadow transform transition-all mb-4 w-full sm:w-1/3 sm:my-8">
					<div class="p-5">
						<div class="sm:flex sm:items-start">
							<div class="text-center sm:mt-0 sm:ml-2 sm:text-left">
								<h3 class="text-sm leading-6 font-medium text-indigo-800">22 Novas Vagas</h3>
								<p class="text-3xl font-bold text-black">Nova Cruz, RN</p>
							</div>
						</div>
					</div>
				</a>
				<a href="http://www.youtube.com" class="inline-block align-bottom hover:scale-105 hover:bg-gray-300 hover:ease-in bg-gray-200 rounded-lg text-left overflow-hidden shadow transform transition-all mb-4 w-full sm:w-1/3 sm:my-8">
					<div class="p-5">
						<div class="sm:flex sm:items-start">
							<div class="text-center sm:mt-0 sm:ml-2 sm:text-left">
								<h3 class="text-sm leading-6 font-medium text-indigo-800">22 Novas Vagas</h3>
								<p class="text-3xl font-bold text-black">Nova Cruz, RN</p>
							</div>
						</div>
					</div>
				</a>
				<a href="http://www.youtube.com" class="inline-block align-bottom hover:scale-105 hover:bg-gray-300 hover:ease-in bg-gray-200 rounded-lg text-left overflow-hidden shadow transform transition-all mb-4 w-full sm:w-1/3 sm:my-8">
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
						<div class="bg-white hover:bg-gray-50 transition-all hover:scale-110 hover:ease-in h-20 px-10 rounded-lg border border-gray-300 flex shadow-lg items-center justify-center">
							<img class="object-contain w-16 h-16 sm:w-auto lg:w-auto mx-auto" src="{{ asset('imagens/logoAmericanas.png') }}" alt="">
						</div>
					</a>

					<a href="http://www.youtube.com" class=" ">
						<div class="bg-white hover:bg-gray-50 transition-all hover:scale-110 hover:ease-in h-20 px-10 rounded-lg border border-gray-300 flex shadow-lg items-center justify-center">
							<img class="object-contain w-16 h-16 mx-auto" src="{{ asset('imagens/logoApple.png') }}" alt="">
						</div>
					</a>

					<a href="http://www.youtube.com" class=" ">
						<div class="bg-white hover:bg-gray-50 transition-all hover:scale-110 hover:ease-in h-20 px-10 rounded-lg border border-gray-300 flex shadow-lg items-center justify-center">
							<img class="object-contain w-16 h-16 mx-auto" src="{{ asset('imagens/logoAssai.png') }}" alt="">
						</div>
					</a>

					<a href="http://www.youtube.com" class=" ">
						<div class="bg-white hover:bg-gray-50 transition-all hover:scale-110 hover:ease-in h-20 px-10 rounded-lg border border-gray-300 flex shadow-lg items-center justify-center">
							<img class="object-contain w-16 h-16 mx-auto" src="{{ asset('imagens/logoAzul.png') }}" alt="">
						</div>
					</a>

					<a href="http://www.youtube.com" class=" ">
						<div class="bg-white hover:bg-gray-50 transition-all hover:scale-110 hover:ease-in h-20 px-10 rounded-lg border border-gray-300 flex shadow-lg items-center justify-center">
							<img class="object-contain w-16 h-16 mx-auto" src="{{ asset('imagens/logoBgrKing.png') }}" alt="">
						</div>
					</a>

					<a href="http://www.youtube.com" class=" ">
						<div class="bg-white hover:bg-gray-50 transition-all hover:scale-110 hover:ease-in h-20 px-10 rounded-lg border border-gray-300 flex shadow-lg items-center justify-center">
							<img class="object-contain w-16 h-16 mx-auto" src="{{ asset('imagens/logoCacauShow.png') }}" alt="">
						</div>
					</a>

					<a href="http://www.youtube.com" class=" ">
						<div class="bg-white hover:bg-gray-50 transition-all hover:scale-110 hover:ease-in h-20 px-10 rounded-lg border border-gray-300 flex shadow-lg items-center justify-center">
							<img class="object-contain w-16 h-16 mx-auto" src="{{ asset('imagens/logoCarrefour.png') }}" alt="">
						</div>
					</a>

					<a href="http://www.youtube.com" class=" ">
						<div class="bg-white hover:bg-gray-50 transition-all hover:scale-110 hover:ease-in h-20 px-10 rounded-lg border border-gray-300 flex shadow-lg items-center justify-center">
							<img class="object-contain w-16 h-16 mx-auto" src="{{ asset('imagens/logoCea.png') }}" alt="">
						</div>
					</a>

					<a href="http://www.youtube.com" class=" ">
						<div class="bg-white hover:bg-gray-50 transition-all hover:scale-110 hover:ease-in h-20 px-10 rounded-lg border border-gray-300 flex shadow-lg items-center justify-center">
							<img class="object-contain w-16 h-16 mx-auto" src="{{ asset('imagens/logoGol.png') }}" alt="">
						</div>
					</a>

					<a href="http://www.youtube.com" class=" ">
						<div class="bg-white hover:bg-gray-50 transition-all hover:scale-110 hover:ease-in h-20 px-10 rounded-lg border border-gray-300 flex shadow-lg items-center justify-center">
							<img class="object-contain w-16 h-16 mx-auto " src="{{ asset('imagens/logoIfood.png') }}" alt="">
						</div>
					</a>

					<a href="http://www.youtube.com" class=" ">
						<div class="bg-white hover:bg-gray-50 transition-all hover:scale-110 hover:ease-in h-20 px-10 rounded-lg border border-gray-300 flex shadow-lg items-center justify-center">
							<img class="object-contain w-16 h-16 mx-auto" src="{{ asset('imagens/logoNike.png') }}" alt="">
						</div>
					</a>

					<a href="http://www.youtube.com" class=" ">
						<div class="bg-white hover:bg-gray-50 transition-all hover:scale-110 hover:ease-in h-20 px-10 rounded-lg border border-gray-300 flex shadow-lg items-center justify-center">
							<img class="object-contain w-16 h-16 mx-auto" src="{{ asset('imagens/logoUber.png') }}" alt="">
						</div>
					</a>

					<a href="http://www.youtube.com" class=" ">
						<div class="bg-white hover:bg-gray-50 transition-all hover:scale-110 hover:ease-in h-20 px-10 rounded-lg border border-gray-300 flex shadow-lg items-center justify-center">
							<img class="object-contain w-16 h-16 mx-auto" src="{{ asset('imagens/logoRenner.png') }}" alt="">
						</div>
					</a>

					<a href="http://www.youtube.com" class=" ">
						<div class="bg-white hover:bg-gray-50 transition-all hover:scale-110 hover:ease-in h-20 px-10 rounded-lg border border-gray-300 flex shadow-lg items-center justify-center">
							<img class="object-contain w-16 h-16 mx-auto " src="{{ asset('imagens/logoMicrosoft.png') }}" alt="">
						</div>
					</a>

					<a href="http://www.youtube.com" class=" ">
						<div class="bg-white hover:bg-gray-50 transition-all hover:scale-110 hover:ease-in h-20 px-10 rounded-lg border border-gray-300 flex shadow-lg items-center justify-center">
							<img class="object-contain w-16 h-16 mx-auto" src="{{ asset('imagens/logoMagalu.png') }}" alt="">
						</div>
					</a>

					<a href="http://www.youtube.com" class=" ">
						<div class="bg-white  hover:bg-gray-50 transition-all hover:scale-110 hover:ease-in h-20 px-10 rounded-lg border border-gray-300 flex shadow-lg items-center justify-center">
							<img class="object-contain w-16 h-16 mx-auto" src="{{ asset('imagens/logoNetshoes.png') }}" alt="">
						</div>
					</a>
				</div>
				
				<a href="http://www.youtube.com" class=" ">
					<p class="mt-10 text-base text-center text-black hover:bg-gray-50 transition-all hover:scale-105 hover:ease-in md:mt-20 p-6 py-3 border w-72 border-black rounded-full mx-auto">
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
				<a href="/" class="inline-block align-bottom hover:scale-105 hover:bg-gray-300 hover:ease-in bg-white rounded-lg text-left overflow-hidden shadow-lg transform transition-all mb-4 w-full sm:w-1/3 sm:my-8 ">
					<img class="rounded-t-lg" src="{{ asset('imagens/logoMagalu.png') }}" alt="" />
					<div class="p-5">
						
						<h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Titulo da vaga de emprego disponível</h5>
						
						<p class="mb-3 font-normal text-gray-700 y">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
						
					</div>
				</a>
				
				<a href="/" class="inline-block align-bottom hover:scale-105 hover:bg-gray-300 hover:ease-in bg-white rounded-lg text-left overflow-hidden shadow-lg transform transition-all mb-4 w-full sm:w-1/3 sm:my-8 ">
					<img class="rounded-t-lg" src="{{ asset('imagens/logoRenner.png') }}" alt="" />
					<div class="p-5">
						
						<h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Titulo da vaga de emprego disponível</h5>
						
						<p class="mb-3 font-normal text-gray-700 y">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
						
					</div>
				</a>

				<a href="/" class="inline-block align-bottom hover:scale-105 hover:bg-gray-300 hover:ease-in bg-white rounded-lg text-left overflow-hidden shadow-lg transform transition-all mb-4 w-full sm:w-1/3 sm:my-8 ">
					<img class="rounded-t-lg" src="{{ asset('imagens/logoIfood.png') }}" alt="" />
					<div class="p-5">
						
						<h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Titulo da vaga de emprego disponível</h5>
						
						<p class="mb-3 font-normal text-gray-700 y">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
						
					</div>
				</a>

				<a href="/" class="inline-block align-bottom hover:scale-105 hover:bg-gray-300 hover:ease-in bg-white rounded-lg text-left overflow-hidden shadow-lg transform transition-all mb-4 w-full sm:w-1/3 sm:my-8 ">
					<img class="rounded-t-lg" src="{{ asset('imagens/logoAzul.png') }}" alt="" />
					<div class="p-5">
						
						<h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Titulo da vaga de emprego disponível</h5>
						
						<p class="mb-3 font-normal text-gray-700 y">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
						
					</div>
				</a>

				<a href="/" class="inline-block align-bottom hover:scale-105 hover:bg-gray-300 hover:ease-in bg-white rounded-lg text-left overflow-hidden shadow-lg transform transition-all mb-4 w-full sm:w-1/3 sm:my-8 ">
					<img class="rounded-t-lg" src="{{ asset('imagens/logoCacauShow.png') }}" alt="" />
					<div class="p-5">
						
						<h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Titulo da vaga de emprego disponível</h5>
						
						<p class="mb-3 font-normal text-gray-700 y">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
						
					</div>
				</a>
			</div>

			<a href="http://www.youtube.com" class=" ">
				<p class="mt-10 text-base text-center text-black hover:bg-gray-50 transition-all hover:scale-105 hover:ease-in md:mt-20 p-6 py-3 border w-72 border-black rounded-full mx-auto">
					Veja todas as vagas!
				</p>
			</a>

			<footer class="w-full text-gray-700 bg-gray-100 body-font">
	<div
		class="container flex flex-col flex-wrap px-5 py-24 mx-auto md:items-center lg:items-start md:flex-row md:flex-no-wrap">
		<div class="flex-shrink-0 w-64 mx-auto text-center md:mx-0 md:text-left">
			<a class="flex items-center justify-center font-medium text-gray-900 title-font md:justify-start">
				<svg class="w-auto h-5 text-gray-900 fill-current" viewBox="0 0 202 69"
					xmlns="http://www.w3.org/2000/svg">
					<path
						d="M57.44.672s6.656 1.872 6.656 5.72c0 0-1.56 2.6-3.744 6.552 8.424 1.248 16.744 1.248 23.816-1.976-1.352 7.904-12.688 8.008-26.208 6.136-7.696 13.624-19.656 36.192-19.656 42.848 0 .416.208.624.52.624 4.576 0 17.888-14.352 21.112-18.824 1.144-1.456 4.264.728 3.12 2.392C56.608 53.088 42.152 69 36.432 69c-4.472 0-8.216-5.928-8.216-10.4 0-6.552 11.752-28.08 20.28-42.952-9.984-1.664-20.176-3.64-27.976-3.848-13.936 0-16.64 3.536-17.576 6.032-.104.312-.52.52-.832.312-3.744-7.072-1.456-14.56 14.144-14.56 9.36 0 22.048 4.576 34.944 7.592C54.736 5.04 57.44.672 57.44.672zm46.124 41.08c1.144-1.456 4.264.728 3.016 2.392C100.236 53.088 85.78 69 80.06 69c-4.576 0-8.32-5.928-8.32-10.4v-.208C67.58 64.32 63.524 69 61.34 69c-4.472 0-8.944-4.992-8.944-11.856 0-10.608 15.704-33.072 24.96-33.072 4.992 0 7.384 2.392 8.528 4.576l2.6-4.576s6.656 1.976 6.656 5.824c0 0-13.312 24.336-13.312 30.056 0 .208 0 .624.52.624 4.472 0 17.888-14.352 21.216-18.824zm-40.56 18.72c2.184 0 11.752-13.312 17.368-22.048l4.16-7.488c-8.008-7.904-27.248 29.536-21.528 29.536zm57.564-38.168c-2.184 0-4.992-2.808-4.992-4.784 0-2.912 5.824-14.872 7.28-14.872 2.6 0 6.136 2.808 6.136 6.344 0 2.08-7.176 12.064-8.424 13.312zm-17.68 46.592c-4.472 0-8.216-5.928-8.216-10.4 0-6.656 16.744-34.528 16.744-34.528s6.552 1.976 6.552 5.824c0 0-13.312 24.336-13.312 30.056 0 .208.104.624.624.624 4.472 0 17.888-14.352 21.112-18.824 1.144-1.456 4.264.728 3.12 2.392-6.448 8.944-20.904 24.856-26.624 24.856zM147.244.672s6.656 1.872 6.656 5.72c0 0-25.792 43.784-25.792 53.56 0 .416.208.624.52.624 4.576 0 17.888-14.352 21.112-18.824 1.144-1.456 4.264.728 3.12 2.392C146.412 53.088 131.956 69 126.236 69c-4.472 0-8.216-5.928-8.216-10.4 0-10.4 29.224-57.928 29.224-57.928zM169.7 60.16c3.848-2.392 7.904-6.864 10.816-10.92 6.656-9.464 11.544-20.696 10.504-27.352-.312-3.432-.104-4.056 3.12-2.704 5.2 2.392 11.336 8.632 2.184 22.88-5.2 8.008-12.48 15.288-19.344 19.76-2.704 1.768-6.344 3.328-9.984 4.16-.52.416-1.04.728-1.456.936-1.872 1.352-4.264 2.08-7.592 2.08-14.664 0-16.848-12.272-16.848-16.016 0-2.392 3.224-4.68 4.784-3.744.208.104.312.416.312.624 0 2.808 1.872 13.104 9.984 13.104 7.904 0 3.432-18.304 2.288-27.144-1.456 2.288-3.432 4.992-5.616 8.32-2.6 3.744-5.72 1.456-4.784 0 5.824-8.424 9.152-13.832 11.856-18.616 1.248-2.08 3.328-3.328 6.448-3.328 2.704 0 5.824 3.016 6.864 4.784.312.52 0 1.04-.52 1.144a5.44 5.44 0 00-4.368 5.408c0 6.968 2.6 17.16 1.664 24.856l-.312 1.768z"
						fill-rule="nonzero" /></svg>
			</a>
			<p class="mt-2 text-sm text-gray-500">Welenzinho, Pedrinho e Lucas</p>
			<div class="mt-4">
				<span class="inline-flex justify-center mt-2 sm:ml-auto sm:mt-0 sm:justify-start">
					<a class="text-gray-500 cursor-pointer hover:text-gray-700">
						<svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
							class="w-5 h-5" viewBox="0 0 24 24">
							<path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
						</svg>
					</a>
					<a class="ml-3 text-gray-500 cursor-pointer hover:text-gray-700">
						<svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
							class="w-5 h-5" viewBox="0 0 24 24">
							<path
								d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
							</path>
						</svg>
					</a>
					<a class="ml-3 text-gray-500 cursor-pointer hover:text-gray-700">
						<svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
							stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
							<rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
							<path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
						</svg>
					</a>
					<a class="ml-3 text-gray-500 cursor-pointer hover:text-gray-700">
						<svg fill="currentColor" stroke="currentColor" stroke-linecap="round"
							stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
							<path stroke="none"
								d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
							</path>
							<circle cx="4" cy="4" r="2" stroke="none"></circle>
						</svg>
					</a>
				</span>
			</div>
		</div>
		<div class="flex flex-wrap flex-grow mt-10 -mb-10 text-center md:pl-20 md:mt-0 md:text-left">
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
	<div class="bg-gray-300">
		<div class="container px-5 py-4 mx-auto">
			<p class="text-sm text-gray-700 capitalize xl:text-center">© 2023 PEDRO GOSTOSO</p>
		</div>
	</div>
</footer>
</div>
		</div>
    </div>
    </div>
</header> 
</body>
</html>