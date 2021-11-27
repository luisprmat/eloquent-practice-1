<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // Post select title, likes count grouped by date(created_at)
        //   ordered by date(created_at) desc

        $posts = Post::get();

        return view('posts', compact('posts'));
    }
}
