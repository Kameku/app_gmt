<div>
    <x-table>
        <div class="px-6 py-7 bg-indigo-600">
            <input class="w-full rounded-md border-solid border-indigo-400 shadow-md cursor-pointer" type="text" wire:model="search" placeholder="Buscar Cumplidos por 'Manifiesto, Placa, Cliente o Cedula'">
        </div>
        @if ($compliments->count())
        <table class="min-w-full border-collapse border border-indigo-200 text-center">
            <thead>
                <tr class="bg-indigo-100 border-b-2 border-indigo-200">
                    <th class="px-5 py-3 border border-indigo-200 text-xs font-semibold text-gray-600 uppercase text-center">
                        Manifiesto
                    </th>
                    <th class="border border-indigo-200  text-xs font-semibold text-gray-600 uppercase ">
                        Cliente
                    </th>
                    <th class="border border-indigo-200   text-xs font-semibold text-gray-600 uppercase ">
                        Placa
                    </th>
                    <th class=" border border-indigo-200   text-xs font-semibold text-gray-600 uppercase ">
                        Cedula
                    </th>
                    <th class=" borde0 border-indigo-200 t text-xs font-semibold text-gray-600 uppercase ">
                        Fecha de cumplido
                    </th>
                    <th class=" border-indigo-200  text-xs font-semibold text-gray-600 uppercase ">
                        Fecha de pago
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($compliments as $compliment)
                    <tr>
                        <td class="px-3 py-3 border border-indigo-200 text-sm">
                            <span class="text-gray-600">
                                {{ $compliment->manifest }}
                            </span>
                        </td>
                        <td class=" border border-indigo-200 text-sm text-left pl-3">
                            <span class="text-gray-600 normal-case">
                                {{ $compliment->client }}
                            </span>
                        </td>
                        <td class=" border border-indigo-200 text-sm">
                            <span class="relative inline-block px-5 py-1 font-semibold">
                                <span aria-hidden class="absolute inset-0 bg-green-200 opacity-50 rounded-md"></span>
                                <span class="relative text-green-900">{{ $compliment->plate }}</span>
                            </span>
                        </td>
                        <td class="border border-indigo-200 text-sm">
                            <span class="text-gray-600">
                                {{ $compliment->identity_card }}
                            </span>
                        </td>
                        <td class=" border border-indigo-200 text-sm">
                            <span class="text-gray-600">
                                {{ $compliment->compliment_date }}
                            </span>
                        </td>
                        <td class=" border border-indigo-200 text-sm">
                            <span class="text-gray-600">
                                {{ $compliment->payment_date }}
                            </span>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="px-16 py-4 bg-indigo-600 text-white border-t-2 border-indigo-900">
            {{ $compliments->links('vendor.livewire.tailwind') }}
        </div>
        @else
            <div class="px-6 py-4 bg-red-200 text-red-900">
                No existen registros que coincidan con su busqueda. 
            </div>   
        @endif  
    </x-table>
</div>
