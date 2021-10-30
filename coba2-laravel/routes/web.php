<?php

use Illuminate\Support\Facades\Route;

/**
 * Pada routenya kita import dulu controllernya sesuai direktori di projecknya
 * Di sini AuthController berada di dir App\Http\Controllers
 * Maka bentuk importnya akan seperti ini App\Http\Controllers\AuthController
 */

use App\Http\Controllers\AuthController;


Route::get('/dexx', function () {
    return view('layout');
});

/**
 * Setelah di import contoh penggunaanya seperti ini 
 * Kita panggil nama kelasnya (class AuthController)
 * [AuthController::class, 'index'] artinya kita memanggil fungsi index didalam kelas AuthController
 */
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('submit-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('submit-registration', [AuthController::class, 'postRegistration'])->name('register.post');
Route::get('dashboard', [AuthController::class, 'dashboard']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
