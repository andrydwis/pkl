<?php

use App\Http\Controllers\Auth\UpdateProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SosialisasiController;
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
Route::get('pengaduan', [PengaduanController::class, 'create'])->name('pengaduan.create');
Route::post('pengaduan', [PengaduanController::class, 'store'])->name('pengaduan.store');

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
});

require __DIR__ . '/auth.php';

//
