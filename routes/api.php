<?php
use App\Http\Controllers\LibroController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::apiResource('libros', LibroController::class);
Route::apiResource('usuarios', App\Http\Controllers\UserController::class);


