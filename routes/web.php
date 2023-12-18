<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReservasiController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/reservasi', [ReservasiController::class, 'index']);
Route::get('/reservasi', [ReservasiController::class, 'create']);
Route::get('/reservasi', [ReservasiController::class, 'edit']);
Route::get('/reservasi', [ReservasiController::class, 'delete']);

Route::get('/review', [ReviewController::class, 'index']);
Route::get('/review', [ReviewController::class, 'create']);
Route::get('/review', [ReviewController::class, 'edit']);
Route::get('/review', [ReviewController::class, 'delete']);