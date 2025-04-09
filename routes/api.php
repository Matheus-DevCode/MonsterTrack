<?php

use App\Http\Controllers\MonsterTrackController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', static function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post('/start-mensagem', [MonsterTrackController::class, 'start']);
