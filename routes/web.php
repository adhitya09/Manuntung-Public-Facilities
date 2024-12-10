<?php

use App\Http\Controllers\LoginController;
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


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
// Route untuk admin
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', function () {
        if (auth()->user()->role !== 'admin') {
            return redirect('/dashboard')->with('error', 'Akses tidak diizinkan.');
        }
        return view('admin.dashboard');
    });
});

// Route untuk user biasa
Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
});

;

Route::get('/tracking', function () {
    return view('tracking');
});

Route::get('/kategori', function () {
    return view('kategori');
});
