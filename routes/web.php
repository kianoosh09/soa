<?php

 

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

$router->get('hello/{name}', function ($name) use ($router) {

    return "hello {$name}";

});

$router->get('/student/list', 'studentController@list');

$router->post('/student/create', 'studentController@create');

$router->get('/student/read/{id}','studentController@read');

 