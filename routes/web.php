<?php

use App\Livewire\LandingPage;
use App\Livewire\ClassesManagement;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassesController;

Route::get('/', LandingPage::class);
Route::get('/', [ClassesController::class, 'index']);