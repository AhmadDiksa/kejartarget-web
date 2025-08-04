<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController; // Pastikan ini diimpor

// Route untuk halaman utama
Route::get('/', [PageController::class, 'home'])->name('home');

// Route untuk halaman blog
Route::get('/blog', [PageController::class, 'blog'])->name('blog');

// Route untuk halaman Our Teams
Route::get('/teams', [PageController::class, 'teams'])->name('teams');