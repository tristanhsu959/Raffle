<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RaffleController;


#Remember to include controller file path
Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);
Route::get('/raffle', [HomeController::class, 'raffle']);
Route::get('/getWinnerList', [HomeController::class, 'getWinnerList']);
