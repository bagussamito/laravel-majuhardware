<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;

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

Route::get('/', [ImageController::class, 'index'])->name('pages.dashboard');
Route::get('/admin', [ImageController::class, 'admin'])->name('pages.admin');
Route::get('admin/tambah', [ImageController::class, 'create'])->name('tambah-data');
Route::delete('admin/hapus/{image}', [ImageController::class, 'destroy'])->name('hapus-data');
Route::post('/tambah/submit', [ImageController::class, 'store'])->name('submit-data');





