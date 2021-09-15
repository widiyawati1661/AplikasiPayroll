<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/template', [KaryawaController::class, 'template']);
Route::get('/data', [ProfilController::class, 'data']);
Route::get('/gaji', [GajiController::class, 'gaji']);
Route::get('/datamaster', [DatamasterController::class, 'datamaster']);