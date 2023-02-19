<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DiseaseTable extends Component
{

    public $diseases;

    public function render()
    {
        return view('livewire.disease-table');
    }
}
