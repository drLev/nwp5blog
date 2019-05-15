<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post as PostModel;

class Post extends Controller
{
    public function index($postId = 0)
    {
        $post = PostModel::find($postId);
        $post->subtitle = substr($post->text, 0, 20);
        return view('blog.post', [
            'post' => $post
        ]);
    }
}
