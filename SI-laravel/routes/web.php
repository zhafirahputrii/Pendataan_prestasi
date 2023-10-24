<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrestasiController;
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
    return view('index');
});

Route::get('prestasi', [PrestasiController::class , 'index'])->name('prestasi');
        Route::get('add_prestasi', [PrestasiController::class , 'admin_add_prestasi']);
        Route::post('prestasi', [PrestasiController::class , 'admin_create_prestasi']);
        Route::get('/admin/{id}/edit', [PrestasiController::class , 'edit']);
        Route::post('/admin/{id}', [PrestasiController::class , 'update']);
        Route::get('/admin/{id}', [PrestasiController::class, 'destroy']);

//Route untuk menampilkan halaman berita
Route::get('/berita', [BeritaController::class, 'index']);