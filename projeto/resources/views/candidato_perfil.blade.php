@extends('_layout.dashboard')

@section('title', 'dashboard')

@section('content')

    @include('components.app.asideCandidato')

    <div class="p-4 xl:ml-64">

        <div class="mt-12">
            <div class="mb-12 grid gap-y-10 gap-x-6 md:grid-cols-2 xl:grid-cols-1">
                <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md">

                    <img class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-blue-600 to-blue-400 text-white shadow-blue-500/40 shadow-lg absolute -mt-4 grid h-16 w-16 place-items-center"
                        src="{{ $candidato->user->profile_photo_path }}" alt="">
                    <div class="p-4 text-right">
                        <p class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">
                            {{ $candidato->user->name }}</p>
                    </div>
                    <div class="p-4 text-left">

                        <h4
                            class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">
                            Email: {{ $candidato->user->email }}</h4>
                        <h4
                            class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">
                            <ul>
                                @foreach ($candidato->user->telefones as $telefone)
                                    <li>Celular: {{ $telefone->celular }}</li>
                                    <li>Fixo: {{ $telefone->fixo }}</li>
                                @endforeach
                            </ul>
                        </h4>
                        <h4
                            class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">
                            Endereço: {{ $candidato->user->endereco->rua }}, {{ $candidato->user->endereco->numero }},
                            {{ $candidato->user->endereco->cidade->nome }} -
                            {{ $candidato->user->endereco->cidade->estado->nome }}</h4>
                    </div>
                    @if ($candidato->id == auth()->user()->candidato->id)
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
                    @if ($candidato->curriculo)
                        <div class="p-4 text-right">
                            <a href="{{ url('storage/' . $candidato->curriculo) }}"
                                class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">
                                Baixar CV</a>
                        </div>
                    @endif
                    <div class="p-4 text-left">

                        <h4
                            class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">
                            Descrição: {{ $candidato->sobre }}</h4>
                        @if (count($candidato->formacaos) > 0)
                            <h4
                                class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">
                                Formação:
                                @foreach ($candidato->formacaos as $formacao)
                                    <p>Curso: {{ $formacao->curso }}</p>
                                    <p>Instituto: {{ $formacao->instituto }}</p>
                                    <p>Cursando: {{ $formacao->cursando }}</p>
                                    <p>Tipo: {{ $formacao->tipo }}</p>
                                @endforeach
                            </h4>
                        @endif
                        @if (count($candidato->experiencias) > 0)
                            <h4
                                class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">
                                Experiência:
                                @foreach ($candidato->experiencias as $experiencia)
                                    <p>Empresa: {{ $experiencia->empresa }}</p>
                                    <p>Descricao: {{ $experiencia->descricao }}</p>
                                    <p>Trabalhando: {{ $experiencia->trabalhando }}</p>
                                @endforeach
                            </h4>
                        @endif
                    </div>
                    @if ($candidato->id == auth()->user()->candidato->id)
                    <div class="border-t border-blue-gray-50 p-4">
                        <a href="{{ route('candidato.edit', $candidato->id) }}"
                            class="block antialiased font-sans text-base leading-relaxed font-normal text-blue-gray-600">
                            <strong class="text-green-500">Editar Perfil</strong>&nbsp;
                        </a>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    @endsection
