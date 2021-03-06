<?php

use App\Http\Controllers\Auth\UpdateProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DokterPemeriksaUserController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KepalaBnnUserController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\PertanyaanController;
use App\Http\Controllers\PetugasPemeriksaUserController;
use App\Http\Controllers\RehabilitasiPribadiController;
use App\Http\Controllers\RehabilitasiInstansiController;
use App\Http\Controllers\SkhpnController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SosialisasiController;
use App\Http\Controllers\SurveyController;
use App\Http\Controllers\TesUrineInstansiController;
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
Route::get('skhpn', [SkhpnController::class, 'create'])->name('skhpn.create');
Route::post('skhpn', [SkhpnController::class, 'store'])->name('skhpn.store');
Route::get('permohonan-tes-urine-instansi', [TesUrineInstansiController::class, 'create'])->name('permohonan-tes-urine-instansi.create');
Route::post('permohonan-tes-urine-instansi', [TesUrineInstansiController::class, 'store'])->name('permohonan-tes-urine-instansi.store');
Route::get('rehabilitasi-pribadi', [RehabilitasiPribadiController::class, 'create'])->name('rehabilitasi-pribadi.create');
Route::post('rehabilitasi-pribadi', [RehabilitasiPribadiController::class, 'store'])->name('rehabilitasi-pribadi.store');
Route::get('rehabilitasi-instansi', [RehabilitasiInstansiController::class, 'create'])->name('rehabilitasi-instansi.create');
Route::post('rehabilitasi-instansi', [RehabilitasiInstansiController::class, 'store'])->name('rehabilitasi-instansi.store');

Route::get('survey', [SurveyController::class, 'index'])->name('survey.index');
Route::get('survey/{token}', [SurveyController::class, 'answerView'])->name('survey.answer-view');
Route::post('survey/{token}', [SurveyController::class, 'answer'])->name('survey.answer');
Route::post('survey', [SurveyController::class, 'verify'])->name('survey.verify');

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
        Route::get('users', [UserController::class, 'index'])->name('users.index');
        Route::get('users/{user:name}', [UserController::class, 'edit'])->name('users.edit');
        Route::patch('users/{user:name}', [UserController::class, 'update'])->name('users.update');
        Route::get('users/{user:name}/reset', [UserController::class, 'resetView'])->name('users.reset-view');
        Route::put('users/{user:name}/reset', [UserController::class, 'reset'])->name('users.reset');
        Route::delete('users/{user:name}', [UserController::class, 'destroy'])->name('users.destroy');

        Route::get('galeri', [GalleryController::class, 'index'])->name('galeri.index');
        Route::get('galeri/create', [GalleryController::class, 'create'])->name('galeri.create');
        Route::post('galeri/create', [GalleryController::class, 'store'])->name('galeri.store');
        Route::get('galeri/{gallery}', [GalleryController::class, 'show'])->name('galeri.show');
        Route::get('galeri/{gallery}/edit', [GalleryController::class, 'edit'])->name('galeri.edit');
        Route::patch('galeri/{gallery}', [GalleryController::class, 'update'])->name('galeri.update');
        Route::delete('galeri/{gallery}', [GalleryController::class, 'destroy'])->name('galeri.destroy');
    });

    Route::middleware(['tu'])->group(function () {
        Route::get('data-pengaduan', [PengaduanController::class, 'index'])->name('data-pengaduan.index');
        Route::get('data-pengaduan/{pengaduan}', [PengaduanController::class, 'show'])->name('data-pengaduan.show');
        Route::get('data-pengaduan/{pengaduan}/edit', [PengaduanController::class, 'edit'])->name('data-pengaduan.edit');
        Route::patch('data-pengaduan/{pengaduan}', [PengaduanController::class, 'update'])->name('data-pengaduan.update');
        Route::delete('data-pengaduan/{pengaduan}', [PengaduanController::class, 'destroy'])->name('data-pengaduan.destroy');
        Route::post('data-pengaduan/export', [PengaduanController::class, 'export'])->name('data-pengaduan.export');
        Route::get('data-pengaduan/{pengaduan}/process', [PengaduanController::class, 'processView'])->name('data-pengaduan.process-view');
        Route::post('data-pengaduan/{pengaduan}/process', [PengaduanController::class, 'process'])->name('data-pengaduan.process');

        Route::get('pertanyaan-survey', [PertanyaanController::class, 'index'])->name('pertanyaan-survey.index');
        Route::get('pertanyaan-survey/create', [PertanyaanController::class, 'create'])->name('pertanyaan-survey.create');
        Route::post('pertanyaan-survey/create', [PertanyaanController::class, 'store'])->name('pertanyaan-survey.store');
        Route::get('pertanyaan-survey/{pertanyaan}', [PertanyaanController::class, 'edit'])->name('pertanyaan-survey.edit');
        Route::patch('pertanyaan-survey/{pertanyaan}', [PertanyaanController::class, 'update'])->name('pertanyaan-survey.update');
        Route::delete('pertanyaan-survey/{pertanyaan}', [PertanyaanController::class, 'destroy'])->name('pertanyaan-survey.destroy');

        Route::get('survey-statistic', [SurveyController::class, 'statistic'])->name('survey.statistic');
        Route::get('survey-statistic/export', [SurveyController::class, 'export'])->name('survey.statistic-export');
        Route::post('survey-statistic-specific', [SurveyController::class, 'statisticSpecific'])->name('survey.statistic-specific');
        Route::get('survey-statistic-specific/{tanggal_dari}/{tanggal_sampai}', [SurveyController::class, 'exportSpecific'])->name('survey.statistic-specific-export');
    });

    Route::middleware(['p2m'])->group(function () {
        Route::get('data-sosialisasi', [SosialisasiController::class, 'index'])->name('data-sosialisasi.index');
        Route::get('data-sosialisasi/{sosialisasi}', [SosialisasiController::class, 'show'])->name('data-sosialisasi.show');
        Route::get('data-sosialisasi/{sosialisasi}/edit', [SosialisasiController::class, 'edit'])->name('data-sosialisasi.edit');
        Route::patch('data-sosialisasi/{sosialisasi}', [SosialisasiController::class, 'update'])->name('data-sosialisasi.update');
        Route::delete('data-sosialisasi/{sosialisasi}', [SosialisasiController::class, 'destroy'])->name('data-sosialisasi.destroy');
        Route::post('data-sosialisasi/export', [SosialisasiController::class, 'export'])->name('data-sosialisasi.export');
        Route::get('data-sosialisasi/{sosialisasi}/process', [SosialisasiController::class, 'processView'])->name('data-sosialisasi.process-view');
        Route::post('data-sosialisasi/{sosialisasi}/process', [SosialisasiController::class, 'process'])->name('data-sosialisasi.process');

        Route::get('data-permohonan-tes-urine-instansi', [TesUrineInstansiController::class, 'index'])->name('data-permohonan-tes-urine-instansi.index');
        Route::get('data-permohonan-tes-urine-instansi/{tesUrineInstansi}', [TesUrineInstansiController::class, 'show'])->name('data-permohonan-tes-urine-instansi.show');
        Route::get('data-permohonan-tes-urine-instansi/{tesUrineInstansi}/edit', [TesUrineInstansiController::class, 'edit'])->name('data-permohonan-tes-urine-instansi.edit');
        Route::patch('data-permohonan-tes-urine-instansi/{tesUrineInstansi}', [TesUrineInstansiController::class, 'update'])->name('data-permohonan-tes-urine-instansi.update');
        Route::delete('data-permohonan-tes-urine-instansi/{tesUrineInstansi}', [TesUrineInstansiController::class, 'destroy'])->name('data-permohonan-tes-urine-instansi.destroy');
        Route::post('data-permohonan-tes-urine-instansi/export', [TesUrineInstansiController::class, 'export'])->name('data-permohonan-tes-urine-instansi.export');
    });

    Route::middleware(['rehabilitasi'])->group(function () {
        Route::get('data-rehabilitasi-pribadi', [RehabilitasiPribadiController::class, 'index'])->name('data-rehabilitasi-pribadi.index');
        Route::get('data-rehabilitasi-pribadi/{rehabilitasiPribadi}', [RehabilitasiPribadiController::class, 'show'])->name('data-rehabilitasi-pribadi.show');
        Route::get('data-rehabilitasi-pribadi/{rehabilitasiPribadi}/edit', [RehabilitasiPribadiController::class, 'edit'])->name('data-rehabilitasi-pribadi.edit');
        Route::patch('data-rehabilitasi-pribadi/{rehabilitasiPribadi}', [RehabilitasiPribadiController::class, 'update'])->name('data-rehabilitasi-pribadi.update');
        Route::delete('data-rehabilitasi-pribadi/{rehabilitasiPribadi}', [RehabilitasiPribadiController::class, 'destroy'])->name('data-rehabilitasi-pribadi.destroy');
        Route::post('data-rehabilitasi-pribadi/export', [RehabilitasiPribadiController::class, 'export'])->name('data-rehabilitasi-pribadi.export');

        Route::get('data-rehabilitasi-instansi', [RehabilitasiInstansiController::class, 'index'])->name('data-rehabilitasi-instansi.index');
        Route::get('data-rehabilitasi-instansi/{rehabilitasiInstansi}', [RehabilitasiInstansiController::class, 'show'])->name('data-rehabilitasi-instansi.show');
        Route::get('data-rehabilitasi-instansi/{rehabilitasiInstansi}/edit', [RehabilitasiInstansiController::class, 'edit'])->name('data-rehabilitasi-instansi.edit');
        Route::patch('data-rehabilitasi-instansi/{rehabilitasiInstansi}', [RehabilitasiInstansiController::class, 'update'])->name('data-rehabilitasi-instansi.update');
        Route::delete('data-rehabilitasi-instansi/{rehabilitasiInstansi}', [RehabilitasiInstansiController::class, 'destroy'])->name('data-rehabilitasi-instansi.destroy');
        Route::post('data-rehabilitasi-instansi/export', [RehabilitasiInstansiController::class, 'export'])->name('data-rehabilitasi-instansi.export');

        Route::get('data-skhpn', [SkhpnController::class, 'index'])->name('data-skhpn.index');
        Route::get('data-skhpn/{skhpn}', [SkhpnController::class, 'show'])->name('data-skhpn.show');
        Route::get('data-skhpn/{skhpn}/edit', [SkhpnController::class, 'edit'])->name('data-skhpn.edit');
        Route::patch('data-skhpn/{skhpn}', [SkhpnController::class, 'update'])->name('data-skhpn.update');
        Route::delete('data-skhpn/{skhpn}', [SkhpnController::class, 'destroy'])->name('data-skhpn.destroy');
        Route::post('data-skhpn/export', [SkhpnController::class, 'export'])->name('data-skhpn.export');
        Route::get('data-skhpn/{skhpn}/process', [SkhpnController::class, 'processView'])->name('data-skhpn.process-view');
        Route::post('data-skhpn/{skhpn}/process', [SkhpnController::class, 'process'])->name('data-skhpn.process');

        Route::get('data-kepala-bnn', [KepalaBnnUserController::class, 'index'])->name('data-kepala-bnn.index');
        Route::get('data-kepala-bnn/create', [KepalaBnnUserController::class, 'create'])->name('data-kepala-bnn.create');
        Route::post('data-kepala-bnn/create', [KepalaBnnUserController::class, 'store'])->name('data-kepala-bnn.store');
        Route::get('data-kepala-bnn/{kepalaBnnUser}/edit', [KepalaBnnUserController::class, 'edit'])->name('data-kepala-bnn.edit');
        Route::patch('data-kepala-bnn/{kepalaBnnUser}/edit', [KepalaBnnUserController::class, 'update'])->name('data-kepala-bnn.update');
        Route::delete('data-kepala-bnn/{kepalaBnnUser}', [KepalaBnnUserController::class, 'destroy'])->name('data-kepala-bnn.destroy');

        Route::get('data-dokter-pemeriksa', [DokterPemeriksaUserController::class, 'index'])->name('data-dokter-pemeriksa.index');
        Route::get('data-dokter-pemeriksa/create', [DokterPemeriksaUserController::class, 'create'])->name('data-dokter-pemeriksa.create');
        Route::post('data-dokter-pemeriksa/create', [DokterPemeriksaUserController::class, 'store'])->name('data-dokter-pemeriksa.store');
        Route::get('data-dokter-pemeriksa/{dokterPemeriksaUser}/edit', [DokterPemeriksaUserController::class, 'edit'])->name('data-dokter-pemeriksa.edit');
        Route::patch('data-dokter-pemeriksa/{dokterPemeriksaUser}/edit', [DokterPemeriksaUserController::class, 'update'])->name('data-dokter-pemeriksa.update');
        Route::delete('data-dokter-pemeriksa/{dokterPemeriksaUser}', [DokterPemeriksaUserController::class, 'destroy'])->name('data-dokter-pemeriksa.destroy');

        Route::get('data-petugas-pemeriksa', [PetugasPemeriksaUserController::class, 'index'])->name('data-petugas-pemeriksa.index');
        Route::get('data-petugas-pemeriksa/create', [PetugasPemeriksaUserController::class, 'create'])->name('data-petugas-pemeriksa.create');
        Route::post('data-petugas-pemeriksa/create', [PetugasPemeriksaUserController::class, 'store'])->name('data-petugas-pemeriksa.store');
        Route::get('data-petugas-pemeriksa/{petugasPemeriksaUser}/edit', [PetugasPemeriksaUserController::class, 'edit'])->name('data-petugas-pemeriksa.edit');
        Route::patch('data-petugas-pemeriksa/{petugasPemeriksaUser}/edit', [PetugasPemeriksaUserController::class, 'update'])->name('data-petugas-pemeriksa.update');
        Route::delete('data-petugas-pemeriksa/{petugasPemeriksaUser}', [PetugasPemeriksaUserController::class, 'destroy'])->name('data-petugas-pemeriksa.destroy');
    });
});

require __DIR__ . '/auth.php';

//
