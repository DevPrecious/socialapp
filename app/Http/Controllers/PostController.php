<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function single($id)
    {
        $post = Post::with('user')->find($id);
        return view('single', compact('post'));
    }
}
