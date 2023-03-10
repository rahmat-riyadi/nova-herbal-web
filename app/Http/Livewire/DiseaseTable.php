<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DiseaseTable extends Component
{
    protected $listeners = ['refresh' => '$refresh'];

    public $diseases;

    public function render()
    {
        return view('livewire.disease-table');
    }
}
