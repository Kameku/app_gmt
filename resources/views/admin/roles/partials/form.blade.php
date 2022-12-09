<div class="px-5 pt-10">
    {!! Form::label('name', 'Nombre del Rol:') !!}
    {!! Form::text('name', null, ['class'=> 'w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm' , 'placeholder' => 'Ingrese el nombre del rol']) !!}
    <x-jet-input-error for="name"/>
</div>
<div class="p-5">
    <strong class="p-5 flex bg-indigo-600 w-full rounded-md text-white">Permisos Disponibles</strong>
</div>

<div class="mx-5">
    <x-jet-input-error for="permissions"/>
</div>
<div class=" ml-5">
    @foreach ($permissions as $permission)
        <div class="bg-gray-300 my-2 w-96 rounded-md p-2">
            {!! Form::checkbox('permissions[]', $permission->id, null, ['class' => 'mr-1']) !!}
            {{$permission->name}}
        </div>  
    @endforeach
</div>