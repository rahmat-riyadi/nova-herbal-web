<?php

namespace App\Http\Livewire;

use App\Models\History;
use Carbon\Carbon;
use Livewire\Component;

class CurrentPatientCard extends Component
{
    public function render()
    {
        return view('livewire.current-patient-card',[
            'total' => History::join('patients', 'patients.id', '=', 'histories.patients_id')
            ->where('histories.coming_time', '>=', Carbon::today())
            ->where('histories.patients_id', '!=', null)->count()
        ]);
    }
}
