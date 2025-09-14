<?php

use App\Http\Controllers\JWTAuthController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');


Route::post('/register', [JWTAuthController::class, 'register']);
Route::post('/login', [JWTAuthController::class, 'login']);
Route::get('/logout', [JWTAuthController::class, 'logout'])->name('logout');


Route::middleware('auth.jwt')->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/product-list', function () {
        return view('product-list');
    })->name('product-list');

    Route::get('/product-add', function () {
        return view('product-add');
    })->name('product-add');


    Route::get('/productos', [ProductoController::class, 'indexWeb'])->name('productos.index');


});
