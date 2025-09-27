<?php

use App\Http\Controllers\AccomodationController;
use App\Models\Accomodation;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/accommodations', [AccomodationController::class, 'index']);
