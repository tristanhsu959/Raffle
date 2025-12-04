<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RaffleController;
use App\Http\Controllers\SettingController;


#Remember to include controller file path
Route::get('/', [RaffleController::class, 'index']);
Route::get('/home', [RaffleController::class, 'index']);

#獎項
Route::get('/prizes', [RaffleController::class, 'prizes']);
#抽獎獎項
Route::get('/drawing/{configKey}', [RaffleController::class, 'prepareDrawing'])->name('prepareDrawing');
#開始抽獎
Route::post('/drawing/start', [RaffleController::class, 'startDrawing'])->name('startDrawing');
#得獎名單
Route::get('/winners/{configKey}', [RaffleController::class, 'listWinners'])->name('winnerList');

Route::get('/setting', [SettingController::class, 'index']);
Route::get('/setting/start', [SettingController::class, 'start']);
