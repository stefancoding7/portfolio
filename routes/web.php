<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::view('/{any}', 'index')->where('any', '.*'); 

Route::get('/', function () {
    return view('index');
});

Route::get('/admin', [App\Http\Controllers\Admin\LoginController::class, 'index']);
Route::post('/admin/login', [App\Http\Controllers\Admin\LoginController::class, 'login']);


//for while
Route::get('/admin/register', [App\Http\Controllers\Admin\LoginController::class, 'registration']);
Route::post('/custom-registration', [App\Http\Controllers\Admin\LoginController::class, 'customRegistration']);







Route::group(['middleware' => ['auth']], function() {
    Route::get('/auth/admin', [App\Http\Controllers\Admin\IndexController::class, 'index']);
    Route::get('/auth/admin/settings', [App\Http\Controllers\Admin\SettingsController::class, 'index'])->name('settings');



    Route::post('/changeprofile', [App\Http\Controllers\Admin\SettingsController::class, 'store']);
    Route::post('/changelogo', [App\Http\Controllers\Admin\SettingsController::class, 'changelogo']);
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
