<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TripayController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/tripay-create-transaction', [TripayController::class, 'createTransaction']);
Route::post('/tripay/callback', [TripayController::class, 'handleCallback']);
