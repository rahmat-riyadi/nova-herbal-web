<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use Illuminate\Http\Request;

class MedicineController extends Controller
{
    private $folderName;

    public function __construct(){
        $this->folderName = 'medicine';
    }

    public function index(){
        $medicine = Medicine::all();
        return view('admin.'.$this->folderName.'.index', compact('medicine'));
    }

    public function create(){
        return view('admin.'. $this->folderName .'.form');
    }

    public function show(Medicine $medicine){
        return view('admin.'. $this->folderName .'.form', compact('medicine'));
    }

    public function store(Request $request){

        try {
            Medicine::create($request->all());
            $msg = 'Kapsul Berhasil Ditambah';
        } catch (\Exception $e){
            $msg = $e->getMessage();
        }

        return redirect('/admin/medicine')->with('message', $msg);
    }

    public function update(Request $request, Medicine $medicine){

        try {
            Medicine::find($medicine->id)->update($request->all());
            $msg = 'Kapsul Berhasil Diubah';
        } catch (\Exception $e){
            $msg = $e->getMessage();
        }

        return redirect('/admin/medicine')->with('message', $msg);

    }

    public function delete(Medicine $medicine){

        try {
            Medicine::destroy($medicine->id);
            $msg = 'successfully';
        } catch (\Exception $e){
            $msg = $e->getMessage();
        }

        return response()->json([
            'message' => $msg
        ]);

    }
}
