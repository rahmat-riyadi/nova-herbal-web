<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LabResultTable extends Component
{

    protected $listeners = ['refresh' => '$refresh'];

    public $patients;

    public function render()
    {
        return view('livewire.lab-result-table');
    }
}
