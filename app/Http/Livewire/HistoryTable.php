<?php

namespace App\Http\Livewire;

use App\Events\MedicineDoneEvent;
use App\Models\History;
use Livewire\Component;

class HistoryTable extends Component
{

    protected $listeners = [
        'refresh' => '$refresh', 
        'changeStatus' => 'changeStatus'
    ];

    public $patients_id;
    public $patients;

    public function render()
    {

        return view('livewire.history-table', [
            'histories' => History::where('patients_id', $this->patients_id)
            ->orderBy('coming_time', 'DESC')
            ->orderBy('status', 'ASC')
            ->get(),
            'patients' => $this->patients
        ]);
    }

    public function changeStatus($id){

        try {
            History::where('id', $id)->update(['status' => 'Selesai']);
        } catch (\Exception $e){
            dd($e);
        }

        $this->emitTo('current-patient-table', 'refresh');        
        $this->emit('refresh');        
        event(new MedicineDoneEvent());

    }

}
