<?php

namespace App\Http\Livewire;

use App\Models\Message;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class SendMessage extends Component
{
    public $message, $receiverID;

    public function render()
    {
        return view('livewire.send-message');
    }

    public function store($receiverId)
    {
        if (!empty($this->message)) {
            Message::create([
                'user_id' => Auth::id(),
                'receiver_id' => $receiverId,
                'message' => $this->message
            ]);
        }

        $this->message = '';
    }
}
