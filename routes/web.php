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

Route::group(['prefix' => 'api'], function () {
    Route::group(['prefix' => 'v1'], function () {
        Route::get('/student', 'App\Http\Controllers\StudentController@getAll');
        Route::get('/student/{id}', 'App\Http\Controllers\StudentController@show');
        Route::post('/student', 'App\Http\Controllers\StudentController@create');
        Route::put('/student/{id}', 'App\Http\Controllers\StudentController@update');
    });
});

Route::get('/health', function () {
    return response()->json('We are healthy!');
});