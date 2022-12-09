<x-layouts.app>

    <x-slot name='title'>Editar Role</x-slot>

    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Editar Role') }}
        </h2>
    </x-slot>

    <div class="flex p-6 rounded-md">
        {!! Form::model($role, ['route' => ['admin.roles.update', $role->id], 'method' => 'put' ,'class' => 'w-full'] ) !!}

            @include('admin.roles.partials.form')

            <div class="p-5">
                {!! Form::submit('Actualizar Rol', ['class' => 'items-center px-10 py-3 bg-indigo-500 hover:bg-indigo-700 rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm hover:text-white focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-gray-800 active:bg-indigo-700 disabled:opacity-25 transition']) !!}
            </div>

        {!! Form::close() !!}
    </div>

</x-layouts.app> 