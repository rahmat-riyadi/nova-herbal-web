<?php

namespace App\Http\Livewire;

use App\Models\History;
use Livewire\Component;

class HistoryTable extends Component
{

    protected $listeners = ['refreshHistoryTable' => '$refresh'];

    public $patients_id;

    public function render()
    {
        return view('livewire.history-table', [
            'histories' => History::where('patients_id', $this->patients_id)
                            ->orderBy('coming_time', 'DESC')
                            ->orderBy('status', 'ASC')
                            ->get()
        ]);
    }

    public function changeStatus($id){

        try {
            History::where('id', $id)->update(['status' => 'Selesai']);
        } catch (\Exception $e){
            dd($e);
        }
        $this->emit('refreshCurrentPatient');        
        $this->emit('refreshHistoryTable');        

    }
}
