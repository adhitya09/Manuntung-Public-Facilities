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
})->name('taman_adipura');

Route::get('/tracking-taman-bekapai', function () {
    $title = 'Tracking Taman Bekapai';
    return view('tracking-taman-bekapai', compact('title'));
})->name('taman_bekapai');

Route::get('/tracking-taman-tiga-generasi', function () {
    $title = 'Tracking Taman Tiga Generasi';
    return view('tracking-taman-tigen', compact('title'));
})->name('taman_tigen');

Route::get('/tracking-itk-to-bc', function () {
    $title = 'Tracking ITK to BC';
    return view('tracking-itk-bc', compact('title'));
})->name('itk-to-bc');

// Route::get('/api/get-rute', [MapController::class, 'dijkstra']);


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

    // Admin
    Route::get('/admin', [DashController::class, 'index_Admin'])->name('admin.index');

    // Users
    Route::get('/users', [DashController::class, 'index_Users'])->name('user.index');
    Route::delete('/users/{user}', [DashController::class, 'destroy_Users'])->name('user.destroy');

    // Fasilitas
    Route::get('fasilitas', [FasilitasController::class, 'index'])->name('fasilitas.index');
    Route::get('fasilitas/create', [FasilitasController::class, 'create'])->name('fasilitas.create');
    Route::post('fasilitas', [FasilitasController::class, 'store'])->name('fasilitas.store');
    Route::get('fasilitas/{id}/edit', [FasilitasController::class, 'edit'])->name('fasilitas.edit');
    Route::put('fasilitas/{id}', [FasilitasController::class, 'update'])->name('fasilitas.update');
    Route::delete('fasilitas/{id}', [FasilitasController::class, 'destroy'])->name('fasilitas.destroy');
});

Route::middleware('admin')->group(function () {
    Route::get('dashboard-admin', [DashController::class, 'admin'])->name('admin');
    // Route::resource('fasilitas', FasilitasController::class);
});
Route::middleware('user')->group(function () {
    Route::get('dashboard', [DashController::class, 'index_user'])->name('user');
});

























// Route::get('fasilitas', [FasilitasController::class, 'index'])->name('fasilitas.index');

// // Halaman Tambah Fasilitas
// Route::get('fasilitas/create', [FasilitasController::class, 'create'])->name('fasilitas.create');

// // Proses Simpan Data Baru
// Route::post('fasilitas', [FasilitasController::class, 'store'])->name('fasilitas.store');

// // Halaman Edit Data Fasilitas
// Route::get('fasilitas/{id}/edit', [FasilitasController::class, 'edit'])->name('fasilitas.edit');

// // Proses Update Data Fasilitas
// Route::put('fasilitas/{id}', [FasilitasController::class, 'update'])->name('fasilitas.update');

// // Proses Hapus Data Fasilitas
// Route::delete('fasilitas/{id}', [FasilitasController::class, 'destroy'])->name('fasilitas.destroy');
