<div class="mx-auto sm:px-6 lg:px-8 w-full">
    
    <div class=" grid grid-cols-5 gap-4 text-center">
        <x-jet-secondary-button class="col-start-1">
            Crear Cumplido
        </x-jet-secondary-button>
        <x-jet-secondary-button class="col-end-5" wire:click="$set('open', true)">
            Importar Cumplidos
        </x-jet-secondary-button>
        <x-jet-danger-button class="col-end-6" wire:click="truncateCom">
            Lipiar Cumplidos
        </x-jet-danger-button>
    </div>

    <x-jet-dialog-modal wire:model="open">
        <x-slot name='title' >
            <h4 class="text-center">Importar datos desde un Excel</h4>
        </x-slot>

        <x-slot name='content'>
            <div class="mb-4 p-3 text-center">
                
                {{-- <x-jet-labeldark value="Seleccionar archivo" /> --}}
                <label for="Seleccionar archivo" class="font-jose block font-medium text-xl text-gray-500">Seleccionar archivo</label>
                <input type="file" class=" mx-auto my-5 block items-center text-sm text-indigo-500
                file:mr-4 file:py-2 file:px-4
                file:rounded-full file:border-0
                file:text-sm file:font-semibold
                file:bg-indigo-50 file:text-indigo-700
                hover:file:bg-indigo-100"  wire:model.defer="file" />
                <x-jet-input-error for="file"/>
            </div>
        </x-slot>
        
        <x-slot name='footer'>
            <x-jet-secondary-button class="mr-3" wire:click="importCom">
                Importar Datos
            </x-jet-secondary-button>
            <x-jet-danger-button wire:click="$set('open', false)">
                cancelar
            </x-jet-danger-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
