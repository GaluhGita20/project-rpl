<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::prefix('')->group(function(){
    Route::get('/', [UserController::class,'view_home'])->name('home');
    Route::get('/login', [UserController::class,'view_login'])->name('login');
    Route::get('/forum', [UserController::class,'view_forum'])->name('mainForum');
    Route::get('/list-topics', [UserController::class,'view_listTopic'])->name('listTopic');
    Route::get('/diskusi-topik', [UserController::class,'view_diskusiTopic'])->name('diskusiTopic');
});