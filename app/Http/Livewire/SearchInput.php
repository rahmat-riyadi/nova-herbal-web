<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SearchInput extends Component
{

    public $keyword = '';

    public function render()
    {
        return view('livewire.search-input');
    }

    public function onChange($val){

        $this->keyword = $val;

        $this->emitTo('patients-table', 'searchEvent', $this->keyword);

    }
}
