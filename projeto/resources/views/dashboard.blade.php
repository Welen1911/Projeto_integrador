<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{-- @dd([auth()->user()->candidato, auth()->user()->endereco, auth()->user()->candidato->area]) --}}
                    {{-- <ol>
                        <li>Nome: {{ auth()->user()->name }}</li>
                        <li>Idade: {{ auth()->user()->candidato->idade }}</li>
                        <li>Área: {{ auth()->user()->candidato->area->nome }}</li>
                        <li>Endereço: {{ auth()->user()->endereco->cidade }}</li>
                    </ol> --}}

                   {{-- @foreach (auth()->user()->empresa->vagas as $vaga)
                       <p>{{$vaga->titulo}}</p>
                       <p>Area: {{$vaga->area->nome}}</p>
                   @endforeach --}}

                   {{-- @foreach (auth()->user()->candidato->candidaturas as $candidatura)
                        <p>{{ $candidatura->vaga }}</p>
                   @endforeach --}}

                   {{-- @foreach (auth()->user()->empresa->vagas as $vaga)
                     @foreach ($vaga->candidaturas as $candidatura)
                         <p>{{ $candidatura->candidato->area }}</p>
                     @endforeach
                   @endforeach --}}

                   {{-- <p>{{ auth()->user()->endereco->cidade }}</p>
                   <p>{{ auth()->user()->telefone->celular }}</p> --}}
                </div>
            </div>
        </div>
</x-app-layout>
