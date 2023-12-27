@extends('_layout.dashboard')

@section('title', 'dashboard')

@section('content')

    @can('isCandidato')
        @include('components.app.asideCandidato')
    @endcan
    @can('isEmpresa')
        @include('components.app.asideEmpresa')
    @endcan

    <div class="p-4 xl:ml-80">
        <div class="mt-12">
            <div class="mb-12 grid gap-y-10 gap-x-6 md:grid-cols-2 xl:grid-cols-1">
                <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md">
                    @if (strpos($empresa->user->profile_photo_path, 'perfis/') === false)
                        <img class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-blue-600 to-blue-400 text-white shadow-blue-500/40 shadow-lg absolute -mt-4 grid h-16 w-16 place-items-center"
                            src="{{ $empresa->user->profile_photo_path }}" alt="">
                    @else
                        <img class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-blue-600 to-blue-400 text-white shadow-blue-500/40 shadow-lg absolute -mt-4 grid h-16 w-16 place-items-center"
                            src="{{ url('storage/' . $empresa->user->profile_photo_path) }}" alt="">
                    @endif

                    <div class="p-4 text-right">
                        <p
                            class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">
                            {{ $empresa->user->name }}</p>
                    </div>
                    <div class="p-4 text-left">

                        <h4 class="block antialiased tracking-normal font-sans text-2xl leading-snug text-blue-gray-900">
                            Email: {{ $empresa->user->email }}</h4>
                        <h4 class="block antialiased tracking-normal font-sans text-2xl leading-snug text-blue-gray-900">
                            <ul>
                                @foreach ($empresa->user->telefones as $telefone)
                                    <li>Celular: {{ $telefone->celular }}</li>
                                    <li>Fixo: {{ $telefone->fixo }}</li>
                                @endforeach
                            </ul>
                        </h4>
                        <h4 class="block antialiased tracking-normal font-sans text-2xl leading-snug text-blue-gray-900">
                            Endereço: {{ $empresa->user->endereco->rua }}, {{ $empresa->user->endereco->numero }},
                            {{ $empresa->user->endereco->cidade->nome }} -
                            {{ $empresa->user->endereco->cidade->estado->nome }}</h4>
                    </div>
                    @if (auth()->user()->empresa && $empresa->id == auth()->user()->empresa->id)
                        <div class="border-t border-blue-gray-50 p-4">
                            <a href="{{ route('user.edit', auth()->user()->id) }}"
                                class="block antialiased font-sans text-base leading-relaxed font-normal text-blue-gray-600">
                                <strong class="text-green-500">Editar Perfil</strong>&nbsp;
                            </a>
                        </div>
                    @endif

                </div>
            </div>
            <div class="mb-12 grid gap-y-10 gap-x-6 md:grid-cols-2 xl:grid-cols-1">
                <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md">
                    <div class="p-4 text-left">

                        <h4 class="block antialiased tracking-normal font-sans text-2xl leading-snug text-blue-gray-900">
                            Descrição: {{ $empresa->descricao }}</h4>
                        <h4 class="block antialiased tracking-normal font-sans text-2xl leading-snug text-blue-gray-900">
                            CNPJ: {{ $empresa->cnpj }}</h4>


                    </div>
                    @if (auth()->user()->empresa && $empresa->id == auth()->user()->empresa->id)
                        <div class="border-t border-blue-gray-50 p-4">
                            <a href="{{ route('empresa.edit', $empresa->id) }}"
                                class="block antialiased font-sans text-base leading-relaxed font-normal text-blue-gray-600">
                                <strong class="text-green-500">Editar Perfil</strong>&nbsp;
                            </a>
                        </div>
                    @endif
                </div>
            </div>
            @if (!auth()->user()->empresa || $empresa->id != auth()->user()->empresa->id)
                <div class="mb-12 grid gap-y-10 gap-x-4 md:grid-cols-2 xl:grid-cols-3">
                    @foreach ($vagas as $vaga)
                        <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md">
                            <div class="p-4 text-left">

                                <h4
                                    class="block antialiased tracking-normal font-sans text-2xl leading-snug text-blue-gray-900">
                                    Vaga: {{ $vaga->titulo }}</h4>
                                <h4
                                    class="block antialiased tracking-normal font-sans text-2xl leading-snug text-blue-gray-900">
                                    Area: {{ $vaga->area->nome }}</h4>


                            </div>

                            <div class="border-t border-blue-gray-50 p-4">
                                <a href="{{ route('vaga.show', $vaga->id) }}"
                                    class="block antialiased font-sans text-base leading-relaxed font-normal text-blue-gray-600">
                                    <strong class="text-green-500">Ver mais</strong>&nbsp;
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{ $vagas->links() }}
            @endif

        </div>
    @endsection
