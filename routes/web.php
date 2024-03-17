<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImmobiliController;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::resource('immobili', ImmobiliController::class);
