<?php

use App\Http\Controllers\AccomodationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

/**
 * Peticiones HTTP: GET, POST, DELETE, PUT(actualiza todo)/PATCH(actualiza una parte) (actualizar)
 */
Route::get('/accommodations', [AccomodationController::class, 'index']);