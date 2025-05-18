<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImmobiliController;
use App\Http\Controllers\InquiliniController;
use App\Http\Controllers\ProfiliController;
use App\Http\Controllers\StanzeController;
use App\Http\Controllers\SpeseRicaviController;
use App\Http\Controllers\CausaliSpeseRicaviController;

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
Route::get('immobili/edit/{id}', [ImmobiliController::class, 'edit'])->name('immobili.edit');
Route::put('/immobili/{immobile}', [ImmobiliController::class, 'update'])->name('immobili.update');

//Gestione inquilini
Route::get('inquilini/index/{id?}', [InquiliniController::class, 'index'])->name('inquilini.index');
Route::get('inquilini/{id}', [InquiliniController::class, 'create'])->name('inquilini.create');
Route::post('inquilini/store/{id}', [InquiliniController::class, 'store'])->name('inquilini.store');
Route::get('inquilini/show/{id}/{provenienza}', [InquiliniController::class, 'show'])->name('inquilini.inquilino');
Route::delete('inquilini/destroy/{id}', [InquiliniController::class, 'destroy'])->name('inquilini.delete');
Route::get('inquilini/edit/{id}', [InquiliniController::class, 'edit'])->name('inquilini.edit');
Route::put('/inquilini/{inquilino}', [InquiliniController::class, 'update'])->name('inquilini.update');

//Gestione profili
Route::get('profili/index/{id}', [ProfiliController::class, 'index'])->name('profili.index');
Route::delete('profili/destroy/{id}', [ProfiliController::class, 'destroy'])->name('profili.delete');
Route::get('profili/edit/{id}', [ProfiliController::class, 'edit'])->name('profili.edit');
Route::put('/profili/{profilo}', [ProfiliController::class, 'update'])->name('profili.update');

//Gestione stanze
Route::get('stanze/index/{id}', [StanzeController::class, 'index'])->name('stanze.index');
Route::delete('stanze/destroy/{id}', [StanzeController::class, 'destroy'])->name('stanze.delete');
Route::get('stanze/edit/{id}', [StanzeController::class, 'edit'])->name('stanze.edit');
Route::put('/stanze/{stanza}', [StanzeController::class, 'update'])->name('stanze.update');
Route::get('/stanze/{id}', [StanzeController::class, 'create'])->name('stanze.create');
Route::post('stanze/store/{id}', [StanzeController::class, 'store'])->name('stanze.store');
Route::get('/stanze/storico/{id}', [StanzeController::class, 'storico'])->name('stanze.storico');

//gestione spese e ricavi
Route::get('speseRicavi/index/{id}', [SpeseRicaviController::class, 'index'])->name('speseRicavi.index');

//gestione causali spese e ricavi
Route::get('causaliSpeseRicavi/index', [CausaliSpeseRicaviController::class, 'index'])->name('causaliSpeseRicavi.index');