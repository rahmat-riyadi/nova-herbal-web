<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PatientNote extends Component
{

    protected $listeners = ['refresh' => '$refresh'];

    public $patients;

    public function render()
    {
        return view('livewire.patient-note');
    }
}
