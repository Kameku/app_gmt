<x-layouts.app>
    <x-slot name='title'>Consultas y Cumplidos </x-slot>

    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Consultas y Cumplidos') }}
        </h2>
    </x-slot>

    <div class=" flex pt-6">
        @livewire('import-compliments')
    </div>
    @livewire('show-compliments')
    
</x-layouts.app>
