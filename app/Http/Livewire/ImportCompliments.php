<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ComplimentsImport;
use App\Models\Compliment;
use Livewire\WithFileUploads;
use Maatwebsite\Excel\Validators\ValidationException;

class ImportCompliments extends Component
{
    use WithFileUploads;

    public $open = false;
    public $file;

    protected $rules =[
        'file' => 'required',
    ];

    protected $message =[
        'file.required' => 'Necesita un archivo para realizar la carga!',
    ];

    public function importCom(){

        $this->validate($this->rules, $this->message);

        Excel::import(new ComplimentsImport, $this->file);
        $this->reset(['open', 'file']);
        $this->emitTo('show-compliments','renderImport');
        $this->emit('alert', 'Todos los cumplidos fueron importados correctamente');
    }

    public function truncateCom(){

        Compliment::truncate();
        $this->emit('truncateCom');
    }

    public function render()
    {
        return view('livewire.import-compliments');
    }
}
