<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Pages\AboutController;
use App\Http\Controllers\Pages\CareerController;
use App\Http\Controllers\Pages\ContactController;
use App\Http\Controllers\Pages\ServiceController;
use App\Http\Controllers\Pages\InsightsController;
use App\Http\Controllers\Pages\ProjectsController;

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/about',[AboutController::class, 'index'])->name('about.index');
Route::get('/project',[ProjectsController::class, 'index'])->name('project.index');
Route::get('/service',[ServiceController::class, 'index'])->name('service.index');
Route::get('/insight',[InsightsController::class, 'index'])->name('insight.index');
Route::get('/career',[CareerController::class, 'index'])->name('career.index');
Route::get('/contact',[ContactController::class, 'index'])->name('contact.index');

require __DIR__.'/auth.php';
