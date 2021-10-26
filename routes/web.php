<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
/* use Illuminate\Support\Facades\Auth; */

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

Route::prefix('')->middleware('guest')->group(function(){
    Route::get('/', [UserController::class,'view_home'])->name('home');
    Route::get('/login', [UserController::class,'view_login'])->name('login');
    Route::post('/add-new-account', [UserController::class,'save_register'])->name('add-data-user');
    Route::post('/login-account', [UserController::class,'login_account'])->name('login-user');
});

Route::prefix('logged')->middleware('auth')->group(function() {
    Route::get('/landing-page', [UserController::class, 'landing-page'])->name('landing_page');
});
