<?php

namespace App\Http\Livewire;

use App\Events\MedicineDoneEvent;
use App\Models\History;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class CurrentPatientTable extends Component
{

    
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['refresh' => '$refresh', 'changeStatus'];
    
    public function render()
    {
        return view('livewire.current-patient-table',[
            'patients' => History::join('patients', 'patients.id', '=', 'histories.patients_id')
                        ->whereDate('histories.coming_time', '=', date('Y-m-d'))
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
        $this->emitTo('history-table', 'refreshHistoryTable');
        event(new MedicineDoneEvent());

    }

    


}
