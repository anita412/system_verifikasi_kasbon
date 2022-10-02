<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KasbonController;
use App\Http\Controllers\VerifikatorController;
use App\Http\Controllers\PertanggunganController;
use App\Http\Controllers\NonKasbonController;
use App\Http\Controllers\VerifikasiAtasanController;
use App\Http\Controllers\PDFController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

Route::group(['middleware' => ['auth']], function () {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('kasbons', KasbonController::class);
    Route::resource('verifikator', VerifikatorController::class);
    Route::resource('verifikasi-atasan', VerifikasiAtasanController::class);
    Route::resource('pertanggungan', PertanggunganController::class);
    Route::resource('nonkasbon', NonkasbonController::class);
});

Route::controller(VerifikatorController::class)->group(function () {
    Route::get('/kelengkapan/{kelengkapan}', [VerifikatorController::class, 'kelengkapan'])->name('kelengkapan');
    Route::get('/kelengkapan_edit/{kasbon}', [VerifikatorController::class, 'kelengkapan_edit'])->name('kelengkapan_edit');
});

Route::controller(VerifikasiAtasanController::class)->group(function () {
    Route::get('cek_kelengkapan/{kelengkapan}', [VerifikasiAtasanController::class, 'cek_kelengkapan'])->name('cek_kelengkapan');
    Route::get('keterangan/{kelengkapan}', [VerifikasiAtasanController::class, 'keterangan'])->name('keterangan');
});

Route::get('/pertanggungan/insert/{kasbons}', [PertanggunganController::class, 'insert'])->name('pertanggungan.insert');
Route::post('/pertanggungan/storee', [PertanggunganController::class, 'storee'])->name('pertanggungan.storee');

Route::get('/kasbons/generatePDF/{kasbons}', [KasbonController::class, 'generatePDF'])->name('kasbons.generatePDF');

Route::post('/info/{kasbon}', [VerifikatorController::class, 'submitData'])->name('verifikator.submitData');
