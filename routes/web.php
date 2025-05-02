<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImmobiliController;
use App\Http\Controllers\InquiliniController;
use App\Http\Controllers\ProfiliController;

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
Route::delete('/immobili/{id}', [ImmobiliController::class, 'destroy'])->name('immobili.delete');
Route::get('immobili/{id}', [ImmobiliController::class, 'show'])->name('immobili.immobile');
Route::get('/immobili/uscita/{inquilino_id}/{immobile_id}/{data}', [ImmobiliController::class, 'uscita'])->name('immobili.uscita');

//Gestione inquilini
Route::get('inquilini/index', [InquiliniController::class, 'index'])->name('inquilini.index');
Route::get('inquilini/{id}', [InquiliniController::class, 'create'])->name('inquilini.create');
Route::post('inquilini/store/{id}', [InquiliniController::class, 'store'])->name('inquilini.store');
Route::get('inquilini/index/{id}', [InquiliniController::class, 'show'])->name('inquilini.inquilino');
Route::delete('inquilini/destroy/{id}', [InquiliniController::class, 'destroy'])->name('inquilini.delete');

//Gestione profili
Route::get('profili/index', [ProfiliController::class, 'index'])->name('profili.index');