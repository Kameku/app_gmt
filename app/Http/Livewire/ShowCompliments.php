<?php

namespace App\Http\Livewire;

use App\Models\Compliment;
use Livewire\Component;
use Livewire\WithPagination;

class ShowCompliments extends Component
{
    use WithPagination;
    
    protected $listeners =[
        'renderImport' => 'render',
        'truncateCom' => 'render',
    ];

    public $search;

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {

        // $compliments = Compliment::paginate(5);
        $compliments = Compliment::where('manifest', 'like', '%'. $this->search . '%')
                                    ->orWhere('client', 'like', '%'. $this->search . '%')
                                    ->orWhere('plate', 'like', '%'. $this->search . '%')
                                    ->orWhere('identity_card', 'like', '%'. $this->search . '%')
                                    ->paginate('10');
        
        return view('livewire.show-compliments', compact('compliments')) ;
    }
}
