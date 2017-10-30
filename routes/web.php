<?php

/*
|--------------------------------------------------------------------------
| $routerlication Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an $routerlication.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/api', function () use ($router) {
    return "Lumen RESTful API :";
});

$router->get('api/v1/contact','ContactController@index');
$router->get('api/v1/contact/{id}','ContactController@getContact'); 
$router->post('api/v1/contact','ContactController@createContact');
$router->put('api/v1/contact/{id}','ContactController@updateContact');
$router->delete('api/v1/contact/{id}','ContactController@deleteContact'); 


 

