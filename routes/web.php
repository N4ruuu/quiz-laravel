<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web routes — 3 halaman
|--------------------------------------------------------------------------
|  Setiap route diberi nama (->name) supaya view cukup memakai route('nama'),
|  dan semua logika halaman ada di PageController.
*/

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/gallery', [PageController::class, 'gallery'])->name('gallery');
