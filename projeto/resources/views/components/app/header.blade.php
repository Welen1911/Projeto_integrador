<nav
		class="fixed inset-x-0 top-0 z-10 w-full px-8 sm:px-16 lg:px-40 py-1 bg-indigo-800 shadow-md border-slate-500 transition duration-700 ease-out"
	>
		<div class="flex justify-between p-4">
			<div class="text-[2rem] leading-[3rem] tracking-tight font-bold text-black dark:text-white">
				<a href="/">i-Trampo</a>
			</div>
			<div class="flex items-center space-x-4 text-lg font-semibold tracking-tight">
				@auth    
                <a class="px-6 py-2 text-indigo-800 transition duration-500 ease-out bg-slate-100 rounded-lg hover:bg-slate-200 hover:ease-in" href="{{ route('dashboard') }}">Dashboard</a>   
                @endauth
                @guest
                <a class="px-6 py-2 text-white transition duration-700 ease-out bg-white border border-black rounded-lg hover:bg-black hover:border hover:text-white dark:border-white dark:bg-inherit dark:text-white dark:hover:bg-white dark:hover:text-indigo-800" href="{{ route('login') }}">Entrar</a>
				<a class="px-6 py-2 text-indigo-800 transition duration-500 ease-out bg-slate-100 rounded-lg hover:bg-slate-200 hover:ease-in" href="{{ route('register') }}">Cadastre-se</a>
                @endguest
			</div>
		</div>
        
	</nav>