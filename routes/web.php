<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\pages\HomeController;
use App\Http\Controllers\Pages\AboutController;
use App\Http\Controllers\Pages\CareerController;
use App\Http\Controllers\Pages\ContactController;
use App\Http\Controllers\Pages\ServiceController;
use App\Http\Controllers\Pages\ProjectsController;
use App\Http\Controllers\Pages\ServicePerizinanController;
use App\Http\Controllers\Pages\ServiceKontraktorController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

Route::get('/dashboard', function () {
    return view('admin.home.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/',[HomeController::class, 'index'])->name('home.index');
Route::get('/tentang-kami',[AboutController::class, 'index'])->name('about.index');
Route::get('/portofolio',[ProjectsController::class, 'index'])->name('project.index');
Route::prefix('layanan')->name('service.')->group(function () {
    Route::get('/desain', [ServiceController::class, 'index'])->name('desain');
    Route::get('/kontraktor', [ServiceKontraktorController::class, 'index'])->name('kontraktor');
    Route::get('/perizinan', [ServicePerizinanController::class, 'index'])->name('perizinan');
});
Route::get('/karir',[CareerController::class, 'index'])->name('career.index');
Route::get('/kontak',[ContactController::class, 'index'])->name('contact.index');

require __DIR__.'/auth.php';
