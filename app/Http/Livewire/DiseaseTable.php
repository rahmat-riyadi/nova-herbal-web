<?php

namespace App\Http\Livewire;

use App\Models\Disease;
use Livewire\Component;

class DiseaseTable extends Component
{
    protected $listeners = ['refresh' => '$refresh'];

    public $name;
    public $patients;

    public function render()
    {
        return view('livewire.disease-table',[
            'diseases' => Disease::where('name', $this->name)->get(),
            'patients' => $this->patients
        ]);
    }
}
