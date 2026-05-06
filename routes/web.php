<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'home'])->name('home');
Route::get('/blog/create', [MovieController::class, 'create'])->name('blog.create');
Route::post('/blog/store', [MovieController::class, 'store'])->name('blog.store');
Route::get('/blog', [MovieController::class, 'index'])->name('blog.index');
