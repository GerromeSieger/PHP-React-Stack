<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/api/logout', [AuthController::class, 'logout']);
    Route::get('/api/user', function (Request $request) {
        return $request->user();
    });

    Route::apiResource('/api/users', UserController::class);
});

Route::post('/api/signup', [AuthController::class, 'signup']);
Route::post('/api/login', [AuthController::class, 'login']);
