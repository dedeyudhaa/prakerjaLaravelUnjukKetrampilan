<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\KategoriController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return redirect('beranda');
});

// Route::get('dashboard', function () {
//     return view('dashboard', [
//         'active' => 'dashboard',
//         'title' => 'Dashboard'
//     ]);
// })->middleware(['auth', 'admin','editor','user']);

Route::middleware(['auth', 'status'])->group(function () {
    Route::resource('kategori', KategoriController::class);
    Route::resource('post', PostController::class);
    Route::resource('produk', ProdukController::class);
    Route::resource('user', UserController::class);
});

Route::get('beranda', [BerandaController::class, 'index']);
Route::get('beranda/detail/{id}', [BerandaController::class, 'detail']);

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
