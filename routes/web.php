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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/projects', [App\Http\Controllers\ProjectsController::class, 'index'])->name('projects');
Route::resource('projects', 'App\Http\Controllers\ProjectsController');
Route::resource('audittest', 'App\Http\Controllers\AuditTestController');


Route::get('projects_data', 'App\Http\Controllers\ProjectsController@projects_data');
Route::post('projects/update', 'App\Http\Controllers\ProjectsController@update')->name('projects.update');


