@extends('_layout.dashboard')

@section('title', 'dashboard')

@section('content')

    @include('layouts.messages')
    @include('components.app.asideCandidato')

    <div class="p-4 xl:ml-64">
        @if (count($candidato->candidaturas) > 0)

            <div class="mb-4 grid grid-cols-1 gap-6 xl:grid-cols-2">
                <div
                    class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md overflow-hidden xl:col-span-2">
                    <div
                        class="relative bg-clip-border rounded-xl overflow-hidden bg-transparent text-gray-700 shadow-none m-0 flex items-center justify-between p-6">
                        <div>
                            <h6
                                class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-blue-gray-900 mb-1">
                                Candidaturas</h6>
                            <p
                                class="antialiased font-sans text-sm leading-normal flex items-center gap-1 font-normal text-blue-gray-600">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                                    stroke="currentColor" aria-hidden="true" class="h-4 w-4 text-blue-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
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
                                            Vaga</p>
                                    </th>
                                    <th class="border-b border-blue-gray-50 py-3 px-6 text-left">
                                        <p
                                            class="block antialiased font-sans text-[11px] font-medium uppercase text-blue-gray-400">
                                            Área</p>
                                    </th>
                                    <th class="border-b border-blue-gray-50 py-3 px-6 text-left">
                                        <p
                                            class="block antialiased font-sans text-[11px] font-medium uppercase text-blue-gray-400">
                                            Empresa</p>
                                    </th>
                                    <th class="border-b border-blue-gray-50 py-3 px-6 text-left">
                                        <p
                                            class="block antialiased font-sans text-[11px] font-medium uppercase text-blue-gray-400">
                                            Ações</p>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($candidaturas && count($candidaturas) > 0)
                                    @foreach ($candidaturas as $candidatura)
                                        <tr>
                                            <td class="py-3 px-5 border-b border-blue-gray-50">
                                                <div class="flex items-center gap-4">
                                                    <a href="{{ route('vaga.show', $candidatura->vaga->id) }}"
                                                        class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-bold">{{ $candidatura->vaga->titulo }}</a>
                                                </div>
                                            </td>

                                            <td class="py-3 px-5 border-b border-blue-gray-50">
                                                <p
                                                    class="block antialiased font-sans text-xs font-medium text-blue-gray-600">
                                                    {{ $candidatura->vaga->area->nome }}
                                                </p>
                                            </td>
                                            <td class="py-3 px-5 border-b border-blue-gray-50">
                                                <div class="w-10/12">
                                                    <p
                                                        class="antialiased font-sans mb-1 block text-xs font-medium text-blue-gray-600">
                                                        {{ $candidatura->vaga->empresa->user->name }}
                                                    </p>
                                                    <div
                                                        class="flex flex-start bg-blue-gray-50 overflow-hidden w-full rounded-sm font-sans text-xs font-medium h-1">
                                                        <div class="flex justify-center items-center h-full bg-gradient-to-tr from-blue-600 to-blue-400 text-white"
                                                            style="width: 60%;"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="py-3 px-5 border-b border-blue-gray-50">
                                                <form action="{{ route('candidatura.destroy', $candidatura->id) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button
                                                        class="block antialiased font-sans text-xs font-medium text-blue-gray-600">Cancelar
                                                        Candidatura</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                        
                                @endif


                            </tbody>
                        </table>
                    </div>
                </div>
                {{ $candidaturas->links() }}
            </div>
    </div>
@else
    <div class="grid h-screen place-items-center">
        <h1 class="">
            Você ainda não se candidatou!
        </h1>
    </div>
    @endif

@endsection
