<?php

use App\Http\Controllers\DaftarController;
use App\Http\Controllers\dashAdm;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\PuasaController;
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

Route::get('/', [DashboardController::class, 'index']);

Route::post('/daftar', [DaftarController::class, 'store']);

Route::get('/puasa', [PuasaController::class, 'index'])->middleware('auth');
Route::post('/puasa/delete/{puasa}', [PuasaController::class, 'destroy']);

Route::get('/login', [PenggunaController::class, 'login'])->middleware('guest');
Route::post('/login', [PenggunaController::class, 'log']);
Route::get('/signin', [PenggunaController::class, 'create'])->middleware('guest');
Route::post('/signin', [PenggunaController::class, 'store']);
Route::post('/logout', [PenggunaController::class, 'logout']);
// Route::get('/profile/edit/{id}', [PenggunaController::class, 'show']);
Route::get('/profile/edit/{id}', [PenggunaController::class, 'edit']);
Route::post('/profile/edit/{id}', [PenggunaController::class, 'update']);
Route::get('/profile/{id}', [PenggunaController::class, 'show'])->middleware(['auth']);

Route::get('/login/asadm', [dashAdm::class, 'index'])->middleware('guest');
Route::post('/login/asadm', [dashAdm::class, 'log']);
Route::post('/adm/acc/{id}', [dashAdm::class, 'update'])->middleware('isAdmin');
Route::post('/adm/reject/{id}', [dashAdm::class, 'update'])->middleware('isAdmin');
