<?php

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

use App\Http\Controllers\Auth\LoginController;
Route::get('/', [LoginController::class, 'index'])->name('main');
Route::post('/login', [LoginController::class, 'login'])->name('login');

use App\Http\Controllers\Calc\FirstCalculatorController;
Route::get('/firstcalculator', [FirstCalculatorController::class, 'index'])->middleware('auth')->name('firstcalculator');
Route::post('/firstcalculator/reset', [FirstCalculatorController::class, 'reset'])->middleware('auth')->name('firstcalculator.reset');

use App\Http\Controllers\Calc\SecondCalculatorController;
Route::get('/secondcalculator', [SecondCalculatorController::class, 'index'])->middleware('auth')->name('secondcalculator');
Route::post('/secondcalculator/reset', [SecondCalculatorController::class, 'reset'])->middleware('auth')->name('secondcalculator.reset');
