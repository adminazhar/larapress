<?php

use App\Models\Post;
use Illuminate\Contracts\View\View;
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