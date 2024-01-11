<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

Route::get('/', function () {
    return view('welcome');
});

// Siswa Routes
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{id}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{id}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{id}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

// Other Routes (About, Home, Profiles, etc.)
Route::get('/about', [SiswaController::class, 'getAbout'])->name('getAbout');
Route::get('/home2', [SiswaController::class, 'getHome'])->name('getHome');
Route::get('/data', [SiswaController::class, 'getData'])->name('data.index');
Route::delete('/delete-siswa/{id}', [SiswaController::class, 'deleteSiswa'])->name('deleteSiswa');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
