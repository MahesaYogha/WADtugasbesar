<?php

use App\Http\Controllers\AboutUsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\MenuController;
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

Route::get('dashboard', [CustomAuthController::class, 'dashboard'])->name('dashboard');
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('register', [CustomAuthController::class, 'registration'])->name('register');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');


Route::get('//', [HomeController::class, 'index']);

Route::get('/reservasi', [ReservasiController::class, 'index']);
Route::get('/reservasi', [ReservasiController::class, 'create']);
Route::get('/reservasi', [ReservasiController::class, 'edit']);
Route::get('/reservasi', [ReservasiController::class, 'delete']);

Route::get('/review', [ReviewController::class, 'index']);
Route::get('/review', [ReviewController::class, 'create']);
Route::get('/review', [ReviewController::class, 'edit']);

// Route::get('/menu', [MenuController::class, 'index']);
// Route::get('/menu', [MenuController::class, 'create']);
// Route::get('/menu', [MenuController::class, 'edit']);

//route admin
Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('menu', [MenuController::class, 'index'])->name('admin.menu');
    Route::get('create_menu', [MenuController::class, 'create'])->name('admin.create_menu');

    Route::post('menu_store', [MenuController::class, 'store'])->name('admin.menu_store');
    Route::get('delete_menu/{id}', [MenuController::class, 'destroy'])->name('admin.delete_menu');
    Route::get('update_menu/{id}', [MenuController::class, 'edit'])->name('admin.update_menu');

    Route::post('menu_update/{id}', [MenuController::class, 'update'])->name('admin.menu_update');


    Route::get('about_us', [AboutUsController::class, 'index'])->name('admin.about_us');
    Route::post('update_about_us/{id}', [AboutUsController::class, 'update'])->name('admin.update_about_us');
});


Route::get('/all_menu', [MenuController::class, 'all_menu'])->name('all_menu');
