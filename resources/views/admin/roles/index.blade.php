<x-layouts.app>

    <x-slot name='title'>Lista de roles</x-slot>

    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Lista de roles') }}
        </h2>
    </x-slot>

    <div class="px-8 mt-10">
        <a href="{{ route('admin.roles.create')}}" class="items-center px-5 py-3 bg-indigo-500 hover:bg-indigo-700 rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm hover:text-white focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-gray-800 active:bg-indigo-700 disabled:opacity-25 transition">
            Crear Nuevo Rol
        </a>
    </div>
    @livewire('list-roles')
    

</x-layouts.app>
