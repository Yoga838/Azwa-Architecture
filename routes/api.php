<?php

use App\Http\Controllers\Dashboard\PortofolioController;
use App\Http\Controllers\Dashboard\PromoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
//porto
Route::post('/upload-porto',[PortofolioController::class, 'Store'])->name('portofolio.store');
Route::put('/edit-porto/{id}',[PortofolioController::class, 'edit'])->name('portofolio.edit');
Route::get('/get-porto',[PortofolioController::class, 'get'])->name('portofolio.get');
Route::get('/get-portoid/{id}',[PortofolioController::class, 'getById'])->name('portofolio.getbyid');
Route::delete('/delete-porto/{id}',[PortofolioController::class, 'delete'])->name('portofolio.delete');
//promo
Route::get('/promo', [PromoController::class, 'index'])->name('promo.index');
Route::get('/promo/{id}', [PromoController::class, 'show'])->name('promo.show');
Route::post('/promo', [PromoController::class, 'store'])->name('promo.store');
Route::put('/promo/{id}', [PromoController::class, 'update'])->name('promo.update');
Route::delete('/promo/{id}', [PromoController::class, 'destroy'])->name('promo.destroy');