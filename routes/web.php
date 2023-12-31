<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/nowPlaying', [HomeController::class, 'NowPlaying']);

Route::get('/', [LoginController::class, 'LoginPage']);
Route::get('/login', [LoginController::class, 'LoginPage']);
Route::post('/tryLogin', [LoginController::class, 'TryLogin']);
Route::post('/logout', [LoginController::class, 'Logout']);

Route::get('/createStation', [UserController::class, 'CreateStation']);

Route::group(['prefix' => '/', 'middleware' => 'user_auth'], function () {
    Route::get('/dashboard', [HomeController::class, 'Dashboard']);
});
