<?php

namespace App\Http\Livewire;

use App\Models\Patients;
use Livewire\Component;

class TotalPatientCard extends Component
{
    public function render()
    {
        return view('livewire.total-patient-card',[
            'total' => Patients::all()->count()
        ]);
    }
}
