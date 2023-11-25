<?php

use App\Http\Controllers\AuthController;
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
//Login
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    // Suas rotas protegidas aqui
    Route::get('/authtest', function() {
        return "teste com autenticação";
    });
    Route::get('/protected-route', function (Request $request) {
        return $request->user();
    });
});

Route::get('/test', function() {
    return "teste sem autenticação";
});