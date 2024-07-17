<?php

use App\Livewire\LandingPage;
use App\Livewire\AboutPage;
use Illuminate\Support\Facades\Route;

Route::get('/', LandingPage::class);
Route::get('/about', AboutPage::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
