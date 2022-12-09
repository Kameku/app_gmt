<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Spatie\Permission\Models\Permission;

class CreateRole extends Component
{
    public $open = true;

    public function render()
    {
        $permissions = Permission::all();

        return view('livewire.create-role', compact('permissions'));
    }
}
