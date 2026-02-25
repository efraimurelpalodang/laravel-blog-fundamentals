<?php

use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('home', [
        'nama' => 'Jhon Dae'
    ]))->name('home');
Route::get('/about', fn() => view('about'))->name('about');
Route::get('/posts', [PostsController::class, 'index'])->name('posts');
Route::get('/post/{slug}', [PostsController::class, 'show'])->name('post-detail');
