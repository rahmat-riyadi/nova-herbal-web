<?php

namespace App\Http\Livewire;

use App\Models\Patients;
use Livewire\Component;
use Livewire\WithPagination;

class PatientsTable extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = [
        'searchEvent' => 'setKeyword',
        'refresh' => '$refresh'
    ];

    public $keyword = '';

    public function render()
    {
        return view('livewire.patients-table', [
            'patients' => Patients::where('name', 'like', '%'. $this->keyword. '%' )
            ->orWhere('id_patient', 'like', '%'. $this->keyword. '%')
            ->orWhere('nik', 'like', '%'. $this->keyword. '%')
            ->paginate(10)
        ]);
    }

    public function setKeyword($keyword){
        $this->keyword = $keyword;
    }   


}
