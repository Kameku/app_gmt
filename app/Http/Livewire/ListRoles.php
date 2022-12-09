<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Spatie\Permission\Models\Role;

class ListRoles extends Component
{
    public $search;

    public function render()
    {
        $roles = Role::where('name', 'like', '%'. $this->search . '%')
                        ->paginate('10');


        return view('livewire.list-roles', compact('roles'));
    }
}
