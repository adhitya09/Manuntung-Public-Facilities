<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MapController;
use App\Http\Controllers\DashController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FasilitasController;

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
    $title = 'Selamat Datang - Manuntung Public Facilities';
    return view('index', compact('title'));
})->name('index');
Route::get('about', function () {
    $title = 'About - Manuntung Public Facilities';
    return view('about', compact('title'));
});
Route::get('tracking', function () {
    $title = 'Tracking - Manuntung Public Facilities';
    return view('tracking', compact('title'));
});
// Route::get('tracking-taman-adipura', [TrackingController::class, 'showRoute'])->name('tracking_taman_adipura');

// Route::get('/tracking-taman-adipura', [RouteController::class, 'showTrackingPage']);
// Route::post('/calculate-route', [RouteController::class, 'calculateRoute']);
Route::get('/get-map-data', [MapController::class, 'getMapData']);
Route::get('/tracking-taman-adipura', function () {
    $title = 'Tracking Taman Adipura';
    return view('tracking-taman-adipura', compact('title'));
});
Route::get('/api/get-rute', [MapController::class, 'dijkstra']);


Route::get('category', function () {
    $title = 'Category - Manuntung Public Facilities';
    return view('kategori', compact('title'));
});
Route::get('contact', function () {
    $title = 'Contact - Manuntung Public Facilities';
    return view('contact', compact('title'));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');

Route::middleware('superadmin')->prefix('dashboard-superadmin')->group(function () {
    Route::get('/', [DashController::class, 'index_superadmin'])->name('superadmin');
    // Route::resource('fasilitas', FasilitasController::class);
    // Route::get('/fasilitas', FasilitasController::class);
    // Halaman Index (List Semua Data Fasilitas)

});

Route::middleware('admin')->group(function () {
    Route::get('dashboard-admin', [DashController::class, 'index_admin'])->name('admin');
    // Route::resource('fasilitas', FasilitasController::class);
});
Route::middleware('user')->group(function () {
    Route::get('dashboard', [DashController::class, 'index_user'])->name('user');
});

Route::get('fasilitas', [FasilitasController::class, 'index'])->name('fasilitas.index');

// Halaman Tambah Fasilitas
Route::get('fasilitas/create', [FasilitasController::class, 'create'])->name('fasilitas.create');

// Proses Simpan Data Baru
Route::post('fasilitas', [FasilitasController::class, 'store'])->name('fasilitas.store');

// Halaman Edit Data Fasilitas
Route::get('fasilitas/{id}/edit', [FasilitasController::class, 'edit'])->name('fasilitas.edit');

// Proses Update Data Fasilitas
Route::put('fasilitas/{id}', [FasilitasController::class, 'update'])->name('fasilitas.update');

// Proses Hapus Data Fasilitas
Route::delete('fasilitas/{id}', [FasilitasController::class, 'destroy'])->name('fasilitas.destroy');
