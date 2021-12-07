<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

 Route::middleware('auth')->get('/user', function (Request $request) {
     return $request->user();
        
 });

Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index']);

Route::get('/skills', [App\Http\Controllers\ProfileController::class, 'skills']);

Route::get('/socials', [App\Http\Controllers\ProfileController::class, 'socials']);


Route::get('/projects', [App\Http\Controllers\ProjectController::class, 'index']);

Route::post('/counter', [App\Http\Controllers\ProjectController::class, 'counter']);






