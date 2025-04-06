<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TripayController;
use App\Http\Controllers\TripayStatusController;
use App\Http\Controllers\LandingController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [LandingController::class, 'index']);

Route::get('/tripay-test', [TripayController::class, 'testTransaction']);
Route::get('/tripay-check-status', [TripayStatusController::class, 'checkStatus']);
Route::post('/tripay-create-transaction', [TripayController::class, 'createTransaction']);



