<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

Route::get('/siswa', [SiswaController::class, 'index' ])->name('siswa.index'); // Read
Route::get('/siswa/create', [SiswaController::class, 'create' ])->name('siswa.create'); // Form Create
Route::post('/siswa', [SiswaController::class, 'store' ] )->name('siswa.store'); // Create
Route::get('/siswa/{siswa}/edit', [SiswaController::class, 'edit'])->name('siswa.edit'); // Form Update
Route::put('/siswa/{siswa}', [SiswaController::class, 'update' ])->name('siswa.update'); // Update
Route::delete('/siswa/{siswa}', [SiswaController::class, 'destroy'])->name('siswa.destroy'); // Delete


Route::get('/', function () {
    return view('welcome');
});