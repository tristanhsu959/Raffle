<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RaffleController;
use App\Http\Controllers\SettingController;


#Remember to include controller file path
Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);
Route::get('/getWinnerList', [HomeController::class, 'getWinnerList']);

#獎項
Route::get('/prizes', [RaffleController::class, 'prizes']);
#抽獎預備
Route::get('/drawing/{configKey}', [RaffleController::class, 'prepareDrawing'])->name('prepareDrawing');
Route::post('/drawing', [RaffleController::class, 'startDrawing'])->name('startDrawing');

Route::get('/setting', [SettingController::class, 'index']);
Route::get('/setting/start', [SettingController::class, 'start']);
