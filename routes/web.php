<?php

use App\Livewire\LandingPage;
use App\Livewire\AboutPage;
use App\Livewire\ContactPage;
use App\Http\Controllers\HomeController;
use App\Livewire\Admin\ProfileAdmin;
use Illuminate\Support\Facades\Route;

Route::get('/landing', LandingPage::class);
Route::get('/about', AboutPage::class);
Route::get('/', ContactPage::class);

Auth::routes();

Route::get('/admin/dashboard', [HomeController::class, 'index'])->name('home');
Route::get('/admin', ProfileAdmin::class)->middleware('auth');