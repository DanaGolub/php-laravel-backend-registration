<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::get('/userProfile', [AuthController::class, 'userProfile']); 
    Route::get('/getUsers', [AuthController::class, 'getUsers']);
    Route::get('/open',[AuthController::class, 'open']);   
    Route::post('/addTwoNumbers',[AuthController::class, 'addTwoNumbers']);   
});
