<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Livewire\Component;

class FetchComments extends Component
{

    public $postId;

    public function render()
    {
        $comments = Comment::with('user')->where('post_id', $this->postId)->get();
        // dd($comments);
        return view('livewire.fetch-comments', compact('comments'));
    }
}
