<?php

use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\WalletController;
use App\Http\Controllers\BudgetsController;
use App\Http\Controllers\GoalsController;
use App\Http\Controllers\TransactionsController;
use App\Http\Controllers\CreditCardsController;
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

// Route::group([
//     'middleware' => 'api',
//     'prefix' => 'auth'
// ], function ($router) {
//     Route::post('login', 'AuthController@login');
//     Route::post('logout', 'AuthController@logout');
//     Route::post('refresh', 'AuthController@refresh');
//     Route::post('me', 'AuthController@me');
// });
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::prefix('auth')->group(function() {
    Route::post('login', [\App\Http\Controllers\Auth\Api\LoginController::class, 'login']);
    Route::post('logout', [\App\Http\Controllers\Auth\Api\LoginController::class, 'logout'])->middleware('auth:sanctum');
    Route::post('register', [\App\Http\Controllers\Auth\Api\RegisterController::class, 'register']);
    Route::post('google', [\App\Http\Controllers\Auth\Api\LoginController::class, 'google']);
});


Route::apiResource('wallet', WalletController::class);
Route::apiResource('budget', BudgetsController::class);
Route::apiResource('transaction', TransactionsController::class);
Route::apiResource('goal', GoalsController::class);
Route::apiResource('creditCard', CreditCardsController::class);


