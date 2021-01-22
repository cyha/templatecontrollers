<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ButtonsController;
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\BlankController;
use App\Http\Controllers\CardsController;
use App\Http\Controllers\ChartsController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TablesController;
use App\Http\Controllers\UtilitiesAnimationController;
use App\Http\Controllers\UtilitiesOtherController;
use App\Http\Controllers\UtilitiesColorController;
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

Route::get('/404', [ErrorController::class, 'index']);

Route::get('/blank', [BlankController::class, 'index']);

Route::get('/buttons', [ButtonsController::class, 'index']);

Route::get('/cards', [CardsController::class, 'index']);

Route::get('/charts', [ChartsController::class, 'index']);

Route::get('/forgot-password', [ForgotPasswordController::class, 'index']);

Route::get('/login', [LoginController::class, 'index']);

Route::get('/register', [RegisterController::class, 'index']);

Route::get('/tables', [TablesController::class, 'index']);

Route::get('/utilities-animation', [UtilitiesAnimationController::class, 'index']);

Route::get('/utilities-color', [UtilitiesColorController::class, 'index']);

Route::get('/utilities-other', [UtilitiesOtherController::class, 'index']);



