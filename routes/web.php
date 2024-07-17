<?php

use App\Livewire\LandingPage;
use App\Livewire\AboutPage;
use App\Livewire\ContactPage;
use Illuminate\Support\Facades\Route;

Route::get('/landing', LandingPage::class);
Route::get('/about', AboutPage::class);
Route::get('/', ContactPage::class);

Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
