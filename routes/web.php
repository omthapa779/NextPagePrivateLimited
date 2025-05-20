<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::get('/', function () {
    return view('Pages.welcome');
});

Route::get('/about-us', [PagesController::class, 'about'])->name('about');
Route::get('/services', [PagesController::class, 'Services'])->name('Services');
Route::get('/FAQ', [PagesController::class, 'FAQ'])->name('FAQ');
Route::get('/Contact', [PagesController::class, 'Contact'])->name('Contact');