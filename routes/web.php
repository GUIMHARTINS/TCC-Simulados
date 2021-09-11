<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/simulado', function () {
    return view('simulado');
});
Route::get('/resultados', function () {
    return view('resultados');
});
