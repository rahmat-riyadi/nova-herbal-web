<?php

namespace App\Http\Livewire;

use App\Models\Medicine;
use Livewire\Component;

class MedicinePanel extends Component
{

    public $keyword = '';

    protected $listeners = ['onChange'];

    public function render()
    {
        return view('livewire.medicine-panel',[
            'medicines' => Medicine::where('name', 'like', '%'. $this->keyword .'%')
                            ->latest()
                            ->get()
        ]);
    }

    public function onChange($keyword){
        $this->keyword = $keyword;
    }
}
