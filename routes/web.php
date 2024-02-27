<?php

use App\Http\Controllers\AnggotaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BukberController;
use App\Http\Controllers\DonasiController;
use App\Http\Controllers\ProkerController;
use App\Http\Controllers\AspirasiController;
use App\Http\Controllers\RecrutmentController;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\DokumentasiController;
use App\Http\Controllers\HimatifMudaController;
use App\Http\Controllers\KritikSaranController;
use App\Http\Controllers\PemesananPDHController;
use App\Http\Controllers\SilaturahmiMhsController;
use App\Http\Controllers\PemberdayaanWanitaController;

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




Route::get('/', [LoginController::class, 'show']);
Route::get('/anggota', [AnggotaController::class, 'show']);
Route::get('/departement', [DepartementController::class, 'show']);
Route::get('/proker', [ProkerController::class, 'show']);
Route::get('/dokumentasi', [DokumentasiController::class, 'show']);
Route::get('/aspirasi', [AspirasiController::class, 'show']);
Route::get('/pemberdayaan_wanita', [PemberdayaanWanitaController::class, 'show']);
Route::get('/pemesanan_pdh', [PemesananPDHController::class, 'show']);
Route::get('/himatif_muda', [HimatifMudaController::class, 'show']);
Route::get('/silaturahmi_mahasiswa', [SilaturahmiMhsController::class, 'show']);
Route::get('/donasi', [DonasiController::class, 'show']);
Route::get('/bukber', [BukberController::class, 'show']);
Route::get('/kritik_saran', [KritikSaranController::class, 'show']);
Route::get('/recrutment', [RecrutmentController::class, 'show']);