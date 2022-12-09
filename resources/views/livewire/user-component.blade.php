<div>
    <x-slot name='title'>Usuarios</x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Usuarios') }}
        </h2>
    </x-slot>
    <x-table>
        <div class="px-6 py-7 bg-indigo-600">
            <input wire:model="search" class="w-full rounded-md border-solid border-indigo-400 shadow-md cursor-pointer" type="text"  placeholder="Buscar Usuarios">
        </div>
        @if ($users->count())
        <table class="min-w-full border-collapse border border-indigo-200 text-center">
            <thead>
                <tr class="bg-indigo-100 border-b-2 border-indigo-200">
                    <th class="px-5 py-3 border border-indigo-200 text-xs font-semibold text-gray-600 uppercase text-left">
                        Nombre
                    </th>
                    <th class=" border-indigo-200  text-xs font-semibold text-gray-600 uppercase ">
                       Email
                    </th>
                    <th class=" border-indigo-200  text-xs font-semibold text-gray-600 uppercase ">
                       
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr class="">
                        <td class="px-3 py-4 border border-indigo-200 text-sm text-left">
                            <span class="flex text-gray-600 text-left">
                                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                    <div class="shrink-0">
                                        <img class="h-10 w-10 rounded-full object-cover" src="{{ $user->profile_photo_url }}" alt="{{ $user->name }}" />
                                    </div>
                                @endif
                                <div class="min-w-0 pt-2  ml-3">
                                    <p class="  text-lg font-medium text-gray-600 truncate dark:text-white">
                                        {{$user->name}}
                                    </p>
                                </div>
                            </span>
                        </td>
                        <td class="px-3 py-4 border border-indigo-200 text-lg text-left">
                            <span class="text-gray-600 text-left">
                                {{ $user->email }}
                            </span>
                        </td>
                        <td class=" border border-indigo-200 text-sm pl-3 w-48">
                            <span>
                                <x-jet-secondary-button class="col-end-5" wire:click="edit({{$user}})">
                                    Asignar Roles
                                </x-jet-secondary-button>
                               {{-- @livewire('edit-user-component', ['user' => $user], key($user->id)) --}}
                            </span>
                        </td>
                        {{-- <td class=" border border-indigo-200 text-sm pl-3 w-28">
                            <form action="{{ route('admin.roles.destroy', $rol )}}" class="form-delete" method="POST" id="form-delete{{$rol->id}}">
                                @method('delete')
                                @csrf
                                <button class="px-4 py-3 bg-red-500 hover:bg-indigo-700 rounded-md text-xs text-white" type="submit">Eliminar</button>
                            </form>
                        </td> --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
        @if ($users->hasPages())
            <div class="px-16 py-4 bg-indigo-600 text-white border-t-2 border-indigo-900">
                {{ $users->links('vendor.livewire.tailwind') }}
            </div>
        @endif
        @else
            <div class="px-6 py-4 bg-red-200 text-red-900">
                No existen registros que coincidan con su busqueda. 
            </div>   
        @endif  
    </x-table>
    <x-jet-dialog-modal wire:model="openEdit">
        <x-slot name='title' >
            <h4 class="text-center">Agregar rol al usuario</h4>
        </x-slot>

        <x-slot name='content'>
            <div>
                {!! Form::open() !!}
                    <div>
                        <div class="grid justify-items-center text-center items-center">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <div class="shrink-0">
                                    <img class="w-60 h-60 rounded-full object-cover" src="{{ $avatar }}" alt="{{ $name }}" />
                                </div>
                            @endif
                        <div class="my-4">
                            <strong class="text-3xl text-indigo-800">{{$name}}</strong><br>
                            <span>{{$email}}</span>
                        </div>
                    </div>
                    <strong class="mx-5 mb-10">Roles Disponibles</strong>
                    @foreach ($roles as $item)
                        <div class="flex m-5 p-3 bg-sky-600 rounded-md shadow-sm text-white">
                            <label wire:model.defer="rolesA" >
                                {!! Form::checkbox('roles[]', $item->id, null, ['class' => 'rounded']) !!}
                                <span class="">
                                    {{$item->name}}
                                </span>
                            </label>
                        </div>  
                    @endforeach
                {!! Form::close() !!}
            </div>

        </x-slot>
        
        <x-slot name='footer'>
            <x-jet-secondary-button class="mr-3" wire:click="asignarRole">
                Actualizar
            </x-jet-secondary-button>
            <x-jet-danger-button wire:click="$set('openEdit', false)">
                cancelar
            </x-jet-danger-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
