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
    //Cards routes
    $router->get('cards', 'CardController@getAll');
    $router->post('cards', 'CardController@store');

    //Cards Types routes
    $router->get('cards_types', 'CardTypeController@getAll');
    $router->post('cards_types', 'CardTypeController@store');
    $router->put('cards_types/{id}', 'CardTypeController@update');

    //Payment route
    $router->post('payment_calculation', 'PaymentController@calculation');
});

