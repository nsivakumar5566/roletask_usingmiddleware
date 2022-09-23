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

Route::get('/', [UserController::class,'index'])->name('postindex');
Route::post('login_page', [UserController::class,'login'])->name('signin');
Route::get('dashboard',[UserController::class,'dash']);
Route::get('logout',[UserController::class,'logout'])->name('logout');

Route::group(['middleware' => ['seller']], function () {
    Route::get('seller',[UserController::class,'seller'])->name('seller');
});

Route::group(['middleware' => ['admin']], function () {
    Route::get('admin',[UserController::class,'admin'])->name('admin');
});