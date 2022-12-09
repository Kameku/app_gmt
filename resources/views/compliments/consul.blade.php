<x-layouts.guest>
    
    <x-slot name='title'>Consulta</x-slot>

    <x-slot name="header">
        <img class="w-4/5 p-2 md:w-10/12 md:p-5" src="{{ asset('images/logofull20.svg') }}" alt="">
    </x-slot>


    <div class="flex pr-5 md:pr-20 flex-row-reverse">
        <div class="md:pl-10">
            <a href="{{ route('welcome') }}" class=" bg-red-500 hover:bg-red-800 py-2 px-5 md:px-10 md:text-md opacity-70 hover:opacity-100 text-white border-2 border-transparent shadow-sky-800 hover:shadow-sky-900 shadow-md hover:shadow-lg rounded-md focus:outline-none focus:border-sky-900 transition">Volver a consultar</a>
        </div>
    </div>
 

    

    <div class="mt-10 md:mt-0 text-center bg-opacity-70  rounded-md mx-auto">
        <div class=" mx-auto px-6 lg:md:px-8">
            <div class="rounded-lg">
               <span class="text-3xl md:text-6xl font-jose font-light text-sky-700">Logistica sin fronteras</span><br>
               <md: class="text-gray-500 text-center text-base md:text-lg w-10/12 mx-auto mt-5">Estas son la consultas asociadas a tu placa</md:>
            </div>
        </div>
    </div>
    <div class="mt-10 mx-auto text-center w-4/5 pb-20">
        @if ($compliments->count())
            <div class="md:grid md:grid-cols-3 md:gap-8 gap-4">
                @foreach ($compliments as $item)
                    <div class=" bg-white rounded-lg border border-gray-200 shadow-lg mb-5 md:mr-5 border-none shadow-blue-900/40">
                        <div class="bg-blue-900 w-full rounded-md py-3 flex flex-col">
                            <small class="text-gray-200 text-sm">Placa</small>
                            <span class="uppercase text-white text-xl md:text-3xl">{{$item->plate}}</span>
                        </div>
                        <div class="my-3 flex flex-col mb-5">
                                <small class="text-gray-400">Manifiesto</small>
                                <span class="bg-sky-300 w-24 md:w-42 mx-auto rounded-full px-4 py-1 md:py-2 text-gray-500">{{$item->manifest}}</span>
                        </div>
                        <div class="flex flex-col text-left mx-5 my-4 border-b-2 border-indigo-200 ">
                                <small class="text-gray-400">Cliente</small>
                                <span>{{$item->client}}</span>
                        </div>
                        <div class="flex flex-col text-left mx-5 my-4 border-b-2 border-indigo-200 ">
                                <small class="text-gray-400">Fecha de Cumplido</small>
                                @if ($item->compliment_date)
                                <span>{{$item->compliment_date}}</span>
                                @else
                                <span>No hay fecha disponible</span>
                                @endif
                        </div>
                        <div class="bg-blue-900 w-full rounded-t-md py-3 flex flex-col">
                            <small class="text-gray-200 text-sm">Fecha de pago</small>
                            @if ($item->payment_date)
                                <span class="uppercase text-white text-xl md:text-3xl">{{$item->payment_date}}</span>
                                @else
                                <span class="uppercase text-white text-sm pb-4">No hay fecha disponible</span>
                            @endif
                        </div>
                        @switch($item->observations)
                            @case('PROGRAMADO')
                            <div class="bg-green-600 w-full rounded-b-md py-3 flex flex-col">
                                <small class="text-white text-base md:text-lg">{{ $item->observations}}</small>
                            </div>
                                @break
                        
                            @case('BLOQUEADO')
                            <div class="bg-red-600 w-full rounded-b-md py-3 flex flex-col">
                                <small class="text-white text-base md:text-lg">{{ $item->observations}}</small>
                            </div>
                                @break
                        
                            @default
                                <div class="bg-orange-600 w-full rounded-b-md py-3 flex flex-col">
                                    <small class="text-gray-200 text-base md:text-lg">{{ $item->observations}}</small>
                                </div>
                        @endswitch
                    </div>

                @endforeach
            </div>
        @else
            <div class=" bg-red-300 text-center text-md md:text-xl text-red-900 py-2 md:py-5 w-full rounded-lg ">
                <h3>No hay datos asociados a su consulta</h3>
            </div>
        @endif
    </div>

</x-layouts.guest>