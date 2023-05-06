<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/province', [App\Http\Controllers\ApiControllers\WilayahController::class, 'province']);
Route::get('/regencies', [App\Http\Controllers\ApiControllers\WilayahController::class, 'regencies']);
Route::get('/districts', [App\Http\Controllers\ApiControllers\WilayahController::class, 'districts']);
Route::get('/villages', [App\Http\Controllers\ApiControllers\WilayahController::class, 'villages']);
