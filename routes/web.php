<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrionKeluargaController;
use App\Http\Controllers\OrionWilayahController;
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

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::get('/orion-wilayah', [OrionWilayahController::class, 'index'])->name('orion-wilayah');
Route::get('/orion-keluarga', [OrionKeluargaController::class, 'index'])->name('orion-keluarga');

Route::get('/', function () {
    return view('welcome');
});
