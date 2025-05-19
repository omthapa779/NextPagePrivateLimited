<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

Sitemap::create()
    ->add(Url::create('/'))
    ->add(Url::create('/about-us'))
    ->add(Url::create('/services'))
    ->add(Url::create('/FAQ'))
    ->add(Url::create('/Contact'))
    ->writeToFile(public_path('sitemap.xml'));

Route::get('/', function () {
    return view('Pages.welcome');
});

Route::get('/about-us', [PagesController::class, 'about'])->name('about');
Route::get('/services', [PagesController::class, 'Services'])->name('Services');
Route::get('/FAQ', [PagesController::class, 'FAQ'])->name('FAQ');
Route::get('/Contact', [PagesController::class, 'Contact'])->name('Contact');