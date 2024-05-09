<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/authPage', [UserController::class, 'authPage']);
Route::get('/regPage', [UserController::class, 'regPage']);
Route::get('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);
Route::get('/ordersPage', [OrderController::class, 'ordersPage']);