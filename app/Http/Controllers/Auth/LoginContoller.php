<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginContoller extends Controller
{
    public function index(){
        return view('auth.login');
    }
    public function store(Request $req){
        // dd($req->all());
       $validate = $req->validate([
            'email' => 'required',
            'password' => 'required|min:8'
        ]);

        if(Auth::attempt($req->only(['email','password']))){
            return redirect()->route('index');
        }else{
            return redirect()->back();
        }

    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
