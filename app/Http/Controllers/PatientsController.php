<?php

namespace App\Http\Controllers;

use App\Models\Patients;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class PatientsController extends Controller
{
    
    private $folderName;

    public function __construct(){
        $this->folderName = 'patient';
    }

    public function index(){

        if(request()->ajax()){
            $patients = Patients::all();
            return DataTables::of($patients)->addIndexColumn()->make(true);
        }

        return view($this->folderName.'.index');

    }

    public function create(){
        return view($this->folderName.'.form');
    }

    public function show(Patients $patients){
        return view($this->folderName.'.detail', compact('patients'));
    }

    public function store($r){
        return view($this->folderName.'.detail');
    }


}
