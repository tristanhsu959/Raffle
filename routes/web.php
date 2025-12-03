<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RaffleController;


#Remember to include controller file path
Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);
Route::get('/getWinnerList', [HomeController::class, 'getWinnerList']);

Route::get('/raffle', [RaffleController::class, 'prizes']);
Route::get('/raffle/drawing', [RaffleController::class, 'drawing']);
