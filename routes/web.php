<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */



 /**
 * * User
 * testing Halaman User
 */
Route::get('/', [UserController::class, 'index'])->name('index');
Route::get('/info-kegiatan', [UserController::class, 'info'])->name('user-info');
Route::get('/profil', [UserController::class, 'profil'])->name('user-profil');
Route::get('/berita', [UserController::class, 'berita'])->name('user-berita');


/**
 * * Dashboard Admin
 * testing dashboard admin
 */
Route::get('/admin', [AdminController::class, 'admin'])->name('admin-index');
Route::get('/admin/kegiatan', [AdminController::class, 'kegiatan'])->name('admin-kegiatan');
Route::get('/admin/kontributor', [AdminController::class, 'kontributor'])->name('admin-kontributor');
Route::get('/admin/berita', [AdminController::class, 'berita'])->name('admin-berita');

