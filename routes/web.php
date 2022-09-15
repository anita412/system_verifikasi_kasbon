<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KasbonController;
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

Route::group(['middleware' => ['auth']], function () {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('kasbons', KasbonController::class);
    Route::get('/list-kasbon', [UserController::class, 'list']);
    // Route::get('/entry-rencana', [UserController::class, 'rencana']);
    Route::get('/entry-rencana1', [UserController::class, 'rencana1']);
    Route::get('/entry-rencana2', [UserController::class, 'rencana2']);
    Route::post('/entry-rencana2', [UserController::class, 'rencana2']);
    Route::get('/entry-rencana3', [UserController::class, 'rencana3']);
    Route::post('/entry-rencana3', [UserController::class, 'rencana3']);
    Route::get('/entry-nonkasbon', [UserController::class, 'nonkasbon']);
    Route::get('/entry-bayarbeli', [UserController::class, 'bayarbeli']);
    Route::get('/entry-pertanggungan1', [UserController::class, 'pertanggungan1']);
    Route::get('/entry-pertanggungan2', [UserController::class, 'pertanggungan2']);
    Route::post('/entry-pertanggungan2', [UserController::class, 'pertanggungan2']);
    Route::get('/entry-sppd', [UserController::class, 'sppd']);
});
