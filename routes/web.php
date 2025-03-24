<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\ModuloController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('home'))->name('home');

Route::resource('cursos', CursoController::class);

Route::resource('modulos', ModuloController::class);
