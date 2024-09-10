<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RpgFichaController;


Route::get('/healthcheck', function () {
    return response()->json([
    'status' => 'OK',
    'message' => 'API está rodando!'
    ], 200);
   });



Route::resource('rpg_ficha', RpgFichaController::class);
