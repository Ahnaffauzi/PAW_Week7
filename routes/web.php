<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalaxyController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/galaxy', [GalaxyController::class, 'index']);