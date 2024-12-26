<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\pages\HomeController;
use App\Http\Controllers\Pages\AboutController;
use App\Http\Controllers\Pages\CareerController;
use App\Http\Controllers\Pages\ContactController;
use App\Http\Controllers\Pages\ServiceController;
use App\Http\Controllers\Pages\InsightsController;
use App\Http\Controllers\Pages\ProjectsController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::get('/',[HomeController::class, 'index'])->name('home.index');
Route::get('/about',[AboutController::class, 'index'])->name('about.index');
Route::get('/project',[ProjectsController::class, 'index'])->name('project.index');
Route::get('/service',[ServiceController::class, 'index'])->name('service.index');
Route::get('/insight',[InsightsController::class, 'index'])->name('insight.index');
Route::get('/career',[CareerController::class, 'index'])->name('career.index');
Route::get('/contact',[ContactController::class, 'index'])->name('contact.index');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

Route::get('/dashboard', function () {
    return view('admin.home.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
