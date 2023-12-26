@extends('_layout.dashboard')

@section('title', 'dashboard')

@section('content')


    @include('components.app.asideEmpresa')

    <div class="p-4 xl:ml-80">

        <div class="mt-12">
            <div class="mb-12 grid gap-y-10 gap-x-6 md:grid-cols-2 xl:grid-cols-1">
                <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md">
                    <div
                        class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-blue-600 to-blue-400 text-white shadow-blue-500/40 shadow-lg absolute -mt-4 grid h-16 w-16 place-items-center">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M19.728 10.686c-2.38 2.256-6.153 3.381-9.875 3.381-3.722 0-7.4-1.126-9.571-3.371L0 10.437V18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-7.6l-.272.286Z" />
                            <path
                                d="m.135 7.847 1.542 1.417c3.6 3.712 12.747 3.7 16.635.01L19.605 7.9A.98.98 0 0 1 20 7.652V6a2 2 0 0 0-2-2h-3V3a3 3 0 0 0-3-3H8a3 3 0 0 0-3 3v1H2a2 2 0 0 0-2 2v1.765c.047.024.092.051.135.082ZM10 10.25a1.25 1.25 0 1 1 0-2.5 1.25 1.25 0 0 1 0 2.5ZM7 3a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1H7V3Z" />
                        </svg>
                    </div>
                    <div class="p-4 text-right">
                        <p class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">Vagas
                            Abertas</p>
                        <h4
                            class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">
                            {{ count($empresa->vagas) }}</h4>
                    </div>
                    <div class="border-t border-blue-gray-50 p-4">
                        <p class="block antialiased font-sans text-base leading-relaxed font-normal text-blue-gray-600">
                            <a href="{{ route('vaga.create') }}"><strong class="text-green-500">Abrir vaga</strong></a>
                        </p>
                    </div>
                </div>
            </div>

            @if (count($empresa->vagas) > 0)
                <div class="mb-4 grid grid-cols-1 gap-6 xl:grid-cols-2">
                    <div
                        class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md overflow-hidden xl:col-span-2">
                        <div
                            class="relative bg-clip-border rounded-xl overflow-hidden bg-transparent text-gray-700 shadow-none m-0 flex items-center justify-between p-6">
                            <div>
                                <h6
                                    class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-blue-gray-900 mb-1">
                                    Vagas da sua Empresa</h6>
                                <p
                                    class="antialiased font-sans text-sm leading-normal flex items-center gap-1 font-normal text-blue-gray-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="3" stroke="currentColor" aria-hidden="true"
                                        class="h-4 w-4 text-blue-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5">
                                        </path>
                                    </svg>
                                    <strong>Informações</strong> das vagas
                                </p>
                            </div>
                            <button aria-expanded="false" aria-haspopup="menu" id=":r5:"
                                class="relative middle none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-8 max-w-[32px] h-8 max-h-[32px] rounded-lg text-xs text-blue-gray-500 hover:bg-blue-gray-500/10 active:bg-blue-gray-500/30"
                                type="button">
                                <span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currenColor" viewBox="0 0 24 24"
                                        stroke-width="3" stroke="currentColor" aria-hidden="true" class="h-6 w-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z">
                                        </path>
                                    </svg>
                                </span>
                            </button>
                        </div>


                        <div class="p-6 overflow-x-scroll px-0 pt-0 pb-2">
                            <table class="w-full min-w-[640px] table-auto">
                                <thead>
                                    <tr>
                                        <th class="border-b border-blue-gray-50 py-3 px-6 text-left">
                                            <p
                                                class="block antialiased font-sans text-[11px] font-medium uppercase text-blue-gray-400">
                                                Titulo</p>
                                        </th>
                                        <th class="border-b border-blue-gray-50 py-3 px-6 text-left">
                                            <p
                                                class="block antialiased font-sans text-[11px] font-medium uppercase text-blue-gray-400">
                                                Área</p>
                                        </th>
                                        <th class="border-b border-blue-gray-50 py-3 px-6 text-left">
                                            <p
                                                class="block antialiased font-sans text-[11px] font-medium uppercase text-blue-gray-400">
                                                Candidaturas</p>
                                        </th>
                                        <th class="border-b border-blue-gray-50 py-3 px-6 text-left">
                                            <p
                                                class="block antialiased font-sans text-[11px] font-medium uppercase text-blue-gray-400">
                                                Ações</p>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($empresa->vagas as $vaga)
                                        <tr>
                                            <td class="py-3 px-5 border-b border-blue-gray-50">
                                                <div class="flex items-center gap-4">
                                                    <a href="{{ route('vaga.show', $vaga->id) }}"
                                                        class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-bold">{{ $vaga->titulo }}</a>
                                                </div>
                                            </td>

                                            <td class="py-3 px-5 border-b border-blue-gray-50">
                                                <p
                                                    class="block antialiased font-sans text-xs font-medium text-blue-gray-600">
                                                    {{ $vaga->area->nome }}</p>
                                            </td>
                                            <td class="py-3 px-5 border-b border-blue-gray-50">
                                                <div class="w-10/12">
                                                    <p
                                                        class="antialiased font-sans mb-1 block text-xs font-medium text-blue-gray-600">
                                                        {{ count($vaga->candidaturas) }}</p>
                                                    <div
                                                        class="flex flex-start bg-blue-gray-50 overflow-hidden w-full rounded-sm font-sans text-xs font-medium h-1">
                                                        <div class="flex justify-center items-center h-full bg-gradient-to-tr from-blue-600 to-blue-400 text-white"
                                                            style="width: 60%;"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="py-3 px-5 border-b border-blue-gray-50">
                                                <p
                                                    class="block antialiased font-sans text-xs font-medium text-blue-gray-600">
                                                    Show</p>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            @else
                <div class="grid  place-items-center">
                    <h1 class="">
                        Sua empresa ainda não abriu vagas!
                    </h1>
                </div>
            @endif
        </div>
    @endsection
