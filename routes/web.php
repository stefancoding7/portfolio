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
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
// Route::get('/', function () {
//     return view('index');
// });

Route::get('/admin', [App\Http\Controllers\Admin\LoginController::class, 'index']);
Route::post('/admin/login', [App\Http\Controllers\Admin\LoginController::class, 'login']);


//for while
Route::get('/admin/register', [App\Http\Controllers\Admin\LoginController::class, 'registration']);
Route::post('/custom-registration', [App\Http\Controllers\Admin\LoginController::class, 'customRegistration']);







Route::group(['middleware' => ['auth']], function() {
    Route::get('/auth/admin', [App\Http\Controllers\Admin\IndexController::class, 'index']);
    Route::get('/auth/admin/settings', [App\Http\Controllers\Admin\SettingsController::class, 'index'])->name('settings');
    Route::get('/auth/admin/documentation', [App\Http\Controllers\Admin\DocumentationController::class, 'index'])->name('documentation');
    Route::get('/auth/admin/projects', [App\Http\Controllers\Admin\ProjectController::class, 'index'])->name('projects');
    Route::get('/auth/admin/project/{id}', [App\Http\Controllers\Admin\ProjectController::class, 'show'])->name('edit-project');
    Route::get('/auth/admin/seo', [App\Http\Controllers\Admin\SeoController::class, 'index'])->name('seo');


    //SEO
    Route::post('/basic', [App\Http\Controllers\Admin\SeoController::class, 'basic'])->name('basic');
    Route::post('/analytics', [App\Http\Controllers\Admin\SeoController::class, 'analytics'])->name('analytics');




    Route::post('/site-name', [App\Http\Controllers\Admin\SettingsController::class, 'siteName'])->name('site-name');
    Route::post('/resume', [App\Http\Controllers\Admin\SettingsController::class, 'resume'])->name('resume');
    Route::post('/delete-social/{id}', [App\Http\Controllers\Admin\SettingsController::class, 'deleteSocial'])->name('delete-social');
    Route::post('/social', [App\Http\Controllers\Admin\SettingsController::class, 'social'])->name('social');
    Route::post('/skill', [App\Http\Controllers\Admin\SettingsController::class, 'skill'])->name('skill');
    Route::post('/delete-skill/{id}', [App\Http\Controllers\Admin\SettingsController::class, 'deleteSkill'])->name('delete-skill');
    Route::post('/email', [App\Http\Controllers\Admin\SettingsController::class, 'email'])->name('email');
    Route::post('/changeprofile', [App\Http\Controllers\Admin\SettingsController::class, 'store']);
    Route::post('/change-about-me-image', [App\Http\Controllers\Admin\SettingsController::class, 'changeAboutMeImage'])->name('change-about-me-image');
    Route::post('/about-me', [App\Http\Controllers\Admin\SettingsController::class, 'aboutMe'])->name('about-me');
    Route::post('/changelogo', [App\Http\Controllers\Admin\SettingsController::class, 'changelogo']);
    Route::post('/short-info', [App\Http\Controllers\Admin\SettingsController::class, 'shortinfo']);
    Route::post('/createproject', [App\Http\Controllers\Admin\ProjectController::class, 'store'])->name('createproject');
    Route::post('/edit-project/{id}', [App\Http\Controllers\Admin\ProjectController::class, 'update'])->name('update-project');
    Route::post('/delete-project/{id}', [App\Http\Controllers\Admin\ProjectController::class, 'destroy'])->name('delete-project');
});
Auth::routes(['register' => false]);

//vsersion

