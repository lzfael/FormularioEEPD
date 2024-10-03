<?php

use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;


Route::get('/formulario', [UsuarioController::class, 'create'])->name('formulario.create');
Route::post('/formulario', [UsuarioController::class, 'store'])->name('formulario.store');

