<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Message;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $active_user =  auth()->user()->id;
        // $message = Message::all();
        // return $message;
        $user = User::where('id' ,'!=' ,$active_user)->get();
        return view('welcome',[
            'user' => $user
        ]);
    }
}
