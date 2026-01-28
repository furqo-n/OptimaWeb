<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Index1Controller;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\PengembanganAplikasiMobileController;
use App\Http\Controllers\PengembanganAplikasiWebController;
use App\Http\Controllers\TimPerangkatLunakKhususController;
use App\Http\Controllers\TeknologiController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\DetailProyekController;
use App\Http\Controllers\KarirController;
use App\Http\Controllers\KontakController;

Route::get('/', [Index1Controller::class, 'index']);
Route::get('/tentang-kami', [TentangController::class, 'index'])->name('tentangkami');
Route::get('/pengembangan-aplikasi-mobile', [PengembanganAplikasiMobileController::class, 'index'])->name('pengembanganaplikasimobile');
Route::get('/pengembangan-aplikasi-web', [PengembanganAplikasiWebController::class, 'index'])->name('pengembanganaplikasiweb');
Route::get('/tim-perangkat-lunak-khusus', [TimPerangkatLunakKhususController::class, 'index'])->name('timperangkatlunakkhusus');
Route::get('/teknologi', [TeknologiController::class, 'index'])->name('teknologi');
Route::get('/portofolio', [PortofolioController::class, 'index'])->name('portofolio');
Route::get('/detail-proyek', [DetailProyekController::class, 'index'])->name('detailproyek');
Route::get('/karir', [KarirController::class, 'index'])->name('karir');
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');