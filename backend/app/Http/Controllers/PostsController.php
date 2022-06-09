<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use App\Models\Post;
class PostsController extends Controller
{
    public function index(): View
    {
        return view('posts.index', [
            'posts' => Post::published()->newest()->paginate(5),
        ]);
    }

    public function show(string $slug): View
    {
        return view('posts.show', [
            'post' => Post::slug($slug)->status('publish')->firstOrFail(),
        ]);
    }
}
