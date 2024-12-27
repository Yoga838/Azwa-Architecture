<?php

use App\Http\Controllers\Dashboard\PortofolioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
//test backend 
Route::post('/upload-porto',[PortofolioController::class, 'Store'])->name('portofolio.store');
Route::put('/edit-porto/{id}',[PortofolioController::class, 'edit'])->name('portofolio.edit');
Route::get('/get-porto',[PortofolioController::class, 'get'])->name('portofolio.get');
Route::get('/get-portoid/{id}',[PortofolioController::class, 'getById'])->name('portofolio.getbyid');
Route::delete('/delete-porto/{id}',[PortofolioController::class, 'delete'])->name('portofolio.delete');