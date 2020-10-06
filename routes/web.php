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


$router->group(['prefix' => 'api'], function ($router) {
    $router->get('sample', 'User\SampleController@sample');
    $router->post('login', 'AuthController@login');
});

$router->group(['prefix' => 'api'], function ($router) {
    $router->get('sample', 'UserController\UserLoginController@index');
    $router->post('login', 'UserController\UserLoginController@registerUser');
});

// $router->group(['prefix' => 'api'], function ($router) {
//     $router->get(['as'=>'RegistrationIndex', 'uses'=>'UserController\UserLoginController@index']);
//     $router->post(['as'=>'RegisterUser', 'uses'=>'UserController\UserLoginController@registerUser']);
// });





/**
 * ALL ROUTES THAT DOESN'T REQUIRE AUTHENTICATION
 */
// $router->group(['prefix' => 'api'], function ($router) {
//     $router->post('register', 'AuthController@register');
//     $router->post('login', 'AuthController@login');
// });


/**
 * ALL ROUTES THAT REQUIRES AUTHENTICATION
 */
// $router->group(['middleware' => 'auth', 'prefix' => 'api'], function ($router) {
//     $router->get('profile', 'AuthController@profile');

//     // Post resources route
//     $router->get('posts', 'PostController@index');
//     $router->get('post/{id}', 'PostController@view');
//     $router->post('post/store', 'PostController@store');
//     $router->put('post/{id}', 'PostController@update');
//     $router->delete('post/{id}', 'PostController@destroy');

// });
