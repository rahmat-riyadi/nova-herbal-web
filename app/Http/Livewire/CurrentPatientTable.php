<?php

namespace App\Http\Livewire;

use App\Models\History;
use App\Models\Patients;
use Carbon\Carbon;
use Livewire\Component;

class CurrentPatientTable extends Component
{

    protected $listeners = ['refreshCurrentPatient' => '$refresh'];

    public function render()
    {
        return view('livewire.current-patient-table',[
            'patients' => History::join('patients', 'patients.id', '=', 'histories.patients_id')
                        ->where('histories.coming_time', '>=', Carbon::today())
                        ->where('histories.patients_id', '!=', null)
                        ->orderBy('histories.coming_time', 'DESC')
                        ->orderBy('histories.status', 'ASC')
                        ->get(),
        ]);
    }

    public function changeStatus($id){

        try {
            History::where('id', $id)->update(['status' => 'Selesai']);
        } catch (\Exception $e){
            dd($e);
        }
        $this->emit('refreshCurrentPatient');        

    }
}
