<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

#Route::get('/', [UserController::class, 'index']);
#Route::get('/teste/{id}', [UserController::class, 'updateUserName']);


/*
| -------------------------------------------------------------------
| Rotas do site inicial da aplicação;
| Não precisa estar autenticado;
*/
Route::get('/',[SiteController::class, 'index'])->name('site.index');

#--------------------------------------------------------------------

/*
| -------------------------------------------------------------------
| Rotas de autenticação da aplicação;
| Não precisa estar autenticado;
| Login; Registro; Recover
*/
Route::get('/auth/login',[AuthController::class, 'login'])->name('auth.login');
Route::get('/auth/register',[AuthController::class, 'register'])->name('auth.register');
Route::get('/auth/recover',[AuthController::class, 'recover'])->name('auth.recover');

#--------------------------------------------------------------------



