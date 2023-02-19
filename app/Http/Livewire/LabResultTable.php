<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LabResultTable extends Component
{

    public $patients;

    public function render()
    {
        return view('livewire.lab-result-table');
    }
}
