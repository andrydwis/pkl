<?php

use App\Http\Controllers\Auth\UpdateProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\RehabilitasiPribadiController;
use App\Http\Controllers\RehabilitasiInstansiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SosialisasiController;
use App\Http\Controllers\TesUrinePribadiController;
use App\Http\Controllers\TesUrineInstansiController;
use App\Models\RehabilitasiInstansi;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('init');
Route::get('sosialisasi', [SosialisasiController::class, 'create'])->name('sosialisasi.create');
Route::post('sosialisasi', [SosialisasiController::class, 'store'])->name('sosialisasi.store');
Route::get('pengaduan', [PengaduanController::class, 'create'])->name('pengaduan.create');
Route::post('pengaduan', [PengaduanController::class, 'store'])->name('pengaduan.store');
Route::get('permohonan-tes-urine-pribadi', [TesUrinePribadiController::class, 'create'])->name('permohonan-tes-urine-pribadi.create');
Route::post('permohonan-tes-urine-pribadi', [TesUrinePribadiController::class, 'store'])->name('permohonan-tes-urine-pribadi.store');
Route::get('permohonan-tes-urine-instansi', [TesUrineInstansiController::class, 'create'])->name('permohonan-tes-urine-instansi.create');
Route::post('permohonan-tes-urine-instansi', [TesUrineInstansiController::class, 'store'])->name('permohonan-tes-urine-instansi.store');
Route::get('rehabilitasi-pribadi', [RehabilitasiPribadiController::class, 'create'])->name('rehabilitasi-pribadi.create');
Route::post('rehabilitasi-pribadi', [RehabilitasiPribadiController::class, 'store'])->name('rehabilitasi-pribadi.store');
Route::get('rehabilitasi-instansi', [RehabilitasiInstansiController::class, 'create'])->name('rehabilitasi-instansi.create');
Route::post('rehabilitasi-instansi', [RehabilitasiInstansiController::class, 'store'])->name('rehabilitasi-instansi.store');

Route::middleware(['auth'])->group(function () {
    //dashboard
    Route::get('dashboard', DashboardController::class)->name('dashboard');

    //profile
    Route::view('profile', 'init.profile')->name('profile');
    Route::view('edit-profile', 'init.edit-profile')->name('edit-profile.edit');
    Route::patch('edit-profile', UpdateProfileController::class)->name('edit-profile.update');

    //settings
    Route::view('setting', 'init.setting')->name('setting');

    Route::middleware(['admin'])->group(function () {
        //admin
        Route::get('users', [UserController::class, 'index'])->name('users.index');
        Route::get('users/{user:name}', [UserController::class, 'edit'])->name('users.edit');
        Route::patch('users/{user:name}', [UserController::class, 'update'])->name('users.update');
        Route::get('users/{user:name}/reset', [UserController::class, 'resetView'])->name('users.reset-view');
        Route::put('users/{user:name}/reset', [UserController::class, 'reset'])->name('users.reset');
        Route::delete('users/{user:name}', [UserController::class, 'destroy'])->name('users.destroy');
    });

    Route::middleware(['tu'])->group(function () {
        //tu
        Route::get('data-pengaduan', [PengaduanController::class, 'index'])->name('data-pengaduan.index');
        Route::get('data-pengaduan/{pengaduan}', [PengaduanController::class, 'show'])->name('data-pengaduan.show');
        Route::get('data-pengaduan/{pengaduan}/edit', [PengaduanController::class, 'edit'])->name('data-pengaduan.edit');
        Route::patch('data-pengaduan/{pengaduan}', [PengaduanController::class, 'update'])->name('data-pengaduan.update');
        Route::delete('data-pengaduan/{pengaduan}', [PengaduanController::class, 'destroy'])->name('data-pengaduan.destroy');
        Route::get('download', [PengaduanController::class, 'export']);
    });
});

require __DIR__ . '/auth.php';

//
