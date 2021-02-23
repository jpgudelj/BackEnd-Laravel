<?php

use Illuminate\Support\Facades\Route;

header ('Acces-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Content-Range, Content-Disposition, Content-Description');

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('posiciones', [App\Http\Controllers\PosicionesController::class, 'posiciones'])->name('posiciones');
Route::get('posicionesLocal', [App\Http\Controllers\PosicionesController::class, 'posicionesLocal'])->name('posicionesLocal');