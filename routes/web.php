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

use App\Http\Controllers\CalculatorController;
Route::get('/calculator', [CalculatorController::class, 'index'])->middleware('auth')->name('calculator');
Route::post('/calculator/reset', [CalculatorController::class, 'reset'])->middleware('auth')->name('calculator.reset');
