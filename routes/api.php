<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\JWTAuthController;
use App\Http\Controllers\ProductoController;
use App\Http\Middleware\JwtMiddleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('/login', [JWTAuthController::class, 'login']);
Route::post('/register', [JWTAuthController::class, 'register']);


Route::middleware('auth.jwt')->group(function () {

    Route::get('/perfil', [JWTAuthController::class, 'perfil']);
    Route::get('/usuarios/{id}', [JWTAuthController::class, 'getUserById']);
    Route::put('/usuarios/{id}', [JWTAuthController::class, 'updateUser']);
    Route::delete('/usuarios/{id}', [JWTAuthController::class, 'deleteUser']);
    Route::get('/usuarios', [JWTAuthController::class, 'getAllUsers']);

    Route::apiResource('/productos', ProductoController::class);
    Route::apiResource('/clientes', ClienteController::class);
});
