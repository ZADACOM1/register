<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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

Route::get('/dexx', function () {
    return view('layout');
});
Route::get('login', [Controller::class, 'index'])->name('login');
Route::post('submit-login', [Controller::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [Controller::class, 'registration'])->name('register');
Route::post('submit-registration', [Controller::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [Controller::class, 'dashboard']); 
Route::get('logout', [Controller::class, 'logout'])->name('logout');