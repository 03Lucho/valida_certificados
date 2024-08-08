<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\extract_controller;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [extract_controller::class, 'verificarCodVerifica'])->name('verifica');
Route::get('/valida', [App\Http\Controllers\extract_controller::class, 'verificarCodVerifica'])->name('valida');


Route::get('/detalle', [App\Http\Controllers\extract_controller::class, 'redirect'])->name('detalle');

