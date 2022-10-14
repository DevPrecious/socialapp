<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AddComment extends Component
{

    public $postId;
    public $body;

    protected $rules = [
        'body' => 'required'
    ];

    public function render()
    {
        return view('livewire.add-comment');
    }

    public function store($postid)
    {
        $this->validate();

        Comment::create([
            'user_id' => Auth::id(),
            'post_id' => $postid,
            'body' => $this->body,
        ]);

        $this->body = '';
    }
}
