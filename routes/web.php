<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarouselController;

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
    return view('pages.dashboard');
});

// Route::middleware(['auth'])->group(function () {
//     Route::get('home', function () {
//         return view('pages.dashboard');
//     })->name('home');
//     // User
//     Route::resource('user', UserController::class);
//     // Kategori
//     Route::resource('category', CategoryController::class);
//     // Produk
//     Route::resource('product', ProductController::class);
// });
