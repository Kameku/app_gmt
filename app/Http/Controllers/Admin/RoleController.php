<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();

       return view('admin.roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = Permission::all();

       return view('admin.roles.create', compact('permissions'));
        
    }

    /**s
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // return $request;

        $rules = [
            'name' => 'required',
            'permissions' => 'required'
        ];
        $message = [
            'name.required' => 'El campo nombre del rol es obligatorio.',
            'permissions.required' => 'Es obligatorio escojer un rol como minimo.'
        ];

        $request->validate($rules , $message);

        $role = Role::create([
            'name' => $request->name,
        ]);

        $role->permissions()->attach($request->permissions);
        

        return redirect()->route('admin.roles.index')->with('success', 'El rol fue creado con exito');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        $permissions = Permission::all();

        return view('admin.roles.edit', compact('role','permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        $rules = [
            'name' => 'required',
            'permissions' => 'required'
        ];
        $message = [
            'name.required' => 'El campo nombre del rol es obligatorio.',
            'permissions.required' => 'Es obligatorio escojer un rol como minimo.'
        ];

        $request->validate($rules , $message);

        $role->update([
            'name' => $request->name,
        ]);

        $role->permissions()->sync($request->permissions);
        // $role->permissions()->attach($request->permissions);

        return redirect()->route('admin.roles.index')->with('success', 'El rol fue actualizado con exito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {   
        
        $role->delete();
        return redirect()->route('admin.roles.index')->with('success', 'El rol fue eliminado con exito');

    }
}
