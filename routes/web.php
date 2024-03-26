<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\kalkulatorcontroller;
use App\http\controllers\perpustakaanController;
use App\http\controllers\peminjamanController;
use App\http\controllers\kalkulator2controller;
use App\http\controllers\kalkulator4controller;
use App\Http\Controllers\Calculator1Controller;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kalkulator', [kalkulatorController::class, 'index'])->name('kalkulator');
Route::post('/hitung', [kalkulatorController::class, 'store'])->name('hitung');

Route::resource('perpustakaan', perpustakaanController::class);
Route::resource('pinjam', peminjamanController::class);

Route::get('/kalkulator2', [kalkulator2controller::class, 'index'])->name('kalkulator');
Route::post('/hitung1', [kalkulator2controller::class, 'store'])->name('hitung1');

Route::get('/kalkulator4', [kalkulator4controller::class, 'index'])->name('kalkulator');
Route::post('/hitung4', [kalkulator4controller::class, 'store'])->name('hitung4');

Route::get('/kalkulator5', [kalkulatorcontroller::class, 'manual'])->name('kalkulator5');
Route::post('/hitung', [kalkulatorcontroller::class, 'store'])->name('hitung');


Route::get('/', [CalculatorController::class, 'index']);
Route::post('/hitung', [CalculatorController::class, 'hitung1']);