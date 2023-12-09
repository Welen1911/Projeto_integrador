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
                    <a href="{{ route('vaga.create') }}">Criar vaga</a>
                </div>
            </div>
        </div>
        @isset($empresa)
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        @if (count($empresa->vagas) > 0)
                            @foreach ($empresa->vagas as $vaga)
                                <p>{{ $vaga->titulo }}</p>
                            @endforeach
                        @else
                            <p>Sua empresa ainda não disponibilizou vagas!</p>
                        @endif
                    </div>
                </div>
            </div>
        @endisset
    </div>

</x-app-layout>
