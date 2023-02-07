<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class UserController extends Controller
{

    private $folderName;

    public function __construct(){
        $this->folderName = 'admin';
    }

    public function index(Request $request){

        if($request->ajax()){
            $data = User::all();
            return DataTables::of($data)->make(true);
        }

        return view($this->folderName.'.index');
    }

    public function create(){
        return view($this->folderName.'.form');
    }

    public function show(User $user){
        return view($this->folderName.'.form', compact('user'));
    }


    public function store(Request $request){

        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        $data['password'] = bcrypt($data['password']);

        try {
            User::create($data);
            $message = 'create data successfully';
        } catch (\Exception $e) {
            $message = $e->getMessage();
        }

        return redirect('/admin/admin/')->with('success', $message);

    }

    public function delete(User $user){

    

    }




}
