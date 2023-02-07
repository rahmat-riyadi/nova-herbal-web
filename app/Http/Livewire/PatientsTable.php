<?php

namespace App\Http\Livewire;

use App\Models\Patients;
use Livewire\Component;

class PatientsTable extends Component
{
    public function render()
    {
        return view('livewire.patients-table', [
            'patients' => Patients::all()
        ]);
    }
}
