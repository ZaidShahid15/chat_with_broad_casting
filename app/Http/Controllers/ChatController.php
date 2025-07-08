<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\ChatEvent;
use App\Models\Message;
use App\Models\User;

class ChatController extends Controller
{

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'message' => 'required',
            'reciverid' => 'required',
        ]);

        $data = [
            'message' => $request->message,
            'user_id' => auth()->user()->id,
            'reciver_id' => $request->reciverid,
            'is_read' => false
        ];

        $message = Message::create($data);

        if ($message) {
            // Pass both message and user ID to the event!
            $event = event(new ChatEvent($request->message, auth()->user()->id,$request->reciverid));
            // if(!$eventwamp){
            //     return response()->json([
            //         'success' => false,
            //         'message' => $request->message,
            //         'sender_id' => auth()->user()->id,
            //         'receiver_id' => $request->reciverid,
            //     ]);
            // }
            
                return response()->json([
                    'success' => true,
                    'message' => $request->message,
                    'sender_id' => auth()->user()->id,
                    'receiver_id' => $request->reciverid,
                ]);
            
        }

    }
    // public function chatOpen($id){
    //     $auth = auth()->user()->id;
    //     $messages = Message::where('user_id', $id)
    //                ->orwhere('reciver_id', $auth)
    //                ->get();
    //     return response()->json($messages);
    // }

    public function chatOpen($id)
    {
        $auth = auth()->id();  // Your logged-in user

        $messages = Message::where(function ($query) use ($auth, $id) {
            $query->where('user_id', $auth)
                ->where('reciver_id', $id);
        })
        ->orWhere(function ($query) use ($auth, $id) {
            $query->where('user_id', $id)
                ->where('reciver_id', $auth);
        })
        ->get();
        $reciver = User::where('id',$id);
        return response()->json($messages);
    }

}
