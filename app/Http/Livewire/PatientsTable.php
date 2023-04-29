<?php

namespace App\Http\Livewire;

use App\Models\Patients;
use Illuminate\Pagination\Paginator;
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
    public $currentPage = 1;

    public function render()
    {

        return view('livewire.patients-table', [
            'patients' => Patients::latest()
            ->where(function($query){
                $query->where('name', 'like', '%'. $this->keyword. '%' )
                ->orWhere('id_patient', 'like', '%'. $this->keyword. '%')
                ->orWhere('nik', 'like', '%'. $this->keyword. '%');
            })
            ->paginate(10)
        ]);
    }

    public function setKeyword($keyword){
        $this->keyword = $keyword;
        $this->emitSelf('$refresh');

        
    }   

    public function setPage($url)
    {
        $this->currentPage = explode('page=', $url)[1];
        Paginator::currentPageResolver(function(){
            return $this->currentPage;
        });
    }


}
