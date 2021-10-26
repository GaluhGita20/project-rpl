<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Auth;

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

/* Route::prefix('')->middleware('guest')->group(function(){ */
Route::prefix('')->group(function(){
    Route::get('/', [UserController::class,'view_home'])->name('home');
    Route::get('/login', [UserController::class,'view_login'])->name('login');

    Route::post('/add-new-account', [RegistrationController::class,'save_register'])->name('addDataUser');
    Route::post('/login-account', [LoginController::class,'login_account'])->name('loginUser');

    Route::get('/forum', [UserController::class,'view_forum'])->name('mainForum');
    Route::get('/landing-page', [UserController::class, 'landing-page'])->name('landingPage');
    Route::get('/list-topics', [UserController::class,'view_listTopic'])->name('listTopic');
    Route::get('/diskusi-topik', [UserController::class,'view_diskusiTopic'])->name('diskusiTopic');
});


Route::prefix('logged')->middleware('auth')->group(function() {
    Route::get('/forum', [UserController::class,'view_forum'])->name('mainForum');
});
