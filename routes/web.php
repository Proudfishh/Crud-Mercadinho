<?php

use App\Http\Controllers\TesteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teste', [TesteController::class, 'index']);
