<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()
            ->with(['category', 'author'])
            ->filter(request(['search', 'category', 'author']))
            ->paginate(15)
            ->withQueryString();

        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post
        ]);
    }
}
