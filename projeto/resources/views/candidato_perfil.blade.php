@extends('_layout.dashboard')

@section('title', 'dashboard')

{{-- @dd(strpos($candidato->user->profile_photo_path, 'perfis')) --}}
{{-- @dd(url('storage/'.$candidato->user->profile_photo_path)) --}}
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
                    @if (strpos($candidato->user->profile_photo_path, 'perfis/') === false)
                        <img class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-blue-600 to-blue-400 text-white shadow-blue-500/40 shadow-lg absolute -mt-4 grid h-16 w-16 place-items-center"
                            src="{{ $candidato->user->profile_photo_path }}" alt="">
                    @else
                        <img class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-blue-600 to-blue-400 text-white shadow-blue-500/40 shadow-lg absolute -mt-4 grid h-16 w-16 place-items-center"
                            src="{{ url('storage/' . $candidato->user->profile_photo_path) }}" alt="">
                    @endif

                    <div class="p-4 text-right">
                        <p
                            class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">
                            {{ $candidato->user->name }}</p>
                    </div>
                    <div class="p-4 text-left">

                        <h4 class="block antialiased tracking-normal font-sans text-2xl leading-snug text-blue-gray-900">
                            Email: {{ $candidato->user->email }}</h4>
                        <h4 class="block antialiased tracking-normal font-sans text-2xl leading-snug text-blue-gray-900">
                            <ul>
                                @foreach ($candidato->user->telefones as $telefone)
                                    <li>Celular: {{ $telefone->celular }}</li>
                                    <li>Fixo: {{ $telefone->fixo }}</li>
                                @endforeach
                            </ul>
                        </h4>
                        <h4 class="block antialiased tracking-normal font-sans text-2xl leading-snug text-blue-gray-900">
                            Endereço: {{ $candidato->user->endereco->rua }}, {{ $candidato->user->endereco->numero }},
                            {{ $candidato->user->endereco->cidade->nome }} -
                            {{ $candidato->user->endereco->cidade->estado->nome }}</h4>
                    </div>
                    @if (auth()->user()->candidato && $candidato->id == auth()->user()->candidato->id)
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
                        <div class="border-b border-blue-gray-50 p-4">
                            <a href="{{ url('storage/' . $candidato->curriculo) }}"
                                class="block antialiased font-sans text-base leading-relaxed font-normal text-right text-blue-gray-600">
                                <strong class="text-green-500">Ver curriculo</strong>&nbsp;
                            </a>
                        </div>
                    @endif
                    <div class="p-4 text-left">

                        <h4 class="block antialiased tracking-normal font-sans text-2xl leading-snug text-blue-gray-900">
                            Descrição: {{ $candidato->sobre }}</h4>
                        @if (count($candidato->formacaos) > 0)
                            <h4
                                class="block antialiased tracking-normal font-sans text-2xl leading-snug text-blue-gray-900">
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
                                class="block antialiased tracking-normal font-sans text-2xl leading-snug text-blue-gray-900">
                                Experiência:
                                @foreach ($candidato->experiencias as $experiencia)
                                    <p>Empresa: {{ $experiencia->empresa }}</p>
                                    <p>Descricao: {{ $experiencia->descricao }}</p>
                                    <p>Trabalhando: {{ $experiencia->trabalhando }}</p>
                                @endforeach
                            </h4>
                        @endif
                    </div>
                    @if (auth()->user()->candidato && $candidato->id == auth()->user()->candidato->id)
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
