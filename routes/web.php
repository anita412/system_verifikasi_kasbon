<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KasbonController;
use App\Http\Controllers\NonkasbonController;
use App\Http\Controllers\VerifikasiKasbonController;
use App\Http\Controllers\PertanggunganController;
use App\Http\Controllers\VerifikasiKasbonAtasanController;
use App\Http\Controllers\VerifikasiKasbonAtasan2Controller;
use App\Http\Controllers\VerifikasiPertanggunganController;
use App\Http\Controllers\VerifikasiAtasanPertanggunganController;
use App\Http\Controllers\VerifikasiAtasan2PertanggunganController;
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
    Route::resource('kasbon', KasbonController::class);
    Route::resource('nonkasbon', NonkasbonController::class);
    Route::resource('vkb', VerifikasiKasbonController::class);
    Route::resource('vkb-atasan', VerifikasiKasbonAtasanController::class);
    Route::resource('vkb-atasan-2', VerifikasiKasbonAtasan2Controller::class);
    Route::resource('vkp', VerifikasiPertanggunganController::class);
    Route::resource('vkp-atasan', VerifikasiAtasanPertanggunganController::class);
    Route::resource('vkp-atasan-2', VerifikasiAtasan2PertanggunganController::class);
    Route::resource('pertanggungan', PertanggunganController::class);
});

Route::controller(VerifikasiKasbonController::class)->group(function () {
    Route::get('/vkb/cek_kasbon/{kasbon}', [VerifikasiKasbonController::class, 'cek_kasbon'])->name('vkb.cek_kasbon');
    Route::get('/vkb/cek_kasbon_edit/{kasbon}', [VerifikasiKasbonController::class, 'cek_kasbon_edit'])->name('vkb.cek_kasbon_edit');
});

Route::controller(VerifikasiKasbonAtasan2Controller::class)->group(function () {
    Route::get('/vkb-atasan-2/cek_kasbon/{kasbon}', [VerifikasiKasbonAtasan2Controller::class, 'cek_kasbon'])->name('vkb-atasan-2.cek_kasbon');
    Route::get('/vkb-atasan-2/cek_kasbon_edit/{kasbon}', [VerifikasiKasbonAtasan2Controller::class, 'cek_kasbon_edit'])->name('vkb-atasan-2.cek_kasbon_edit');
});

Route::controller(VerifikasiPertanggunganController::class)->group(function () {
    Route::get('vkp/cek_pertanggungan/{pertanggungan}', [VerifikasiPertanggunganController::class, 'cek_pertanggungan'])->name('vkp.cek_pertanggungan');
    Route::get('vkp/cek_pertanggungan_edit/{pertanggungan}', [VerifikasiPertanggunganController::class, 'cek_pertanggungan_edit'])->name('vkp.cek_pertanggungan_edit');
});

Route::controller(VerifikasiKasbonAtasanController::class)->group(function () {
    Route::get('/vkb-atasan/cek_kasbon/{kasbon}', [VerifikasiKasbonAtasanController::class, 'cek_kasbon'])->name('vkb-atasan.cek_kasbon');
    Route::get('/vkb-atasan/cek_kasbon_edit/{kasbon}', [VerifikasiKasbonAtasanController::class, 'cek_kasbon_edit'])->name('vkb-atasan.cek_kasbon_edit');
});

Route::controller(VerifikasiAtasanPertanggunganController::class)->group(function () {
    Route::get('/vkp-atasan/cek_pertanggungan/{pertanggungan}', [VerifikasiAtasanPertanggunganController::class, 'cek_pertanggungan'])->name('vkp-atasan.cek_pertanggungan');
    Route::get('/vkp-atasan/cek_pertanggungan_edit/{pertanggungan}', [VerifikasiAtasanPertanggunganController::class, 'cek_pertanggungan_edit'])->name('vkp-atasan.cek_pertanggungan_edit');
});

Route::controller(VerifikasiAtasan2PertanggunganController::class)->group(function () {
    Route::get('/vkp-atasan-2/cek_pertanggungan/{pertanggungan}', [VerifikasiAtasan2PertanggunganController::class, 'cek_pertanggungan'])->name('vkp-atasan-2.cek_pertanggungan');
    Route::get('/vkp-atasan-2/cek_pertanggungan_edit/{pertanggungan}', [VerifikasiAtasan2PertanggunganController::class, 'cek_pertanggungan_edit'])->name('vkp-atasan-2.cek_pertanggungan_edit');
});

Route::controller(PertanggunganController::class)->group(function () {
    Route::get('/pertanggungan/insert/{kasbons}', [PertanggunganController::class, 'insert'])->name('pertanggungan.insert');
    Route::get('/pertanggungan/generatePDF/{pertanggungan}', [PertanggunganController::class, 'generatePDF'])->name('pertanggungan.generatePDF');
});
