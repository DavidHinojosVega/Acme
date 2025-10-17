<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PlanosController;


Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'dashboard'], function(){
Route::get('/',function(){
        return view('admin.dashboard');
});
Route::get('/users', [UsersController::class, 'getUsers']);
Route::get('/Planos', [PlanosController::class, 'getPlanos']);
Route::post('/Planos', [PlanosController::class, 'createPlanos']);

});

//Auth::routes();
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
