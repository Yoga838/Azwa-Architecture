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
use App\Http\Controllers\Dashboard\PromoController;
use App\Http\Controllers\Pages\ProjectDetailController;
use App\Http\Controllers\Dashboard\PortofolioController;
use App\Http\Controllers\Pages\ServicePerizinanController;
use App\Http\Controllers\Pages\ServiceKontraktorController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.home.index');
    })->name('dashboard');
    
    Route::get('/daftarportofolio', [PortofolioController::class, 'IndexView'])->name('show.portofolio');
    Route::get('/storeportofolio', [PortofolioController::class, 'StoreView'])->name('show-store.portofolio');
    Route::get('/daftarpromo', [PromoController::class, 'IndexView'])->name('show.promo');
    Route::get('/storepromo', [PromoController::class, 'StoreView'])->name('show-store.promo');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', function () {
    return view('pages.home');
})->name("home.index");
Route::get('/tentang-kami',[AboutController::class, 'index'])->name('about.index');
Route::get('/portofolio',[PortofolioController::class, 'get'])->name('project.index');
Route::get('/portofolio/Detail/{id}',[PortofolioController::class, 'getById'])->name('project-detail.index');
Route::prefix('layanan')->name('service.')->group(function () {
    Route::get('/desain', [ServiceController::class, 'index'])->name('desain');
    Route::get('/kontraktor', [ServiceKontraktorController::class, 'index'])->name('kontraktor');
    Route::get('/perizinan', [ServicePerizinanController::class, 'index'])->name('perizinan');
});
Route::get('/karir',[CareerController::class, 'index'])->name('career.index');
Route::get('/kontak',[ContactController::class, 'index'])->name('contact.index');

//test backend
Route::get('/test', function () {
    return view('pages.test');
});
require __DIR__.'/auth.php';
