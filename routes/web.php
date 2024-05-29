<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;

Route::get('/homepage', [PageController::class, 'homepage'])->name('homepage');
Route::get('/posts', [PostController::class, 'index'])->name('allposts');
Route::get('/posts/create', [PostController::class, 'create'])->name('createpost');
Route::post('/posts', [PostController::class, 'store'])->name('storepost');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('showpost');
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('editpost');
Route::put('/posts/{post}', [PostController::class, 'update'])->name('updatepost');

