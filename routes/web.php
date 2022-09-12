<?php

use App\Http\Controllers\DaftarController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PenggunaController;
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

Route::get('/', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/daftar', [DaftarController::class, 'index']);

Route::get('/login', [PenggunaController::class, 'login'])->middleware('guest');
Route::post('/login', [PenggunaController::class, 'log']);
Route::get('/signin', [PenggunaController::class, 'create']);
Route::post('/signin', [PenggunaController::class, 'store']);
Route::post('/logout', [PenggunaController::class, 'logout']);
Route::get('/profile/edit/{id}', [PenggunaController::class, 'edit']);
Route::post('/profile/edit/{id}', [PenggunaController::class, 'update']);
Route::get('/profile/{id}', [PenggunaController::class, 'show']);
