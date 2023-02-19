<?php

namespace App\Http\Controllers;

class WebController extends Controller
{
    
    public function index(){
        return view('welcome');
    }
    
    public function regis(){
        return view('registration');
    }

    public function dashboard(){
        return view('admin.index');
    }

}
