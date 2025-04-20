<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImmobiliController;
use App\Http\Controllers\ImmobileController;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

//Gestione immobili
Route::resource('immobili', ImmobiliController::class);
Route::get('immobili/{id}', [ImmobiliController::class, 'destroy'])->name('immobili.delete');
Route::get('immobile/{id}', [ImmobileController::class, 'index'])->name('immobili.immobile');
