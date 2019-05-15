<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class Home extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'DESC')
                ->orderBy('id', 'DESC')
                ->limit(4)
                ->get();
        
        foreach ($posts as $post) {
//            dd($post->created_at);
            $post->subtitle = substr($post->text, 0, 20);
        }
        return view('blog.index', [
            'posts' => $posts
        ]);
    }
}
