<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/immobili', function () {
    return view('immobili.immobili');
})->name('immobili');
