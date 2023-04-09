<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;

use function PHPUnit\Framework\isNull;

class UserController extends Controller
{

    private $folderName;

    public function __construct(){
        $this->folderName = 'admin';
    }

    public function index(Request $request){

        $admin = User::all();

        return view('admin.'.$this->folderName.'.index', compact('admin'));
    }

    public function create(){
        return view('admin.'.$this->folderName.'.form');
    }

    public function show(User $user){
        return view('admin.'.$this->folderName.'.form', compact('user'));
    }


    public function store(Request $request){

        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
            'image' => 'nullable'
        ]);

        if($request->image){
            $data['image'] = $request->file('image')->store('admin');
        }

        $data['password'] = bcrypt($data['password']);

        try {
            User::create($data);
            $message = 'Admin Berhasil ditambah';
        } catch (\Exception $e) {
            $message = $e->getMessage();
            dd($message);
        }

        return redirect('/admin/admin/')->with('message', $message);

    }


    public function update(User $user, Request $request){

        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'role' => 'required',
            'image' => 'nullable'
        ]);

        if($request->image && $user->image){
            Storage::delete($user->image);
            $data['image'] = $request->file('image')->store('admin');
        }

        try {
            User::find($user->id)->update($data);
            $message = 'Admin Berhasil diupdate';
        } catch (\Exception $e) {
            $message = $e->getMessage();
            return redirect('/admin/admin/show/'. $user->id )->with('message', $message);
        }

        return redirect('/admin/admin/')->with('message', $message);

    }

    public function destroy(User $user){

        $data = User::find($user->id);

        try {

            if(!isNull($data->image)){
                Storage::delete($data->image);
            }

            $data->delete();
            $message = 'successfully';

        } catch (\Exception $exception){
            $message = $exception->getMessage();
        }

        return response()->json([
            'message' => $message,
        ]);

    }




}
