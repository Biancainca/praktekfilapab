<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('post/{slug}', [PostController::class, 'detail'])->name('post.detail');
Route::get('/posts', [PostController::class, 'list'])->name('post.list');
Route::get('/penulis', [PostController::class, 'author'])->name('penulis');



