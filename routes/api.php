<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
*/
$router->get('/get-list-user-by-params', ['uses' => 'AuthController@getListUsers']);
