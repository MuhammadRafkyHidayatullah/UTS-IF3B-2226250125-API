<?php

use App\Http\Controllers\assignmentsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/assignments',[assignmentsController::class, 'index']);
Route::post('/assignments',[assignmentsController::class,'store']);