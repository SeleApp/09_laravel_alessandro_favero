<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'home'])->name('home');
Route::get('/blog/create', [PublicController::class, 'create'])->name('blog.create');
Route::post('/blog/store', [PublicController::class, 'store'])->name('blog.store');
Route::get('/blog', [PublicController::class, 'index'])->name('blog.index');
