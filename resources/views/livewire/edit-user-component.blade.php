<div>
    <x-jet-secondary-button class="col-end-5" wire:click="$set('open', true)">
        Editar
    </x-jet-secondary-button>

    <x-jet-dialog-modal wire:model="open">
        <x-slot name='title' >
            <h4 class="text-center">Agregar rol al usuario</h4>
        </x-slot>

        <x-slot name='content'>
            <div class="mb-4 p-3 text-center text-gray-800">
                {{$user->name}}
            </div>
            <div class="mb-4 p-3 text-center text-gray-800">
                @foreach ($roles as $item)
                    {{$item->name}}
                @endforeach
            </div>
        </x-slot>
        
        <x-slot name='footer'>
            <x-jet-secondary-button class="mr-3" wire:click="importCom">
                Actualizar
            </x-jet-secondary-button>
            <x-jet-danger-button wire:click="$set('open', false)">
                cancelar
            </x-jet-danger-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
