<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;

class UserComponent extends Component
{
    use WithPagination;
    public $search, $userEdit, $name, $email, $avatar , $rolesA;
    public $openEdit = false;

    protected $rules = [
        'roles[]' => 'required'
    ];

   

    public function updatingSearch(){
        $this->resetPage();
    }

    // public function paginationView()
    // {
    //     return 'components.layouts.pagination';
    // }



    public function render()
    {
        $roles = Role::all();
        $users = User::where('name', 'like', '%'. $this->search . '%')
                        ->paginate('10');
        return view('livewire.user-component', compact('users','roles'))->layout('components.layouts.app');

    }

    public function edit(User $user){

        $this->userEdit = $user;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->avatar = $user->profile_photo_url;
        $this->openEdit = true;

    }

    public function asignarRole(User $user){


        //Santiago
        $this->validate();
        $this->avatar->save();

        // return $this->rolesA;
        $user->roles()->sync($this->rolesA);
    }

}
