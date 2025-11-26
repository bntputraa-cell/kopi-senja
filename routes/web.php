<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GubukSenjaController;

// Route untuk halaman utama (home)
Route::get('/', [GubukSenjaController::class, 'index'])->name('home');

// Route baru untuk halaman menu lengkap
Route::get('/menu-lengkap', [GubukSenjaController::class, 'menuIndex'])->name('menu.index');

// Route baru untuk halaman fasilitas lengkap
Route::get('/fasilitas-lengkap', [GubukSenjaController::class, 'fasilitasIndex'])->name('fasilitas.index');