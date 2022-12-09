<x-layouts.app>
    <x-slot name='title'>{{ __('Dashboard')  }}</x-slot>

    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    {{-- <x-jet-welcome /> --}}

    <div class=" flex py-6">
        <div class=" mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div>
</x-layouts.app>
