<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImmobiliController;
use App\Http\Controllers\ImmobileController;
use App\Http\Controllers\InquiliniController;
use App\Http\Controllers\InquilinoController;

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
Route::get('/immobile/uscita/{inquilino_id}/{immobile_id}', [ImmobileController::class, 'uscita'])->name('immobili.uscita');

//Gestione inquilini
Route::get('inquilini/index', [InquiliniController::class, 'index'])->name('inquilini.index');
Route::get('inquilini/{id}', [InquilinoController::class, 'create'])->name('inquilini.create');
Route::post('inquilini/store/{id}', [InquilinoController::class, 'store'])->name('inquilini.store');
Route::get('inquilini/index/{id}', [InquilinoController::class, 'index'])->name('inquilini.inquilino');
Route::delete('inquilini/destroy/{id}', [InquilinoController::class, 'destroy'])->name('inquilini.delete');
