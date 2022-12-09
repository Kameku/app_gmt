<div>

    <x-jet-secondary-button wire:click="$set('open', true)">
        Crear Nuevo Rol
    </x-jet-secondary-button>
    
    <x-jet-dialog-modal wire:model="open">
        <x-slot name='title' >
            <h4 class="text-center uppercase">Crear un nuevo rol</h4>
        </x-slot>

        <x-slot name='content'>
            
            {!! Form::open() !!}

                <div class="p-5">
                    {!! Form::label('name', 'Nombre del Rol') !!}
                    {!! Form::text('name', null, ['class'=> 'w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm' , 'placeholder' => 'Ingrese el nombre del rol']) !!}
                </div>
                <strong class="mx-5 mb-10">Permisos Disponibles</strong>

                @foreach ($permissions as $item)
                    <div class="flex m-5 p-3 bg-sky-600 rounded-md shadow-sm text-white">
                        <label>
                            {!! Form::checkbox('permissions[]', $item->id, null, ['class' => '']) !!}
                            {{$item->name}}
                        </label>
                    </div>  
                @endforeach

            {!! Form::close() !!}


            {{-- <div class="py-5 px-10">
                <div class="">
                    <label for="nombre del rol" class="font-jose block font-medium text-xl text-gray-500">Nombre del rol</label>
                    <x-jet-input type='text' class="w-full"></x-jet-input>
                    <x-jet-input-error for="nombre del rol"/>
                </div>
                <div class="py-8">
                    <label for="descripcion del rol" class="font-jose block font-medium text-xl text-gray-500">Descripción del rol</label>
                    <x-jet-input type='text' class="w-full"></x-jet-input>
                    <x-jet-input-error for="descripcion del rol"/>
                </div>
            </div>
            <div>
                
                @foreach ($permissions as $item)
                    {{-- {!! Form::checkbox('permissions[]', $item->id, null, ['class'=> 'py-5']) !!} 
                @endforeach
            </div> --}}
        </x-slot>
        
        <x-slot name='footer'>
            <x-jet-secondary-button class="mr-3">
                Crear Rol
            </x-jet-secondary-button>
            <x-jet-danger-button wire:click="$set('open', false)">
                cancelar
            </x-jet-danger-button>
        </x-slot>
    </x-jet-dialog-modal>


</div>
