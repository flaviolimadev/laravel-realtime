<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'index']);
Route::get('/teste/{id}', [UserController::class, 'updateUserName']);
