<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Controller;

Route::get('/', [Controller::class, 'home']);

Route::get('/simulado', [Controller::class, 'simulado']);

Route::get('/resultado', [Controller::class, 'resultado']);