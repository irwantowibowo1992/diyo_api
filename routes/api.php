<?php

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

Route::post('/register', [App\Http\Controllers\API\AuthController::class, 'register']);
Route::post('/login', [App\Http\Controllers\API\AuthController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function() {
    Route::get('/profile', function(Request $request) {
        return auth()->user();
    });

    Route::get(
        '/products',
        [App\Http\Controllers\ProductController::class, 'index']
    );

    Route::get(
        '/sales/{id}',
        [App\Http\Controllers\SaleController::class, 'show']
    );

    Route::get(
        '/inventories',
        [App\Http\Controllers\InventryController::class, 'index']
    );
});
