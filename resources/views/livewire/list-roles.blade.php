<div>
    <x-table>
        <div class="px-6 py-7 bg-indigo-600">
            <input class="w-full rounded-md border-solid border-indigo-400 shadow-md cursor-pointer" type="text" wire:model="search" placeholder="Buscar Roles">
        </div>
        @if ($roles->count())
        <table class="min-w-full border-collapse border border-indigo-200 text-center">
            <thead>
                <tr class="bg-indigo-100 border-b-2 border-indigo-200">
                    <th class="px-5 py-3 border border-indigo-200 text-xs font-semibold text-gray-600 uppercase text-left">
                        Nombre
                    </th>
                    <th class=" border-indigo-200  text-xs font-semibold text-gray-600 uppercase ">
                       
                    </th>
                    <th class=" border-indigo-200  text-xs font-semibold text-gray-600 uppercase ">
                       
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($roles as $rol)
                    <tr class="">
                        <td class="px-3 py-4 border border-indigo-200 text-sm text-left">
                            <span class="text-gray-600 text-left">
                                {{ $rol->name }}
                            </span>
                        </td>
                        <td class=" border border-indigo-200 text-sm pl-3 w-28">
                            <span class=" flex text-white normal-case">
                               <a href="{{ route('admin.roles.edit', $rol) }}" class="bg-indigo-500 px-5 py-2 mr-5 rounded-md">Editar</a>
                            </span>
                        </td>
                        {{-- <td class=" border border-indigo-200 text-sm pl-3 w-28">
                            {!! Form::open(['route' => ['admin.roles.destroy', $rol->id], 'method' => 'delete','id' => 'form-delete' ,'class' => 'form-delete'] ) !!}
                            {!! Form::submit('Eliminar', ['class' => 'px-4 py-3 bg-red-500 hover:bg-indigo-700 rounded-md text-xs text-white']) !!}
                            {!! Form::close() !!}
                        </td> --}}
                        <td class=" border border-indigo-200 text-sm pl-3 w-28">
                            <form action="{{ route('admin.roles.destroy', $rol )}}" class="form-delete" method="POST" id="form-delete{{$rol->id}}">
                                @method('delete')
                                @csrf
                                <button class="px-4 py-3 bg-red-500 hover:bg-indigo-700 rounded-md text-xs text-white" type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="px-16 py-4 bg-indigo-600 text-white border-t-2 border-indigo-900">
            {{ $roles->links('vendor.livewire.tailwind') }}
        </div>
        @else
            <div class="px-6 py-4 bg-red-200 text-red-900">
                No existen registros que coincidan con su busqueda. 
            </div>   
        @endif  
    </x-table>
</div>
