<?php

use App\Http\Controllers\EventoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::resource('eventos', EventoController::class);
});

require __DIR__.'/auth.php';
