<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->group(['prefix' => 'v1'], function () use ($router) {
        $router->get('student', ['uses' => 'StudentController@getAllStudents']);
        $router->get('student/{id}', ['uses' => 'StudentController@showStudent']);
        $router->post('student', ['uses' => 'StudentController@insertStudent']);
        $router->put('student/{id}', ['uses' => 'StudentController@updateStudent']);
    });
});
