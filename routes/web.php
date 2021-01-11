<?php

use App\Http\Controllers\UserController;
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


Route::get('/', [UserController::class, 'home'])->name('usuarios.home');
Route::post('/usuarios/search', [UserController::class, 'search'])->name('usuarios.search');
Route::resource('usuarios', '\App\Http\Controllers\UserController');
Route::resource('registros', '\App\Http\Controllers\RecordController');
