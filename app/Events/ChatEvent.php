<?php

namespace App\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel; // ✅ Use PrivateChannel!
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ChatEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $message;
    public $senderId;
    public $receiverId;

    public function __construct($message, $senderId, $receiverId)
    {
        $this->message = $message;
        $this->senderId = $senderId;
        $this->receiverId = $receiverId;
    }

    // public function broadcastOn(): array
    // {
    //     return [
    //         new PrivateChannel('chat.' . $this->senderId . '.' . $this->receiverId),
    //     ];
    // }

    public function broadcastOn(): array
{
    $ids = collect([$this->senderId, $this->receiverId])->sort()->values();
    return [
        new PrivateChannel('chat.' . $ids[0] . '.' . $ids[1]),
    ];
}

}
