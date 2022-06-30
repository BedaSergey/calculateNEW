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
// $arr = [
//     11 => [
//         12 => 2,27	13 => 2,05	14 => 1,87	1,72	1,58	1,4	1,22	1,04
//     ],
//     11,5 => [
//         12 => 2.34,	2.12,	1,92	1,77	1,65	1,44	1,27	1,1	0,87
//     ]
// ]
// Деление и умножение.
