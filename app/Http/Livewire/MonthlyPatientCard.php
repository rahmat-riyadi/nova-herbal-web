<?php

namespace App\Http\Livewire;

use App\Models\History;
use Carbon\Carbon;
use Livewire\Component;

class MonthlyPatientCard extends Component
{
    public function render()
    {
        return view('livewire.monthly-patient-card', [
            'total' => History::join('patients', 'patients.id', '=', 'histories.patients_id')
            ->whereMonth('histories.coming_time', Carbon::now()->month)
            ->whereYear('histories.coming_time', '=', Carbon::now()->year)
            ->where('histories.patients_id', '!=', null)->count()
        ]);
    }
}
