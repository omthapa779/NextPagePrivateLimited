<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::get('/', function () {
    return view('Pages.welcome');
});

Route::get('/about', [PagesController::class, 'about'])->name('about');