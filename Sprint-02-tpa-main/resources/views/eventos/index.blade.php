<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Eventos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <div class="flex justify-between mb-4">
                    <h3 class="text-lg font-medium">Lista de Eventos</h3>
                    <a href="{{ route('eventos.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Novo Evento</a>
                </div>
                <ul>
                    @foreach($eventos as $evento)
                        <li class="border-b py-2 flex justify-between items-center">
                            <div>
                                <a href="{{ route('eventos.show', $evento) }}" class="text-blue-600 font-bold">{{ $evento->titulo }}</a>
                                <p class="text-sm text-gray-600">{{ $evento->local }} - {{ $evento->data_evento }}</p>
                            </div>
                            <span class="text-gray-500 text-sm">{{ $evento->perguntas_count }} perguntas</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>
