<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\NoticiaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/asignarRole', [App\Http\Controllers\RoleController::class, 'asignar']);

Auth::routes();

Route::group(['middleware' => ['auth'], 'as' => 'admin.'], function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::resource('alumnos', AlumnoController::class);
    Route::resource('noticias', NoticiaController::class);
});
