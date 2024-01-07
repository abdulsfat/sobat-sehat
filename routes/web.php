<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('user/welcome');
});
Route::get('/info-kegiatan', function () {
    return view('user/info-kegiatan');
});

/**
 * * Dashboard Amin
 * testing dashboard admin
 */
Route::get('/admin', function () {
    return view('admin/index');
});