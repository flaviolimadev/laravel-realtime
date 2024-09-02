<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\OpController;
use App\Http\Controllers\SiteController;
use App\Http\Middleware\CustomAuthenticate;
use Illuminate\Support\Facades\Route;

#Route::get('/', [UserController::class, 'index']);
#Route::get('/teste/{id}', [UserController::class, 'updateUserName']);


/*
| -------------------------------------------------------------------
| Rotas do site inicial da aplicação;
| Não precisa estar autenticado;
*/
Route::get('/',[SiteController::class, 'index'])->name('site.index');
Route::get('/get-ativos',[SiteController::class, 'ativos'])->name('site.ativos');

#--------------------------------------------------------------------

/*
| -------------------------------------------------------------------
| Rotas de autenticação da aplicação;
| Não precisa estar autenticado;
| Login; Registro; Recover; Logout
*/
//Route::get('/loogin', function(){ return redirect()->route('auth.login'); })->name('login');

Route::get('/auth/login',[AuthController::class, 'login'])->name('auth.login');
Route::get('/auth/register',[AuthController::class, 'register'])->name('auth.register');
Route::get('/auth/recover',[AuthController::class, 'recover'])->name('auth.recover');
Route::get('/auth/logout',[AuthController::class, 'logout'])->name('auth.logout');

#--------------------------------------------------------------------

/*
| -------------------------------------------------------------------
| Rotas do sistema de operação;
| E necessario estar autenticado;
| 
*/
Route::middleware('auth')->prefix('dash')->group(function () {

    Route::get('/op',[OpController::class, 'op'])->name('dash.op');

});
#--------------------------------------------------------------------

