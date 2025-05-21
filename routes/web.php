<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeasiswaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/beasiswa', [BeasiswaController::class, 'index'])->name('beasiswa.index');
Route::get('/beasiswa/create', [BeasiswaController::class, 'create'])->name('beasiswa.create');
Route::post('/beasiswa', [BeasiswaController::class, 'store'])->name('beasiswa.store');
Route::get('/beasiswa/{id}/edit', [BeasiswaController::class, 'edit'])->name('beasiswa.edit');
Route::put('/beasiswa/{id}', [BeasiswaController::class, 'update'])->name('beasiswa.update');
Route::delete('/beasiswa/{id}', [BeasiswaController::class, 'destroy'])->name('beasiswa.destroy');
