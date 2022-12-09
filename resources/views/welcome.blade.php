<x-layouts.guest>
    
    <x-slot name='title'>Dashboard</x-slot>

    <x-slot name="header">
        <img class="w-10/12 p-5" src="{{asset('images/logofull20.svg')}}" alt="">
    </x-slot>

    
    <div class="h-screen">
        <div class="flex text-center bg-gray-100 bg-opacity-70 w-2/3 py-36 rounded-md mx-auto shadow-lg">
            <div class=" mx-auto sm:px-6 lg:px-8">
                <div class="sm:rounded-lg">
                   <span class="text-6xl font-jose font-light text-sky-700">Logistica sin fronteras</span><br>
                   <p class="text-gray-500 text-center text-lg w-10/12 mx-auto mt-5">Consulta tus pagos pendientes, fechas programadas y posibles pendientes para recibir correctamente sus pagos.</p>
                   <div class="mt-5">
                    {!! Form::open(['route' => 'compliments.consul'])!!}
                        <div class="flex p-5">
                            {!! Form::text('plate', null, ['class'=> 'uppercase placeholder:normal-case placeholder:text-gray-400 placeholder:font-light placeholder:text-xl font-jose text-sky-900  text-2xl h-14 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-xl' , 'placeholder' => 'Ingrese la placa de su vehiculo']) !!}
                            {!! Form::submit('Consultar',['class' => 'font-jose font-light bg-sky-700 px-8 rounded-md shadow-lg text-xl shadow-sky-700 ml-2 text-white hover:shadow-md ease-in duration-100 ']) !!}
                        </div>
                    {!! Form::close() !!}
                    <x-jet-input-error for="plate"></x-jet-input-error>
                   </div>
                </div>
            </div>
        </div>
    </div>

</x-layouts.guest>