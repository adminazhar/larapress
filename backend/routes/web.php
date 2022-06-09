<?php

use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

Route::get('/blog', [PostsController::class, 'index'])->name('posts.index');
Route::get('/blog/{post:slug}', [PostsController::class, 'show'])->name('posts.show');