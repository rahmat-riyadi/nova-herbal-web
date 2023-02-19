<?php

namespace App\Http\Livewire;

use App\Models\History;
use App\Models\Patients;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class CurrentPatientTable extends Component
{

    
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['refreshCurrentPatient' => '$refresh', 'changeStatus'];
    
    public function render()
    {
        return view('livewire.current-patient-table',[
            'patients' => History::join('patients', 'patients.id', '=', 'histories.patients_id')
                        ->where('histories.coming_time', '>=', Carbon::today())
                        ->where('histories.coming_time', '!>', Carbon::today())
                        ->where('histories.patients_id', '!=', null)
                        ->orderBy('histories.coming_time', 'DESC')
                        ->orderBy('histories.status', 'ASC')
                        ->paginate(10),
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
