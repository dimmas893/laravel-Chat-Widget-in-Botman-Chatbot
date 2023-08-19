<?php

use App\Http\Controllers\BotManChatController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get('/', [BotManChatController::class, 'index']);
Route::match(['get', 'post'], '/botman', [BotManChatController::class, 'invoke']);
