<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/' , [EventController::class , 'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->as('.dashboard')->group(function () {
    Route::get('/dashboard' , [DashboardController::class , 'index'])->middleware('auth');
    Route::get('/dashboard/usuarios/show' , [ UsersController::class , 'show']);
    Route::get('/dashboard/usuarios/show/{id}' , [ UsersController::class , 'edit']);
    Route::post('/dashboard/usuarios/show/{id}' , [ UsersController::class , 'update']);
    Route::get('/dashboard/usuarios/destroy/{id}' , [ UsersController::class , 'destroy']);
    Route::get('/dashboard/usuarios' , [ UsersController::class , 'index'])->middleware('auth');
    Route::get('/dashboard/usuarios/create' , [ UsersController::class , 'create'])->middleware('auth');
    Route::post('/dashboard/usuarios/create' , [ UsersController::class , 'store'])->middleware('auth');
    
    Route::get('/dashboard/sair' , [DashboardController::class , 'destroy'])->middleware('auth');
});
