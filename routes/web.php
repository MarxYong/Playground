<?php

use App\Livewire\LandingPage;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassesController;

Route::get('landing', LandingPage::class);
Route::get('/', [ClassesController::class, 'index']);