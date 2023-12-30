<?php

use App\Http\Controllers\AboutUsController;
<<<<<<< HEAD
=======
use App\Http\Controllers\MasukanController;
>>>>>>> 0dbe8e5530c92cc161fec6581997c5cf6c62fd53
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\MenuController;
<<<<<<< HEAD
=======
<<<<<<< HEAD
use App\Http\Controllers\OurServiceController;

=======
>>>>>>> 0e3ab3444c6f62e5555d7c52dea31dc4936ace32
>>>>>>> 0dbe8e5530c92cc161fec6581997c5cf6c62fd53
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

Route::middleware(['auth'])->group(function () {
    Route::get('/reservasi/create', [ReservasiController::class, 'create']);
    Route::post('/reservasi/create', [ReservasiController::class, 'store']);
    Route::get('/reservasi', [ReservasiController::class, 'index']);
    Route::get('/reservasi/{id}', [ReservasiController::class, 'show']);
    Route::get('/reservasi/{id}/edit', [ReservasiController::class, 'edit']);
    Route::put('/reservasi/{id}/edit', [ReservasiController::class, 'update']);
    Route::delete('/reservasi/{id}', [ReservasiController::class, 'destroy']);
});


Route::get('/home', [HomeController::class, 'index']);

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
<<<<<<< HEAD
=======


    Route::get('masukan', [MasukanController::class, 'index'])->name('admin.masukan');
    Route::get('edit_masukan/{id}', [MasukanController::class, 'edit'])->name('admin.edit_masukan');
    Route::post('masukan_update/{id}', [MasukanController::class, 'update'])->name('admin.masukan_update');
    Route::get('delete_masukan/{id}', [MasukanController::class, 'destroy'])->name('admin.delete_masukan');
    Route::post('store_masukan', [MasukanController::class, 'store'])->name('admin.store_masukan');
<<<<<<< HEAD


    Route::get('our_service', [OurServiceController::class, 'index'])->name('admin.our_service');
    Route::get('create_service', [OurServiceController::class, 'create'])->name('admin.create_service');

    Route::post('service_store', [OurServiceController::class, 'store'])->name('admin.service_store');
    Route::get('delete_service/{id}', [OurServiceController::class, 'destroy'])->name('admin.delete_service');
    Route::get('update_service/{id}', [OurServiceController::class, 'edit'])->name('admin.update_service');

    Route::post('service_update/{id}', [OurServiceController::class, 'update'])->name('admin.service_update');
=======
>>>>>>> 0e3ab3444c6f62e5555d7c52dea31dc4936ace32
>>>>>>> 0dbe8e5530c92cc161fec6581997c5cf6c62fd53
});


Route::get('/all_menu', [MenuController::class, 'all_menu'])->name('all_menu');
