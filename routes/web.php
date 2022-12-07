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
    return view('index');
});

/* Login */
$router->get('login/', 'LoginController@show');

/* AdminCP */
$router->get('test/', 'ContactController@show');
$router->post('save/', 'ContactController@save');
$router->delete('deleteContact/{id}', ['uses' => 'ContactController@delete']);

$router->get('Anfahrtsplan/', 'DriveplanController@show');
