<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PracticeController;


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

// Route::get('URL', [Controllerの名前::class, 'Controller内のfunction名']);
Route::get('/practice', [PracticeController::class, 'sample']);
Route::get('/practice2', [PracticeController::class, 'sample2']);
Route::get('/practice3', [PracticeController::class, 'sample3']);
Route::get('/getPractice', [PracticeController::class, 'getPractice']);

Route::get('/movies', 'App\Http\Controllers\MovieController@index');

Route::get('/admin/movies', 'App\Http\Controllers\MovieController@admin');
Route::get('/admin/movies/create', 'App\Http\Controllers\MovieController@admin_create_get');
Route::post('/admin/movies/store', 'App\Http\Controllers\MovieController@admin_create_post');
Route::get('/admin/movies/{id}/edit/', 'App\Http\Controllers\MovieController@edit')->where('id', '[0-9]+')->name('edit');
Route::patch('/admin/movies/{id}/update/', 'App\Http\Controllers\MovieController@update')->where('id', '[0-9]+')->name('update');