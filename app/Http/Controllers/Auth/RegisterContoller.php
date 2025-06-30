<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterContoller extends Controller
{
    public function index(){
        return view('auth.register');
    }
    public function store(Request $req){
        // dd($req->all());
        $req->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|min:8',
            'confirm_password' => 'required|min:8'
        ]);
        
        if($req->password === $req->confirm_password){
           $user = User::create($req->all());
           $user->password = Hash::make($req->password);
           $user->save();
            if(!empty($user)){
                return redirect()->route('index');
            }
        }else{
            return redirect()->back();
        }
    }
}
