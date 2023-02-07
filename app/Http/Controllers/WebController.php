<?php

namespace App\Http\Controllers;

use App\Models\Patients;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class WebController extends Controller
{
    
    public function index(){

        if(request()->ajax()){
            $data = Patients::all();
            return DataTables::of($data)->addIndexColumn()->make(true);
        }

        return view('index');

    }

}
