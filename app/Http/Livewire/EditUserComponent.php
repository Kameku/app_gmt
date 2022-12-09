<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class EditUserComponent extends Component
{
    public $open= false;
    public $user;


    public function render()
    {
        $roles = Role::all();
        
        return view('livewire.edit-user-component', compact('roles'));
    }
}
