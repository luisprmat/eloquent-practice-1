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

        $dates = Post::selectRaw('id, title, DATE(created_at) as created_date')
            ->withCount('likes')
            ->orderBy('created_date', 'desc')
            ->orderBy('likes_count', 'desc')
            ->get()
            ->groupBy('created_date');

        return view('posts', compact('dates'));
    }
}
