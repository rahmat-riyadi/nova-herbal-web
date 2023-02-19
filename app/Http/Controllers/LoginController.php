<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('admin.login');
    }

    public function login(Request $request){

        $data = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt(['email' => $data['email'], 'password' => $data['password']])){
            $request->session()->regenerate();
            return redirect()->intended('/admin');
            die;
        }

        return back()->with('loginFailed', 'username atau password salah');

    }

    public function logout(Request $request){

        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
