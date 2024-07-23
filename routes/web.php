<?php

use App\Livewire\LandingPage;
use App\Livewire\AboutPage;
use App\Livewire\ContactPage;
use App\Http\Controllers\HomeController;
use App\Livewire\Admin\EmployeeAdmin;
use App\Livewire\Admin\EmployeeCreate;
use App\Livewire\Admin\EmployeeView;
use App\Livewire\Admin\CourseAdmin;
use App\Livewire\Admin\OfficeAdmin;
use App\Livewire\Admin\OfficeCreate;
use App\Livewire\Admin\ProfileAdmin;

use App\Livewire\Lecturer\HomeLecturer;
use Illuminate\Support\Facades\Route;

Route::get('/landing', LandingPage::class);
Route::get('/about', AboutPage::class);
Route::get('/', ContactPage::class);

Auth::routes();

Route::get('/dashboard', [HomeController::class, 'index'])->name('home');

Route::get('/admin/employee', EmployeeAdmin::class)->middleware(['auth', 'admin']);
Route::get('/admin/employee/new', EmployeeCreate::class)->middleware(['auth', 'admin']);
Route::get('/admin/employee/{id}', EmployeeView::class)->middleware(['auth', 'admin']);
Route::get('/admin/course', CourseAdmin::class)->middleware(['auth', 'admin']);
Route::get('/admin/office', OfficeAdmin::class)->middleware(['auth', 'admin']);
Route::get('/admin/office/new', OfficeCreate::class)->middleware(['auth', 'admin']);
Route::get('/admin', ProfileAdmin::class)->middleware(['auth', 'admin']);