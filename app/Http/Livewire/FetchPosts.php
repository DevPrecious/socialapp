<?php

namespace App\Http\Livewire;

use App\Models\Like;
use App\Models\Post;
use Livewire\Component;

class FetchPosts extends Component
{

    // public $posts;

    // public function mount()
    // {
    //     $this->posts = 
    // }

    public function render()
    {
        $posts =
            Post::with('user')->with('likes')->latest()->get();
        // dd($posts);
        return view('livewire.fetch-posts', compact('posts'));
    }

    public function addLikeToPost($post_id)
    {
        $user_id = auth()->id();
        $checkLiked = Like::where('user_id', $user_id)->where('post_id', $post_id)->first();
        if ($checkLiked) {
            Like::where('user_id', $user_id)->where('post_id', $post_id)->delete();
        } else {
            Like::create([
                'user_id' => auth()->id(),
                'post_id' => $post_id
            ]);
        }
    }
}
