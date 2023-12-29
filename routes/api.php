<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/v1/create/radiohost', [ApiController::class, 'CreateRadioHost']);
Route::post('/v1/suspend/radiohost', [ApiController::class, 'SuspendRadioHost']);
Route::post('/v1/unsuspend/radiohost', [ApiController::class, 'UnsuspendRadioHost']);
Route::post('/v1/delete/radiohost', [ApiController::class, 'DeleteRadioHost']);
